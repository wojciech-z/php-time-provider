<?php
namespace Wojciech\TimeProvider\Test;

use PHPUnit\Framework\TestCase;
use Wojciech\TimeProvider\MockedTimeProvider;
use Wojciech\TimeProvider\TimeProviderInterface;

/**
 * @covers MockedTimeProvider
 */
class MockedTimeProviderTest extends TestCase
{
    public function testCreating()
    {
        $instance = new MockedTimeProvider(new \DateTimeImmutable());

        self::assertInstanceOf(TimeProviderInterface::class, $instance);
    }

    public function testGettingTime()
    {
        $now = \DateTimeImmutable::createFromFormat('U', 1523198938);

        $instance = new MockedTimeProvider($now);

        self::assertEquals($now, $instance->now());
    }
}
