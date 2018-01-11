<?php


// TRUC OBSOLETE D'UN PRECEDENT TP COMMENTS JE CROIS

namespace Controllers;
use Models\Tile;
use Models\Admin;

class ArticleController extends Controller
{

  public function index(){
    global $blade;


  }

  public function read( $url )
  {
    global $blade;

    // récuperer les information sur l'article
    $article = Article::getInstance()->getByUrl($url);
    // si l'article existe ...
    if ( $article ) {
      // récupérer le nombre de commentaires associés à l'article
      $commentsNumber = Comment::getInstance()->count( $article['id']);
    } else {
      $commentsNumber = null;
    }
    // dump( $article );die();
    echo $blade->render(
      'article/index',
      [
        'article' => $article,
        'commentsNumber' => $commentsNumber
      ]
    );
    dump( $article );
  }

  public function getComments( $id )
  {
    $comments = Comment::getInstance()->getFromArticle($id);
    //dump( $comments );die();
    echo json_encode( [
      'comments' => $comments
    ]);
  }

  public function addComment( )
  {

    $datas = [
      'comment' => $_GET[ 'comment' ],
      'user_id' => 1,
      'article_id' => $_GET[ 'article_id' ]
    ];
    $idcomment = Comment::getInstance()->add( $datas );
    echo json_encode( [
      'comment' => Comment::getInstance()->get( $idcomment )
    ]);
  }

}

