<?php

namespace KataStarter\WithAtoum\Domain\User\tests\units;

use atoum;
use KataStarter\WithAtoum\Domain\User\UserId;

class User extends atoum
{

    public function testClass()
    {
        $this->testedClass
            ->hasMethod('getUserId');
    }

    public function testInstance()
    {
        $this
            ->assert('Test create new instance and getter of userId')
            ->given(
                $mockUserId = new \mock\KataStarter\WithAtoum\Domain\User\UserId(1234),
                $this->newTestedInstance($mockUserId)
            )
            ->object($this->testedInstance->getUserId())
                ->isInstanceOf(UserId::class)
        ;
    }

}
