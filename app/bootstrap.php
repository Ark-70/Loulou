<?php
// retenir la session de l'user
session_start();
// charger les fichiers de configuration globale + les librairies
include 'vendor/autoload.php';
include 'app/config/config.php';
include 'app/libs/functions.php';

// errors
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// blade
$blade = new duncan3dc\Laravel\BladeInstance(
  APP_PATH .  'views',
  STORAGE_PATH . 'blade' . DS . 'cache'
);

// Le ROUTAGE
// Lire les routes possibles
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
  include 'routes.php';
});

// récupérer la méthode et l'URL proposée par le client
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = trim(str_replace( ROOT_URL, '', $_SERVER['REQUEST_URI'] ));

// éliminer les paramètres (?foo=bar)
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// effectuer l'analyse de la commande
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

// traiter la commande (si c'est possible)
switch ($routeInfo[0]) {

  // la commande n'existe pas
  case FastRoute\Dispatcher::NOT_FOUND:
      // ... 404 Not Found
      break;

  // la commande existe mais la méthode est incorrecte
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
      $allowedMethods = $routeInfo[1];
      // ... 405 Method Not Allowed
      break;

  // la commande est connue
  case FastRoute\Dispatcher::FOUND:
      $handler = $routeInfo[1];
      $vars = $routeInfo[2];

      // analyser la route pour détecter une écriture en controleur@méthode

      if ( is_string( $handler ) ) {
        $params = explode( '@', $handler);
        // traiter la méthode du contrôleur
        // les controleurs utilisent un espace de nom
        // post@index  doit appeler App\Controllers\PostController et sa méthode index
        $controller = "Controllers\\" . $params[0];

        try {
            // la classe du controlleur n'existe pas ...
            if (class_exists($controller) === false) {
              echo "Le contrôleur '$controller' n'existe pas.";
              die();
            }
            // AJAX??
            if ( $params[0] === 'AjaxController' ) {
              $controller = "Controllers\\" . $vars['controller'];
              $params[1] = $vars['method'];
              $vars = $vars['id'];
            }
            $controller = new $controller;
            $action = $params[1];
            // la méthode du controleur n'existe pas ...
            if (method_exists($controller, $action) === false) {
              echo "La méthode  '$action' du contrôleur n'existe pas.";
              die();
            }
            // appeler la méthode du contrôleur
            if ( is_array( $vars )) {
              return call_user_func_array( [$controller, $action], $vars );
            } else {
              return call_user_func( [$controller, $action], $vars );
            }
        } catch (\Core\Router\RooterException $exception) {
            echo 'HTTP Error 404 Not Found';
        }
      } else {
        // appeler la fonction anonyme
        call_user_func_array( $handler, $vars);
      }
      break;
}
