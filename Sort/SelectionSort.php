<?php


class SelectionSort implements SortInterface
{
    private $unsorted;

    public function __construct($unsorted)
    {
        $this->unsorted = $unsorted;    
    }

    public function sort(){

        $sorted = [];
        $count = count($this->unsorted);

        for($j=0;$j<$count;$j++){
            $smallest = 0;

            for($i =1;$i<count($this->unsorted);$i++){

                if($this->unsorted[$i] < $this->unsorted[$smallest] ){
                    $smallest = $i;
                }
                
            }
            $sorted[] = $this->unsorted[$smallest];
            unset($this->unsorted[$smallest]);
            $this->unsorted = array_values($this->unsorted);
        }
        return $sorted;
    }


}