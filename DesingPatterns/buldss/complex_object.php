<?php 
class House{
    public $walls;
    public $roof;
    public $windows;
    public $doors;

    public function showDetails(){
        return "Walls : $this->walls, Roof: $this->roof, Window $this->windows, Doors: $this->doors";
    }
}

// Builder Interface 

interface HouseBuilder{
    public function buildWalls();
    public function buildRoof();
    public function buildWindows();
    public function buildDoors();
    public function getHouse();
}

class ConcreteHouseBuilder implements HouseBuilder{
    private $house;

    public function __construct() {
        $this->house = new House();
    }

    public function buildWalls() {
        $this->house->walls = "Brick Walls";
    }

    public function buildRoof() {
        $this->house->roof = "Tile Roof";
    }

    public function buildWindows() {
        $this->house->windows = "Sliding Windows";
    }

    public function buildDoors() {
        $this->house->doors = "Wooden Doors";
    }

    public function getHouse() {
        return $this->house;
    }
}

class ConstructionDirector {
    private $builder;

    public function __construct(HouseBuilder $builder) {
        $this->builder = $builder;
    }

    public function constructHouse() {
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildWindows();
        $this->builder->buildDoors();
    }
}


$builder = new ConcreteHouseBuilder();
$director = new ConstructionDirector($builder);
$director->constructHouse();

$house = $builder->getHouse();
echo $house->showDetails();