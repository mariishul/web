<?php

namespace Zoo;
use Zoo\WorkingProcess;

abstract class Animal implements WorkingProcess
{
    public $name = '';

    public  function __construct(string $name){
        $this->name = $name;
    }

    public function buyFood(string $foodName){
        return "Weel Done {$foodName} bought";
    }


    public function feed($food)
    {
        return "Well Done {$this->name} is full";
    }

    public function cleaning(){
        return "Well Done cleaning";
    }

}