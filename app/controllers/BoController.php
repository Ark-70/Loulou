<?php

namespace Controllers;
use Models\Tile;
use Models\Admin;

class BoController extends Controller{

  public function boIndex(){
    global $blade;
    if(isset($_SESSION['login'])){
    // s'il est bien login, index sinon redirigé pour se login

      $tilesList = Tile::getInstance()->getAll();
      echo $blade->render(
        'backoffice/boindex',
        [
          'tiles'=>$tilesList
        ]
      );

    }else{
      redirect('/login');
    }
  }

  public function boIndexEdit(){
    global $blade;
    if(isset($_SESSION['login'])){

      $tilesList = Tile::getInstance()->getAll();
      $tileEdit = Tile::getInstance()->get($_POST['id']);
      echo $blade->render(
        'backoffice/boEdit',
        [
          'tiles'=>$tilesList,
          'tileEdit'=>$tileEdit
        ]
      );

    }else{
      redirect('/login');
    }

  }


  public function boIndexAddMsg($error,$infoType){
    global $blade;
    // Un switch pour rédiger un petit message à l'user selon le résultat de son formulaire

    // la puissance du if simplifié pour assigner rapidement une valeur à une variable selon une condition
    // S'il y a eu erreur, alors on commence toujours le message par... :
    $msg = ($error)? "La tuile n'a pas été envoyée : " : '';

    switch ($infoType){
      case 'success':
        $msg.="La tuile a été envoyée avec succès.";
        break;

      case 'POST':
        $msg.="Vous n'avez pas rempli le formulaire.";
        break;

      case 'title':
        $msg.="Vous n'avez pas renseigné le titre.";
        break;

      case 'excerpt':
        $msg.="Vous n'avez pas renseigné la description de la tuile.";
        break;

      case 'ext':
        $msg.="Extension d'image invalide.";
        break;

      default:
        $msg.="Un problème est survenu.";
        break;
    }

    $tilesList = Tile::getInstance()->getAll();
    echo $blade->render(
      'backoffice/boaddmsg',
      [
        'tiles'=>$tilesList,
        'msg' => $msg
      ]
    );
  }

  public function login(){
    global $blade;

    if(!isset($_SESSION['login'])){
      // s'il est bien PAS déjà login, on lui propose le formulaire, sinon on le redirige vers l'index du backoffice (permet d'éviter un admin déjà logué qui tape à la main /login)
      $error = false;
      echo $blade->render(
        'backoffice/login',
        [
          'error' => $error
        ]
      );

    }else{
      redirect('/bo');
    }
  }

  public function checkLogin(){
    global $blade;
    //Si on arrive ici, alors ça veut dire que !isset($_SESSION['login'])

    $passInput = $_POST['password'];
    $usernameInput = $_POST['username'];
    $admins = Admin::getInstance()->getAll();

    foreach ($admins as $admin) {
      if($usernameInput===$admin['pseudo'] && sha1($passInput)===$admin['password']){
        $_SESSION['login']=true;
        break;
      }
    }

    if (isset($_SESSION['login'])) {
      // = un admin s'est login
      redirect('/bo');
    }else{
      redirect('/login');
    }

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
    $this->boIndexAddMsg($error, $resultAdd);

  }




}

