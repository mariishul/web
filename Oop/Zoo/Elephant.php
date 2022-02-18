<?php

namespace Zoo;
use Zoo\Animal;

class Elephant extends Animal
{
    public function washElephant(){
        return "well done elephant {$this->name} clean";
    }

}