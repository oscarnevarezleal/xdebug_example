<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 10/8/2019
 * Time: 3:13 PM
 */
include_once 'Sorting.php';
include_once 'ImportantStuff.php';

class SortingApp
{

    /**
     * SortingApp constructor.
     */
    public function __construct()
    {
        $sorting = new Sorting();
        $sorting->sort();
    }
}

new SortingApp();