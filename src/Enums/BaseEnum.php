<?php

namespace Hyperzod\PetpoojaSdkPhp\Enums;

class BaseEnum
{
    public function getConstants()
    {
        $reflectionClass = new \ReflectionClass($this);
        return $reflectionClass->getConstants();
    }
}
