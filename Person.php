<?php
/**
 *
 */
abstract class Person
{
private $fname;
private $lname;
private $yearOfBirth;
private $age;
public function setFName($value){
  $this->fname=$value;
}
public function setLName($value){
  $this->lname=$value;
}
public function setYearOfBirth($value){
  $this->yearOfBirth=$value;
}
public function setAge($value){
  return $this->age=$value;
}
public function getFName(){
  return $this->fname;
}
public function getLName(){
  return $this->lname;
}
public function getYearOfBirth(){
  return $this->yearOfBirth;
}
public function getAge(){
  return date('Y')-$this->age;
}

}
?>
