<?php

namespace Controllers;
use Models\Tile;
use Models\Admin;

class BoController extends Controller
{

  public function index(){
    global $blade;
echo 'Hell';
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

    if ($_POST['username']==='box' && $_POST['password']==='box') {

      $_SESSION['login']=true;

      redirect('/backoffice');

    }else{
      $error = true;
      echo $blade->render(
        'backoffice/login',
        [
          'error' => $error
        ]
      );

    }

  }

}

