<?php
// Je vais peut-être pas utiliser ça
namespace App\Controllers;


class HomeController extends Controller
{

  public function index()
  {
    global $blade;

    echo $blade->render(
      'index'
    );
  }



}

