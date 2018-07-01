<?php


class Stack 
{

public $container;

public function __construct(LinkedList $list)
{
    $this->container = $list;
}


public function push(LinkedListNode $node ){
    $this->container->addToStart($node);

}

public function pop(){

    return $this->container->removeFromStart();
}


}