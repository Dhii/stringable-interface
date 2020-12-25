<?php

namespace Dhii\Util\String\FuncTest;

use Dhii\Util\String\StringableInterface as Subject;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see \Dhii\Util\String\StringableInterface}.
 *
 * @since 0.1
 */
class StringableInterfaceTest extends TestCase
{

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return Subject|MockObject
     */
    public function createSubject()
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->setMethods(['__toString'])
            ->getMockForAbstractClass();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createSubject();

        $this->assertInstanceOf(Subject::class, $subject);
    }
}
