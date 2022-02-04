<?php

namespace pro911\Generator\Strategy;

use pro911\Generator\Constants\Constants;
use pro911\Generator\Interfaces\GeneratorInter;

class LaravelGenerator implements GeneratorInter
{
    /**
     * @Notes:
     * @Interface getNickName
     * @return string
     * @author: ftt <pro911@qq.com>
     * @Time: 2022/2/4 15:17
     */
    public function getNickName(): string
    {
        $nickNameHeadNumber = random_int(0,count(Constants::ADJECTIVE_NICKNAME) - 1);
        $nickNameTailNumber = random_int(0,count(Constants::VERB_NICKNAME) - 1);
        return Constants::ADJECTIVE_NICKNAME[$nickNameHeadNumber].Constants::VERB_NICKNAME[$nickNameTailNumber];
    }
}