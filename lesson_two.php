<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changedNickName = 0;

    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function setNickname($nickName){
        if($this->changedNickName >= 2){
            throw new Exception("You've changed the nickname too many times");
        }
        
        if(strlen($nickName) < 3){
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
}

$person_one = new Person('Santiago', 'Medina');
$person_two = new Person('Raul', 'Palacios');


//Old way
// $firstName = 'Santiago';
// $lastName = 'Medina';

// $firstNameTwo = 'Raul';
// $lastNameTwo = 'Palacios';

// $fullName = "$firstName $lastName";
// $fullNameTwo = "$firstNameTwo $lastNameTwo";

// echo "$fullName is friend with $fullNameTwo";

echo "{$person_one->getFullName()}  is friend with {$person_two->getFullName()}";

$person_one->setNickname('carlos');
$person_one->setNickname('roy');
$person_one->setNickname('leroy');
$person_one->setNickname('lee');
echo $person_one->getNickName();



?>