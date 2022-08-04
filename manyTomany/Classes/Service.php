<?php

class Service extends Product
{
    public $procent;
    public $name;

    public function getPret($parent = null)
    {
        return $parent->getPret() * $this->procent /100;
    }

    public function getName($parent = null){
        $parentName = $parent->getName();
        return $this->name."($parentName)";

    }

}
