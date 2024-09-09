<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changedNickName = 0;
    protected $birthDate;

    public function __construct($firstName, $lastName, $birthDate){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }

    public function setNickname($nickName){
        if($this->changedNickName >= 2){
            throw new Exception("You've changed the nickname too many times");
        }
        
        if(strlen($nickName) < 2){
            throw new Exception("Nickname must be at least 2 characters long");
        }

        if($nickName == $this->firstName || $nickName == $this->lastName){
            throw new Exception("Nickname cannot be the same as first or last name");
        }

        
        $this->nickName = $nickName;
        $this->changedNickName++;
    }

    public function getNickName(){
        return $this->nickName;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge() {
        $birthDate = new DateTime($this->birthDate);
        $today = new DateTime();
        $age = $today->diff($birthDate);
        return $age->y;
    }
}

$person_one = new Person('Santiago', 'Medina', '07/03/1994');
$person_two = new Person('Raul', 'Palacios', '01/02/1990');


//Old way
// $firstName = 'Santiago';
// $lastName = 'Medina';

// $firstNameTwo = 'Raul';
// $lastNameTwo = 'Palacios';

// $fullName = "$firstName $lastName";
// $fullNameTwo = "$firstNameTwo $lastNameTwo";

// echo "$fullName is friend with $fullNameTwo";


$person_one->setNickname('ca');

//Testing 2nd exercise from lesson two
//$person_one->setNickname('Medina');

echo "{$person_one->getFullName()}  is friend with {$person_two->getFullName()} and is {$person_one->getAge()} years old";



?>