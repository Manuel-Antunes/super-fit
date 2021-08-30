<?

namespace App\Models;

class Exercice
{
  public String $name;
  public String $description;

  function __construct(String $name, String $description)
  {
    $this->name = $name;
    $this->description = $description;
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
}
