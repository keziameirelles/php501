<?php

var_dump((new class
{
    public function soma($n1, $n2)
    {return $n1 + $n2;}
})->soma(2, 3));
