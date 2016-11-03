<?php

namespace KataStarter\WithAtoum\Domain\User;

class UserId
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @param integer $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
