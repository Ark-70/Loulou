<?php


namespace App\Models;

abstract class Model{
  protected $properties         = [];
  protected $allowed_properties = [];
  protected $pk_name;

  public function __construct($id = null)
  {
    $this->id = $id;
  }

  public function getPkName()
  {
    return $this->pk_name;
  }

  public function getPropertyList()
  {
    return $this->allowed_properties;
  }

  public function __get($property)
  {
    if ( !in_array($property, $this->allowed_properties)){
      return null;
    }
    $method = 'get'.ucfirst($property);

    if ( method_exists($this, $method) ){
      return $this -> $method;
    }
    return isset($this -> properties[$property])? $this -> properties[$property] : null;
  }

  public function __set($property, $value)
  {
    if ( !in_array($property, $this->allowed_properties)){
      return false;
    }

    $method = 'set'.ucfirst($property);

    if ( method_exists($this, $method) ){
      return $this->$method($value);
    }

    return $this->properties[$property] = $value;
  }

  public function hydrate(array $data)
  {
   foreach($data as $property => $value){
     $this->$property = $value;
   }
  }

  public function toArray()
  {
    return $this->properties;
  }
}




?>
