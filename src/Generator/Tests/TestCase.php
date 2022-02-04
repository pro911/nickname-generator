<?php

namespace pro911\Generator\Tests;

use pro911\Generator\Facades\GeneratorNickName;
use pro911\Generator\Generator;
use pro911\Generator\Strategy\LaravelGenerator;

class TestCase
{
    public function test(): string
    {
        $laravel = new Generator(new LaravelGenerator());
        return $laravel->getNickName();
    }

    public function test2()
    {
        return GeneratorNickName::getNickName();
    }
}