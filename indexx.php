<?php


require "LinkedListNode.php";
require "LinkedList.php";
require "Stack.php";


$first = new LinkedListNode('first');
$second = new LinkedListNode('second');
$third = new LinkedListNode('third');


/*
$list->addToStart($first);
$list->addToStart($second);
$list->addToEnd($third);
$list->removeFromEnd();
$list->removeFromStart();
*/

$s = new Stack(new LinkedList);
$s->push($first);
$s->push($second);
$s->push($third);




echo '<pre>';
var_dump($s->pop());
echo '</pre>';


