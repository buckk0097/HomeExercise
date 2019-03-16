<?php



/**
 *
 */
class Staff extends Person
{

  function __construct($fname, $lname, $yearOfBirth, $age, $vacancy)
  {
    $this->setFName($fname);
    $this->setLname($lname);
    $this->setYearOfBirth($yearOfBirth);
    $this->setAge($age);
    $this->vacancy=$vacancy;
  }
  private $vacancy;
  public function setvacancy($value){
    $this->vacancy=$value;
  }
  public function getvacancy(){
    return $this->vacancy;
  }
}



?>
