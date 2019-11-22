<?php

interface Iterator extends Traversable
{
    abstract public function current();
    abstract public function next();
    abstract public function key();
    abstract public function valid();
    abstract public function key();


}