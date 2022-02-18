<?php
require_once __DIR__ . '/../autoload.php';

use \Zoo\Fish;
use \Zoo\Antilopa;

$obj = new Fish('ted');
$antilopa = new Antilopa('Holi');

var_dump($antilopa->name);

