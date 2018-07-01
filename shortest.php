<?php

const MAX_ROW = 2;
const MAX_COLUMN = 2;


$matrix = [
    [1,2,3],
    [4,1,2],
    [1,5,3],
   
];


function shortest($row,$column){

    global $matrix;
    $val = $matrix[$row][$column] ;
    if($column == MAX_COLUMN && $row==MAX_ROW){
        return $val;
    }
    if($column == MAX_COLUMN){
        return $val + shortest($row+1,$column);
    }
    if($row==MAX_ROW){
        return $val + shortest($row,$column+1);
    }
    $right = shortest($row,$column+1);
    $down = shortest($row+1,$column);
    $diagnol = shortest($row+1,$column+1);

    return $val + min($right,$down,$diagnol);


}


echo shortest(0,0);