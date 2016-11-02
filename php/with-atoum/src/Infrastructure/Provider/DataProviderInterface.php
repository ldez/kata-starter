<?php

namespace KataStarter\WithAtoum\Infrastructure\Provider;

interface DataProviderInterface
{

    /**
     * @param mixed $id
     * @return bool
     */
    public function has($id);

    /**
     * @param mixed $id;
     * @return mixed
     * @throws DataProviderException
     */
    public function get($id);

    /**
     * @param mixed $id
     * @param mixed $data
     * @throws DataProviderException
     */
    public function set($id, $data);

}
