<?php

class Person {
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
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

?>