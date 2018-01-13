<?php
$route->addRoute( 'GET'  , '/'                        , 'TileController@index' );
$route->addRoute( 'POST' , '/tile/delete'             , 'TileController@deleteTile' );

$route->addRoute( 'GET'  , '/bo'                      , 'BoController@boIndex' );
$route->addRoute( 'GET'  , '/login'                   , 'BoController@login' );
$route->addRoute( 'POST' , '/login'                   , 'BoController@checkLogin' );
$route->addRoute( 'POST' , '/bo/tile/add'             , 'BoController@testAddForm' );
$route->addRoute( 'POST' , '/bo/tile/edit'             , 'BoController@boIndexEdit' );

