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

  public function show($id){
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

  public function deleteTile(){
    // s'il est bien login, on continue, sinon redirigé pour se login

    if(isset($_SESSION['login'])){
      Tile::getInstance()->delete($_POST['id']);
      redirect('/bo');
    }else{
      redirect('/login');
    }



  }





}

