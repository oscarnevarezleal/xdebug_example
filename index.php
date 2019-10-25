<?php

include_once 'vendor/autoload.php';


$s = new App\Sorting\Sorting();
$s->sort();
print_r($s->getItems());