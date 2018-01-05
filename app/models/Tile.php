<?php

namespace Models;

class Tile extends Base{
  protected $tableName = TABLE_PREFIX . 'tiles';

  private static $instance;

  public static function getInstance(){
    if ( !isset(self::$instance) ){
    self::$instance = new Tile();
  }
  return self::$instance;
  }
}
?>
