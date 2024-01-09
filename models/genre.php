<?php
/**
 * Define genre class that is connected to movie
 */
class Genre 
{
    public $name;

    /**
     * @param string $_name
     */
    function __construct($_name)
    {
        $this->name = $_name;
    }
}