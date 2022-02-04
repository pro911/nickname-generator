<?php

namespace Generator\Tests;

use Generator\Facades\GeneratorNickName;
use Generator\Generator;
use Generator\Strategy\LaravelGenerator;

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