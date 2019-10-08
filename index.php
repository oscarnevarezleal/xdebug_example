<?php

include_once 'vendor/autoload.php';

$s = new Sorting();
$s->sort();
print_r($s->getItems());