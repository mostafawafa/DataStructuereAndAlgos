<?php

require 'SortInterface.php';
require 'SelectionSort.php';


$sort = new SelectionSort([2,7,5,0,43,55,21]);
echo '<pre>';
print_r($sort->sort());
echo '</pre>';