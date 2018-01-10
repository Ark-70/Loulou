<?php

namespace Controllers;
use Models\Tile;
use Models\Admin;

class TileController extends Controller
{

  public function index(){
    global $blade;

    $tilesList = Tile::getInstance()->getAll();

    echo $blade->render(
      'index',
      [
        'tiles' => $tilesList
      ]
    );

  }

  public function error(){
    global $blade;

    echo $blade->render(
        'backoffice/login',
        [
          'error' => $error
        ]
      );
  }

  public function show($id)
  {
    global $blade;

    // récuperer les information sur la tile
    $tile = Tile::getInstance()->get($id);

    echo $blade->render(
      'tile/show',
      [
        'tile' => $tile
      ]
    );

  }



}

