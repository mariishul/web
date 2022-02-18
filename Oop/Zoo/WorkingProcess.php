<?php
namespace Zoo;

interface WorkingProcess
{
    public function feed(string $food);

    public function cleaning();

    public function buyFood(string $foodName);
}