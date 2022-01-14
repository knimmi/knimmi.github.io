<?php


class Project
{
    public $id;
    public $name;
    public $image;
    public $description;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}