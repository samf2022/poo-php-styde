<?php

use LessonTwo\Person;
use PHPUnit\Framework\TestCase;

class lessonTwoTest extends TestCase
{
    private $person;

    protected function setUp(): void{
        parent::setUp();
        $this->person = new Person('John', 'Doe', '01/01/1990');
    }

    public function testNicknameShorterThan2()
    {
        $this->expectException(Exception::class);
        $this->person->setNickname('C');
    }

    public function testNonEqualNicknamestoFirstNameOrLastName(){
        $this->expectException(Exception::class);
        $this->person->setNickname('John');
    }
}