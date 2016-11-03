<?php

namespace KataStarter\WithAtoum\Infrastructure\User;

use KataStarter\WithAtoum\Domain\User\User;
use KataStarter\WithAtoum\Domain\User\UserException;
use KataStarter\WithAtoum\Domain\User\UserId;
use KataStarter\WithAtoum\Domain\User\UserRepositoryInterface;
use KataStarter\WithAtoum\Infrastructure\Provider\DataProviderInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @var DataProviderInterface;
     */
    private $provider;

    /**
     * @param DataProviderInterface $provider
     */
    public function __construct(DataProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @param UserId $userId
     * @return User
     * @throws UserException
     */
    public function getById(UserId $userId)
    {
        $key = $userId->getId();
        if (!$this->provider->has($key)) {
            throw new UserException(sprintf('User with id "%s" doesn\'t exists !', $key));
        }

        return $this->provider->get($key);
    }

}
