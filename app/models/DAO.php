<?php

namespace App\Models;
use App\Libs\exPDO;


class DAO {

  protected $pdo;
  protected $tableName;

  public function __construct(){
    $this->pdo = exPDO::getInstance();
  }

  /**
   * Indique si le modèle existe déjà dans la base.
   * @param  Model  $model objet modèle
   * @return boolean
   */
  public function exists( Model $model )
  {
    $pkName = $model->getPkName();
    $sth    = $this->pdo->prepare("SELECT COUNT(*) AS c FROM {$this -> tableName} WHERE ".$pkName." = :pk");
    $sth->bindValue(':pk', $model->$pkName);
    $sth->execute();
    return ($sth->fetch(\PDO::FETCH_ASSOC)['c'] > 0);
  }

  /**
   * Enregistre dans la base les données du modèle.
   * @param  Model  $model objet modèle
   * @return boolean|int
   */
  public function save( Model $model )
  {
    $properties = $model->getPropertyList();
    if ( count($properties) == 0 ){
      return false;
    }

    $exists = self::exists($model);
    $sql = $exists? "UPDATE {$this -> tableName} SET " : "INSERT INTO ".$this -> tableName." SET ";

    foreach($properties as $property){
      $sql .= " {$property} = :{$property} ,";
    }

    $sql = substr($sql, 0, strlen($sql)-1);

    if ( $exists ){
      $sql .= " WHERE id =:id";
    }

    $sth    = $this->pdo->prepare($sql);

    foreach($properties as $property) {
      $sth->bindValue(':'.$property, $model->$property);
    }
    return $sth->execute();
  }

  /**
   * Retourne les informations d'un modèle. L'objet est hydraté.
   * @param  Model  $model objet modèle
   * @return void
   */
  public function read(Model $model)
  {
    $pkName = $model->getPkName();
    $sql = "SELECT * FROM {$this->tableName} WHERE ".$pkName." = :pk";
    $sth = $this->pdo->prepare( $sql );
    $sth->bindValue(':pk', $model->$pkName);
    $sth->execute();
    $model->hydrate($sth->fetch(\PDO::FETCH_ASSOC));
  }

  /**
   * Efface les données du modèle.
   * @param  Model  $model objet modèle
   * @return int|boolean
   */
  public function delete(Model $model)
  {
    $pkName = $model->getPkName();
    $sql = "DELETE FROM {$this->tableName} WHERE ".$pkName." = :pk";
    $sth = $this->pdo->prepare($sql);
    $sth->bindValue(':pk', $model -> $pkName);
    return $sth->execute();
  }


}



?>
