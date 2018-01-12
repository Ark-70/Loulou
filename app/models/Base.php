<?php
namespace Models;
use Libs\exPDO;

class Base {
// Fusion DAO.php + Models.php
// Elle fait le CRUD
// avant DAO était CRUD
// Models était = répresenter la table sous la forme d'un objet

  protected $pdo;
  protected $tableName;

  public function __construct(){
    $this->pdo = exPDO::getInstance();
  }

  /**
   * Indique si l'identifiant existe déjà dans la base.
   * @param  Model  $model objet modèle
   * @return boolean
   */
  public function exists($id)
  {
    $sql = "SELECT COUNT(*) AS c FROM {$this -> tableName} WHERE id = :id";
    $sth = $this->pdo->prepare( $sql );
    $sth->bindValue(':id', $id );
    $sth->execute();
    return ($sth->fetch(\PDO::FETCH_ASSOC)['c'] > 0);
  }


  /**
   * Ajoute les nouvelles informations
   * @param  array  $datas
   * @return integer
   */
  public function add( $datas )
  {
    $sql = "INSERT INTO ".$this -> tableName." ( ";
    foreach( array_keys( $datas ) as $k ) {
      $sql .= " {$k} ,";
    }
    $sql = substr($sql, 0, strlen($sql)-1) . " ) VALUE (";
    foreach( array_keys( $datas ) as $k ) {
      $sql .= " :{$k} ,";
    }
    $sql = substr($sql, 0, strlen($sql)-1) . " )";
    $sth = $this->pdo->prepare($sql);
    foreach( array_keys( $datas ) as $k ) {
      $sth->bindValue(':'.$k, $datas[ $k ]);
    }
    $sth->execute();
    return $this->pdo->lastInsertId();
  }

  /**
   * Édite les  informations
   * @param  array  $datas
   * @return integer
   */
  public function edit($id, $datas)
  {
    $sql = "UPDATE ".$this -> tableName." SET ";
    foreach( array_keys( $datas ) as $k ) {
      $sql .= " {$k} = :{$k} ,";
    }
    $sql = substr($sql, 0, strlen($sql)-1);
    $sql .= " WHERE id =:id";
    $sth = $this->pdo->prepare($sql);
    foreach( array_keys( $datas ) as $k ) {
      $sth->bindValue(':'.$k, $datas[ $k ]);
    }
    $sth->bindValue(':id', $id );
    return $sth->execute();
  }

  /**
   * Retourne les informations d'un identifiant
   * @param  integer  $id identifiant
   * @return void
   */
  public function get($id = null)
  {
    $sql = "SELECT * FROM {$this->tableName} WHERE id = :id";
    $sth = $this->pdo->prepare( $sql );
    $sth->bindValue(':id', $id );
    $sth->execute();
    return $sth->fetch( \PDO::FETCH_ASSOC);
  }

  /**
   * Retourne les informations d'un identifiant
   * @param  integer  $id identifiant
   * @return void
   */
  public function getAll()
  {
    $sql = "SELECT * FROM {$this->tableName}";
    return  $this->pdo->all( $sql );

    //pdo->all() = méthode de exPDO = query + fetchAll
    //pdo->row() = méthode de exPDO = query + fetch


  }

  /**
   * Efface l'identifiant.
   * @param  integer  $id identifiant
   * @return int|boolean
   */
  public function delete( $id )
  {
    $sql = "DELETE FROM {$this->tableName} WHERE id = :id";
    $sth = $this->pdo->prepare($sql);
    $sth->bindValue(':id', $id);
    return $sth->execute();
  }


  /**
   * Efface l'identifiant.
   * @return int|boolean
   */
  public function deleteAll()
  {
    $sql = "DELETE FROM {$this->tableName}";
    $sth = $this->pdo->prepare($sql);
    return $sth->execute();
  }

}
