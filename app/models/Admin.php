<?php

namespace App\Models;

class Admin extends Model{
  protected $allowed_properties = ['id', 'pseudo', 'password', 'email'];
  protected $pk_name = 'id';
}
?>
