<?php

namespace App\attribute;

use Attribute;

#[Attribute]
class Route
{
    public string $pattern;
    public function __construct(string $pattern) {}
}


