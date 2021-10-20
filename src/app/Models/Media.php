<?php

namespace App\Models;

class Media extends Model
{
  private Int $id;

  private String $name;

  private String $file;

  private String $type;

  private String $subtype;

  function __construct(
    String $id,
    String $name,
    String $file,
    String $type,
    String $subtype
  ) {
    $this->id = $id;
    $this->name = $name;
    $this->file = $file;
    $this->type = $type;
    $this->subtype = $subtype;
  }

  /**
   * Get the value of file
   */
  public function getFile()
  {
    return $this->file;
  }

  /**
   * Set the value of file
   *
   * @return  self
   */
  public function setFile($file)
  {
    $this->file = $file;

    return $this;
  }

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of type
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of subtype
   */
  public function getSubtype()
  {
    return $this->subtype;
  }

  /**
   * Set the value of subtype
   *
   * @return  self
   */
  public function setSubtype($subtype)
  {
    $this->subtype = $subtype;

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
    return array('id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'subtype' => $this->subtype, 'file' => $this->file);
  }
}
