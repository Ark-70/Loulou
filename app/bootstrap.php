  <?php

// charger les fichiers de configuration globale + les librairies
require_once 'vendor/autoload.php';
require_once  'app/Config/config.php';
require_once APP_PATH . 'Libs' . DS . 'functions.php';
require_once APP_PATH . 'Controllers' . DS . 'controller.php';
// require_once APP_PATH . 'Models' . DS . 'model-posts.php';


// Charger les classes
// require_once APP_PATH . 'Libs' . DS . 'Log.class.php';
// require_once APP_PATH . 'Libs' . DS . 'exPDO.class.php';
// require_once APP_PATH . 'Models' . DS . 'Model.class.php';
// require_once APP_PATH . 'Models' . DS . 'DAO.class.php';
// require_once APP_PATH . 'Models' . DS . 'Post.php';
// require_once APP_PATH . 'Models' . DS . 'PostDAO.php';

// blade
use duncan3dc\Laravel\BladeInstance;
$blade = new BladeInstance(
  APP_PATH . 'Views',
  STORAGE_PATH . 'blade' . DS . 'cache'
  );

// Erreurs
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// // Le ROUTAGE


// // Lire les routes possibles
//   $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route)
//   {
//    require_once 'routes.php';
//  });


// // récupérer la méthode et l'URL proposée par le client
//   $httpMethod = $_SERVER['REQUEST_METHOD'];
//   $uri = trim(str_replace( ROOT_URL, '', $_SERVER['REQUEST_URI'] ));
//   dump( $httpMethod );
//   dump( $uri );


// // éliminer les paramètres (?foo=bar)
//   if (false !== $pos = strpos($uri, '?')) {
//    $uri = substr($uri, 0, $pos);
//  }
//  $uri = rawurldecode($uri);


// // effectuer l'analyse de la commande
//  $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
//  dump( $routeInfo );


// // traiter la commande (si c'est possible)
//  switch ($routeInfo[0]) {

//   // ... 404 Not Found
//    case FastRoute\Dispatcher::NOT_FOUND:
//     echo $blade->render('404');
//    break;



//    // ... 405 Method Not Allowed
//    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
//    $allowedMethods = $routeInfo[1];
//    break;



//    case FastRoute\Dispatcher::FOUND:

//    $handler = $routeInfo[1];
//    $vars = $routeInfo[2];
//     //dump( $handler );
//     //dump( $vars );
//     // die();
//     // analyser la route pour détecter une écriture en contrôleur@méthode
//    $params = explode( '@', $handler);

//    if ( count($params) > 1 ) {
//        // traiter la méthode du contrôleur
//        // les contrôleurs utilisent un espace de nom
//        // post@index doit appeler Controllers\PostController méthode index
//      $controller = "App\Controllers\\" . $params[0];
//        //dump( $controller );die();
//      try {
//        // la classe du contrôleur n'existe pas ...
//        if (class_exists($controller) === false) {
//          echo "Le contrôleur '$controller' n'existe pas.";
//          die();
//        }
//        $controller = new $controller;
//        $action = $params[1];
//        // la méthode du contrôleur n'existe pas ...
//        if (method_exists($controller, $action) === false) {
//          echo "La méthode '$action' du contrôleur n'existe pas.";
//          die();
//        }
//        // appeler la méthode du contrôleur
//        return call_user_func_array( [$controller, $action], $vars );
//      } catch (\Core\Router\RooterException $exception) {
//        echo 'HTTP Error 404 Not Found';
//      }
//    } else {
//        // appeler la fonction anonyme
//      call_user_func_array( $handler, $vars);
//    }
//    break;



//  }





?>
