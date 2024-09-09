<?php

abstract class Unit {
    protected $alive = true;
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function move($direction){
        echo "{$this->name} walks to {$direction}.\n";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit {
    public function attack($opponent)
    {
        echo "{$this->name} slashs {$opponent}\n";
    }
}

class Archer extends Unit {
    public function attack($opponent)
    {
        echo "{$this->name} fires an arrow to {$opponent}\n";
    }
}


$archer = new Soldier('Archer');
// $archer->move('left');
$archer->attack('opponent');
?>