<?php

namespace Zoo;
use Zoo\Animal;
use Zoo\WorkingProcess;

class Insect extends Animal implements WorkingProcess
{
    public $name = '';

    public function buildFarm(){
        return 'farm built';
    }

}