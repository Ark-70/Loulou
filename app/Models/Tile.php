<?php

namespace App\Models;

class Tile extends Model{
  protected $allowed_properties = ['id', 'title', 'description', 'image', 'layout', 'bg_color_text', 'color_text', 'position', 'bg_color_image', 'auto_size'];
  protected $pk_name = 'id';
}
?>
