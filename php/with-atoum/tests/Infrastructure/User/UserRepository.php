<?php

namespace KataStarter\WithAtoum\Infrastructure\User\tests\units;

use atoum;
use KataStarter\WithAtoum\Domain\User\UserRepositoryInterface;
use KataStarter\WithAtoum\Domain\User\User;

class UserRepository extends atoum
{

    public function testClass()
    {
        $this->testedClass
            ->implements(UserRepositoryInterface::class);
    }

    public function testGetById()
    {
        $this
            ->given(
                $providerMock = $this->createMockDataProvider(),
                $userIdMock = $this->createMockUserId(),
                $this->newTestedInstance($providerMock)
            )
            ->object($this->testedInstance->getById($userIdMock))
                ->isInstanceOf(User::class)

            // we check if mock's method was called one time
            ->mock($userIdMock)
                ->call('getId')
                    ->once()

            ->mock($providerMock)
                ->call('has')
                    ->once()

            ->mock($providerMock)
                ->call('get')
                    ->once();
    }

    private function createMockDataProvider()
    {
        $mock = new \mock\KataStarter\WithAtoum\Infrastructure\Provider\DataProviderInterface();
        $mock->getMockController()->has = function($key) {
            return $key == 1234;
        };
        $mock->getMockController()->get = $this->createMockUser();
        return $mock;
    }

    private function createMockUser()
    {
        return new \mock\KataStarter\WithAtoum\Domain\User\User($this->createMockUserId());
    }

    private function createMockUserId()
    {
        return new \mock\KataStarter\WithAtoum\Domain\User\UserId(1234);
    }

}
