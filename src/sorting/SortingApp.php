<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 10/8/2019
 * Time: 3:13 PM
 */

namespace App\Sorting;

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