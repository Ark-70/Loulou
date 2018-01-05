<?php

namespace Models;

class Param extends Base{
  protected $tableName = TABLE_PREFIX . 'param';

  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    self::$instance = new Article();
  }
  return self::$instance;
  }
}
?>
