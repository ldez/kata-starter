<?php

namespace KataStarter\WithAtoum\Domain\User;

interface UserRepositoryInterface
{

    /**
     * @param UserId $userId
     * @return User
     * @throws UserException
     */
    public function getById(UserId $userId);

}
