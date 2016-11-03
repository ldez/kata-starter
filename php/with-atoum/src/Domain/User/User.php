<?php

namespace KataStarter\WithAtoum\Domain\User;

class User
{

    /**
     * @var UserId
     */
    private $userId;

    /**
     * @param UserId $userId
     */
    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId;
    }

}
