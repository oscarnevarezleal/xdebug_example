<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 10/8/2019
 * Time: 3:25 PM
 */

namespace App\test;

use App\Sorting\Sorting;
use PHPUnit\Framework\TestCase;


class SortingTest extends TestCase
{

    public function testSort()
    {
        $s = new Sorting();
        $s->sort();
        $this->assertEquals($s->getItems(), [0, 1, 2, 3, 4, 5, 7, 8, 9]);
    }
}
