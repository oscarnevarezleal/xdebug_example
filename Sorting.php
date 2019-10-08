<?php
/**
 * Created by PhpStorm.
 * User: Oscar
 * Date: 10/8/2019
 * Time: 3:13 PM
 */

class Sorting
{
    private $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function sort()
    {
        $ip = new ImportantStuff();
        $this->items = [9, 8, 7, 0, 1, 2, 3, 4, 5];
        print_r($this->items);
        echo "Sorting! \n";
        print_r($this->items);
        sort($this->items);
        return $this->items;
    }
}