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

    echo $blade->render(
      'backoffice/boaddmsg',
      [
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






}

