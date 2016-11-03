<?php

namespace KataStarter\WithAtoum\Infrastructure\Provider;

class ArrayDataProvider implements DataProviderInterface
{

    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     */
    public function __construct($data = [])
    {
        if (!$data || !is_array($data)) {
            $data = [];
        }
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * @param mixed $key;
     * @return mixed
     */
    public function get($key)
    {
        if (!$this->has($key)) {
            throw new DataProviderException(sprintf('Data with key "%s" doesn\'t exists.', $key));
        }
        return $this->data[$key];
    }

    /**
     * @param mixed $key
     * @param mixed $data
     * @throws DataProviderException
     */
    public function set($key, $data)
    {
        if (is_null($key)) {
            throw new DataProviderException('Key is null !');
        }
        if (!is_scalar($key)) {
            throw new DataProviderException(sprintf('Key is not a scalar value, %s given.', gettype($key)));
        }
        $this->data[$key] = $data;
    }

}
