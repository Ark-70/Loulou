<?php
namespace App\Models;
use App\Models\Tile

class TileDAO extends DAO {

  protected $tableName = TABLE_PREFIX . 'admin';
  private static $instance;
  public static function getInstance(){
   if ( !isset(self::$instance) ){
     self::$instance = new PostDAO();
   }
   return self::$instance;
 }


}




?>
