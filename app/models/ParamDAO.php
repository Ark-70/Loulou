<?php
namespace App\Models;
use App\Models\Param

class ParamDAO extends DAO {

  protected $tableName = TABLE_PREFIX . 'param';
  private static $instance;
  public static function getInstance(){
   if ( !isset(self::$instance) ){
     self::$instance = new PostDAO();
   }
   return self::$instance;
 }


}




?>
