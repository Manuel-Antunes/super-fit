<?php

namespace App\Models;

class User extends Model
{
  private Int $id;
  private String $email;
  private String $name;
  private float $wheight;
  private String $birthDate;
  private String $physics;
  private String $gender;

  function __construct(
    Int $id,
    String $email,
    String $name,
    float $wheight,
    String $birthDate,
    String $physics,
    String $gender
  ) {
    $this->id = $id;
    $this->email = $email;
    $this->name = $name;
    $this->birthDate = $birthDate;
    $this->wheight = $wheight;
    $this->physics = $physics;
    $this->gender = $gender;
  }

  /**
   * Get the value of id
   *
   * @return  Int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @param  Int  $id
   *
   * @return  self
   */
  public function setId(Int $id)
  {
    $this->id = $id;

    return $this;
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
   * Get the value of email
   *
   * @return  String
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @param  String  $email
   *
   * @return  self
   */
  public function setEmail(String $email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of wheight
   */
  public function getWheight()
  {
    return $this->wheight;
  }

  /**
   * Set the value of wheight
   *
   * @return  self
   */
  public function setWheight($wheight)
  {
    $this->wheight = $wheight;

    return $this;
  }

  /**
   * Get the value of birthDate
   */
  public function getBirthDate()
  {
    return $this->birthDate;
  }

  /**
   * Set the value of birthDate
   *
   * @return  self
   */
  public function setBirthDate($birthDate)
  {
    $this->birthDate = $birthDate;

    return $this;
  }

  /**
   * Get the value of physics
   */
  public function getPhysics()
  {
    return $this->physics;
  }

  /**
   * Set the value of physics
   *
   * @return  self
   */
  public function setPhysics($physics)
  {
    $this->physics = $physics;

    return $this;
  }

  public function toArray()
  {
    return array('id' => $this->id, 'name' => $this->name, 'physics' => $this->physics, 'birthDate' => $this->birthDate, 'wheight' => $this->wheight, 'email' => $this->email, 'gender' => $this->gender);
  }

  /**
   * Get the value of gender
   */
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * Set the value of gender
   *
   * @return  self
   */
  public function setGender($gender)
  {
    $this->gender = $gender;

    return $this;
  }
}
