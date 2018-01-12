<?php
$route->addRoute( 'GET'  , '/'                        , 'TileController@index' );

$route->addRoute( 'GET'  , '/tile/show/{id:[0-9]+}'   , 'TileController@show' );
$route->addRoute( 'GET'  , '/tile/delete/{id:[0-9]+}' , 'TileController@delete' );
$route->addRoute( 'POST' , '/tile/add'                , 'TileController@testAddForm' );

$route->addRoute( 'GET'  , '/bo'                      , 'BoController@boIndex' );
$route->addRoute( 'GET'  , '/bo/success/'             , 'BoController@boIndexAddSuccess' );
$route->addRoute( 'GET'  , '/bo/fail/'                , 'BoController@boIndexAddFail' );
$route->addRoute( 'GET'  , '/login'                   , 'BoController@login' );
$route->addRoute( 'POST' , '/login'                   , 'BoController@checkLogin' );

/*// AJAX
$route->addRoute( ['GET','POST'], '/ajax/{controller}/{method}[/{id}]', 'AjaxController@index' );
$route->addRoute( 'GET',          '/demo', function () {
  global $blade;
  echo $blade->render( 'post/ajax' );
});
*/
