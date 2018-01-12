<?php

namespace Controllers;
use Models\Tile;
use Models\Admin;

class BoController extends Controller
{

  public function boIndex(){
    global $blade;
    if(isset($_SESSION['login'])){
    // s'il est bien login, index sinon redirigé pour se login
      echo $blade->render(
        'backoffice/boindex'
      );

    }else{
      redirect('/login');
    }

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
      redirect('/backoffice');
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
      redirect('/backoffice');
    }else{
      redirect('/login');
    }

  }

  public function PrepTileSave(){
    global $blade;
// TESTER D'APPELER CETTE FONCTION DIRECTEMENT DANS LA VUE ET ENVEVER LE ACTION DU FORM


    if (!empty($_POST)) {
      // afficher - en debug- les informations sur le fichier uploadé
      //d($_FILES);
      // produire les 3 variables $name, $email, $message
      $title = $_POST['title'];
      $excerpt = $_POST['excerpt'];

      $source = $_FILES['poster']['tmp_name'];
      $original = $_FILES['poster']['name'];
      $original_filename = pathinfo($original, PATHINFO_FILENAME);
      $original_ext = pathinfo($original, PATHINFO_EXTENSION);

      $filename = $original_filename . '_' . time() . '.' . $original_ext;
      $dest = ASSETS_PATH . 'img'.DS. $filename;

      if ( $_FILES['poster']['type'] === 'image/jpeg') {
        move_uploaded_file( $source, $dest);
      }
    }
  }

}

