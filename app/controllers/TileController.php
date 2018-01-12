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

  public function testAddForm(){
    //Ici, on teste si le formulaire est bien rempli et valide (extension d'image)

    $error = false;
    $errorProblem = '';

    if(!empty($_POST)){
      foreach ($_POST as $key => $value) {
        if(empty($_POST[$key])){
          $error = true;
          $errorProblem = $key;
        }
      }
    }else{
      $error = true;
      $errorProblem = 'POST';
    }

    if ($_FILES['poster']['type'] !== 'image/jpeg') {
      $error = true;
      $errorProblem = 'ext';
    }

    if($error){
      //ne marche pas sans $this (on doit spécifier l'instanciation)
      $this->boIndexAddMsg($error, $errorProblem);
    }else{
      $this->tileSave();
    }
  }

   public function tileSave(){
    global $blade;

    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $layout = $_POST['layout'];

    $source = $_FILES['poster']['tmp_name'];
    $original = $_FILES['poster']['name'];
    $original_filename = pathinfo($original, PATHINFO_FILENAME);
    $original_ext = pathinfo($original, PATHINFO_EXTENSION);

    $filename = $original_filename . '_' . time() . '.' . $original_ext;
    $dest = ASSETS_PATH . 'img'.DS. $filename;
    move_uploaded_file( $source, $dest);
    $datas = ['title'=>$title,'description'=>$excerpt, 'image'=>$filename, 'layout'=>$layout];
    // Merci les spaghettis n°5
    Tile::getInstance()->add($datas);

    $error = false;
    $resultAdd = 'success';
    BoController::getInstance()->boIndexAddMsg($error, $resultAdd);

  }



}

