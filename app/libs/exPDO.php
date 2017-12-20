<?php

namespace Libs;

class exPDO extends \PDO {
  // instance de la classe
  private static $instance;

  // L'objet de gestion des logs d'erreurs
  private static $log;

  /*
    Retourne l'instance unique de la classe.
   */
  public static function getInstance() {
    if ( !self::$instance ) {
      try {
        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;
        self::$instance = new exPDO(
          $dsn, DB_USER, DB_PASSWORD,
          [ \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
            // déclencher une exception si une erreur de traitement est rencontrée
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            // simulation des requêtes préparées avec multiples paramètres de même nom
            \PDO::ATTR_EMULATE_PREPARES => true ] );
        self::$log = new Log( STORAGE_PATH . 'log' . DS . 'db' . DS );
      } catch ( Exception $e) {
        trigger_error('Impossible de se connecter à la base', E_USER_ERROR);
      }
    }
    return self::$instance;
  }

  /*
   *  Ajoute une donnée
   *  @param  string $sql
   *  @return int
   */
  public function insert( $sql ) {

    try {
      if ( $this->exec($sql) > 0 ){
        return $this->lastInsertId();
      }
      return false;
    } catch ( \PDOException $e ) {
      echo $this->ExceptionLog( $e->getMessage(), $sql );
      die();
    }
  }


  /**
   *  Retourne un tableau qui représente toutes les données.
   *
   *  @param  string $sql
   *  @return array
   */
  public function all( $sql ) {

    try {
      $sth = $this->query($sql);
      if ( $sth ){
        return $sth->fetchAll();
      }
      return false;
    } catch ( \PDOException $e ) {
      echo $this->ExceptionLog( $e->getMessage(), $sql );
      die();
    }

  }

  /**
   *  Retourne un tableau qui représente une colonne de données.
   *
   *  @param  string $sql
   *  @return array
   */
  public function column( $sql ){

    try {
      $result = [];
      $sth = $this->query( $sql );
      if ( $sth ){
        while ( $elt = $sth -> fetchColumn(0) ){
          $result[]  = $elt;
        }
      }
      return $result;
    } catch ( \PDOException $e ) {
      echo $this->ExceptionLog( $e->getMessage(), $sql );
      die();
    }
  }

  /**
   * Retourne une ligne de données.
   *
   *  @param  string $sql
   *  @return array
   */
  public function row( $sql ) {

    try {
      $sth = $this->query($sql);
      $result = [];
      if ( $sth ){
        $result  = $sth->fetch();
      }
      return $result;
    } catch ( \PDOException $e ) {
      echo $this->ExceptionLog( $e->getMessage(), $sql );
      die();
    }
  }

  /**
   *  Retourne une valeur.
   *
   *  @param  string $sql
   *  @return string|boolean
   */
  public function single( $sql ) {

    try {
      $sth  = $this->query($sql);
      if ( $sth ){
        $column = $sth->fetchColumn();
        return (is_array($column) && ( count($column) > 0))? $column[0] : $column;
      }
      return false;
    } catch ( \PDOException $e ) {
      echo $this->ExceptionLog( $e->getMessage(), $sql );
      die();
    }
  }

  /**
   * Ecrit dans le fichier de log et retourne l'exception.
   *
   * @param  string $message
   * @param  string $sql
   * @return string
   */
  private function ExceptionLog( $message, $sql = '' )
  {
    $exception = 'Exception déclenchée. <br />' .
                 $message . '<br />' .
                 "l'erreur est enregistrée dans le fichier de log <b>" . self::$log->getFileName() .'</b>.';
    if (!empty( $sql )) {
      $message .= "\r\nRaw SQL : " . $sql;
    }
    self::$log->write($message);
    return $exception;
  }

}


