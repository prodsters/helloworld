<?php
namespace App\Http\OOP;

class Student {

 private $name;
 private $birthDate;
 private $gender;
 public static $uniform;
 protected $addres;

 public function __construct() {

 }

 public static function setUniform($uniform) {
 	Self::$uniform = $uniform;
 }

 protected function getAddress() {
 	return $this->address;
 }

 protected function setAddress($address) {
 	$this->address = $address;
 }

 public function getName() {
 	return $this->name;
 }

 public function setName($name) {
 	$this->name = $name;
 }

 public function getBirthDate() {
 	return $this->birthDate;
 }

 public function setBirthDate($day, $month, $year) {
 	$this->birthDate = $day . "-" . $month . "-" . $year;
 }

 public function getGender() {
 	return $this->gender;
 }
 
 public function setGender($gender) {
 	$this->gender = $gender;
 }
 
 private function causeError() {
 	return "\nThis is a private function";
 }

 public function toString() {
 	return "\n" . $this->name . " | ". $this->birthDate . " | ". $this->gender;  
 }

 public static function whoAmI() {
 	return "Student.class Object";
 }


}












?>