<?php

function getiIterable($myIterable)
{
  foreach($myIterable as $item)
  {
    echo $item . PHP_EOL;
  }
}

$arr = ['a', 'b', 'c'];
getiIterable($arr);