<?php

namespace App\Models;

class Param extends Model{
  protected $allowed_properties = ['id', 'title', 'status', 'copyright',
  'random'];
  protected $pk_name = 'id';
}
?>
