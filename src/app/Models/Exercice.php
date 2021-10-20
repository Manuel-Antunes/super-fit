<?php

namespace App\Models;

class Exercice extends Model
{
  private String $name;
  private String $description;
  private Int $id;

  function __construct(
    String $name,
    String $description,
    Int $id
  ) {
    $this->name = $name;
    $this->description = $description;
    $this->id = $id;
  }

  /**
   * Get the value of name
   *
   * @return  String
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param  String  $name
   *
   * @return  self
   */
  public function setName(String $name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of description
   *
   * @return  String
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @param  String  $description
   *
   * @return  self
   */
  public function setDescription(String $description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function toArray()
  {
    return array('id' => $this->id, 'name' => $this->name, 'description' => $this->description);
  }
}
