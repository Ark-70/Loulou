<?php

//== Afficher les articles ========================================
$route->addRoute( 'GET', '/', function () {
  global $blade;
  echo $blade->render(
    'accueil'
  );
});


//== Afficher un article ==========================================
$route->addRoute( 'GET', '/post/{id:[0-9]+}', function ( $id ) {
  //dump( $params);die();
 showpost_action( $id );
});

//== Supprimer un article ==========================================
$route->addRoute( 'GET', '/post/delete/{id:[0-9]+}', function ($params){
  deletepost_action($params['id']);
}
);


//== Ajouter un article GET ==========================================
$route->addRoute( 'GET', '/post/add', function (){
  addpost_action();
}
);

//== Ajouter un article POST ==========================================
$route->addRoute( 'POST', '/post/add', function (){
  addpost_action();
}
);

?>
