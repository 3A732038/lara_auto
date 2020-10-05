<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hellow\Lara;
use Demo\Hellow;

$world = new World();
$lara= new Lara();
$vincent= new Hellow\Someone('Vincent');

$mary = new \Demo\Hellow\Someone('Mary');
$john = new Demo\Hellow\Someone('John');
