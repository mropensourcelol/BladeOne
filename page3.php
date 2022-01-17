<?php
include "lib/BladeOne.php";
use eftec\bladeone\BladeOne;

$views = __DIR__.'/views';
$cache = __DIR__.'/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);

echo $blade->run("page3",array());
  