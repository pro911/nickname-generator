<?php

namespace Generator;

use Generator\Interfaces\GeneratorInter;

class Generator
{

    /**
     * @var GeneratorInter
     */
    private $generatorInter;

    public function __construct(GeneratorInter $generatorInter)
    {
        $this->generatorInter = $generatorInter;
    }

    /**
     * @Notes:
     * @Interface getNickName
     * @return string
     * @author: ftt <pro911@qq.com>
     * @Time: 2022/2/4 15:17
     */
    public function getNickName(): string
    {
        return $this->generatorInter->getNickName();
    }
}