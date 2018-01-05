<?php
$route->addRoute( 'GET'  , '/'                        , 'TileController@index' );

$route->addRoute( 'GET'  , '/tile/show/{id:[0-9]+}'   , 'TileController@show' );
$route->addRoute( 'GET'  , '/tile/delete/{id:[0-9]+}' , 'TileController@delete' );
$route->addRoute( 'GET'  , '/tile/add'                , 'TileController@add'  );
$route->addRoute( 'POST' , '/tile/add'                , 'TileController@addSave' );
$route->addRoute( 'GET'  , '/tile/edit/{id:[0-9]+}'   , 'TileController@edit' );
$route->addRoute( 'POST' , '/tile/edit/{id:[0-9]+}'   , 'TileController@editSave' );

$route->addRoute( 'GET' , '/backoffice'               , 'BoController@index' );
$route->addRoute( 'GET' , '/login'                    , 'BoController@login' );

/*// AJAX
$route->addRoute( ['GET','POST'], '/ajax/{controller}/{method}[/{id}]', 'AjaxController@index' );
$route->addRoute( 'GET',          '/demo', function () {
  global $blade;
  echo $blade->render( 'post/ajax' );
});
*/
