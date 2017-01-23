<?php

namespace Dhii\Util\String\FuncTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Util\String\StringableInterface}.
 *
 * @since [*next-version*]
 */
class ContextInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Util\\String\\StringableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ContextInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__toString()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
