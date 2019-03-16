<?php

/**
 *
 */
class Teacher extends Person
{

  function __construct($fname, $lname, $yearOfBirth, $age, $subjects, $department)
  {
    $this->setFName($fname);
    $this->setLname($lname);
    $this->setYearOfBirth($yearOfBirth);
    $this->setAge($age);
    $this->subjects=$subjects;
    $this->department=$department;
  }
  private $subjects=array();
  private $department;
  public function getSubjects(){
    return $this->subjects;
  }
  public function setSubjects($value){
    array_push($this->department,$value);
  }
  public function setdepartment($value){
    $this->department=$value;
  }
  public function getdepartment(){
    return $this->department;
  }
}



?>
