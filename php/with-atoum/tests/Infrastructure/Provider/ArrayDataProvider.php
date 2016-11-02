<?php

namespace KataStarter\WithAtoum\Infrastructure\Provider\tests\units;

use atoum;
use KataStarter\WithAtoum\Infrastructure\Provider\DataProviderInterface;
use KataStarter\WithAtoum\Infrastructure\Provider\DataProviderException;

class ArrayDataProvider extends atoum
{

    public function testClass()
    {
        $this->testedClass
            ->implements(DataProviderInterface::class);
    }

    public function testConstructor($assert, $data, $result)
    {
        $this
            ->assert($assert)
            ->given(
                $this->newTestedInstance($data)
            )
            ->array($this->testedInstance->getData())
                ->isEqualTo($result);
    }

    protected function testConstructorDataProvider()
    {
        return [
            [
                'Test with empty array',
                [],
                []
            ],
            [
                'Test with simple ordered array',
                [ 1, 2, 3 ],
                [
                    0 => 1,
                    1 => 2,
                    2 => 3
                ]
            ],
            [
                'Test with simple associate array',
                [
                    'A' => 1,
                    'B' => 2
                ],
                [
                    'A' => 1,
                    'B' => 2
                ]
            ],
            [
                'Test with string',
                'foo',
                []
            ],
            [
                'Test with integer',
                123,
                []
            ]
        ];
    }

    public function testHas($assert, $data, $id, $result)
    {
        $this
            ->assert($assert)
            ->given(
                $this->newTestedInstance($data)
            )
            ->boolean($this->testedInstance->has($id))
                ->isEqualTo($result);
    }

    protected function testHasDataProvider()
    {
        return [
            [
                'Test with existing data',
                [
                    'A' => 1
                ],
                'A',
                true
            ],
            [
                'Test with non existing data',
                [
                    'A' => 1
                ],
                'B',
                false
            ],
            [
                'Test with existing data but null',
                [
                    'A' => null
                ],
                'A',
                true
            ]
        ];
    }

    public function testGet($assert, $data, $id, $result)
    {
        $this
            ->assert($assert)
            ->given(
                $this->newTestedInstance($data)
            )
            ->variable($this->testedInstance->get($id))
                ->isEqualTo($result);
    }

    protected function testGetDataProvider()
    {
        return [
            [
                'Test with ordered data',
                [ 1, 2, 3],
                0,
                1
            ],
            [
                'Test with associate array',
                [
                    'A' => 1,
                    'B' => 2
                ],
                'B',
                2
            ]
        ];
    }

    public function testGetNonExistantData()
    {
        $this
            ->given(
                $this->newTestedInstance()
            )
            ->exception(function($atoum) {
                $atoum->testedInstance->get('foo');
            })
                ->isInstanceOf(DataProviderException::class)
                    ->message
                        ->isEqualTo('Data with key "foo" doesn\'t exists.');
    }

    public function testSet($assert, $key, $data)
    {
        $this
            ->assert($assert)
            ->given(
                $this->newTestedInstance()
            )
            ->if(
                $this->testedInstance->set($key, $data)
            )
            ->variable($this->testedInstance->get($key))
                ->isEqualTo($data)
        ;
    }

    protected function testSetDataProvider()
    {
        return [
            [
                'Test with simple data',
                'A',
                'foo'
            ]
        ];
    }

    public function testSetWithException($assert, $key, $message)
    {
        $this
            ->assert($assert)
            ->given(
                $this->newTestedInstance()
            )
            ->exception(function($atoum) use ($key) {
                $atoum->testedInstance->set($key, 'foo');
            })
                ->message
                    ->isEqualTo($message);
    }

    protected function testSetWithExceptionDataProvider()
    {
        return [
            [
                'Test with null key',
                null,
                'Key is null !'
            ],
            [
                'Test with array key',
                [ 1, 2, 3],
                'Key is not a scalar value, array given.'
            ],
            [
                'Test with object key',
                new \stdClass(),
                'Key is not a scalar value, object given.'
            ]
        ];
    }

}
