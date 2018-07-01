<?php


class LinkedList
{

    public $head = null;
    public $tail;

    public function isEmpty(){

        return $this->head == null ;
    }

    public function addToStart(LinkedListNode $node){

        if($this->isEmpty()){
            $this->head= $this->tail = $node;
        }
        else {
            $node->next = $this->head;
            $this->head = $node;
        }


    }

    public function addToEnd(LinkedListNode $node){

        if($this->isEmpty()){
            $this->head= $this->tail = $node;
        }
        else{
            $this->tail->next = $node;
            $this->tail = $node;
        }
    }


    public function removeFromStart(){

        $node = $this->head; 
        $node->next = null;
        $this->head= $node->next;
        return $node;

    }

    public function removeFromEnd(){

        $node = $this->head;

        while($node->next != $this->tail){
            $node = $node->next;
        }

        $node->next = null;
        $this->tail = $node;
        return $node;

    }





}