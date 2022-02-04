<?php

namespace pro911\Generator\Facades;
use Illuminate\Support\Facades\Facade;
use pro911\Generator\Strategy\LaravelGenerator;
/**
 * Class GeneratorNickName
 *
 * @package Generator\Facades;
 *
 * @method static string getNickName()
 */
class GeneratorNickName extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return LaravelGenerator::class;
    }
}