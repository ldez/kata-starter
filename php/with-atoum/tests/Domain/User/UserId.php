<?php

namespace KataStarter\WithAtoum\Domain\User\tests\units;

use atoum;

class UserId extends atoum
{

    public function testClass()
    {
        $this->testedClass
            ->hasMethod('getId');
    }

    public function testInstance()
    {
        $this
            ->object($this->newTestedInstance(1234))
            ->integer($this->testedInstance->getId())
                ->isEqualTo(1234);
    }

}
