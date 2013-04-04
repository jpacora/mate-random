<?php
    $unsorted = array(2,4,5,63,4,5,63,2,4,43);
	print_r($unsorted);
 	echo '<br>';
    function quicksort($array)
    {
        if (count($array) == 0)
            return array();
 
        $pivot = $array[0];
        $left = $right = array();
 
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $pivot)
                $left[] = $array[$i];
            else
                $right[] = $array[$i];
        }
 
        return array_merge(quicksort($left), array($pivot), quicksort($right));
    }
 
    $sorted = quicksort($unsorted);
 
    print_r($sorted);