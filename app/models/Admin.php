<?php
namespace Models;

class Admin extends Base{
  protected $tableName = TABLE_PREFIX . 'admin';

  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    self::$instance = new Admin();
  }
  return self::$instance;
  }

}
?>
