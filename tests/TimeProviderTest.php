<?php
namespace Wojciech\TimeProvider\Test;

use PHPUnit\Framework\TestCase;
use Wojciech\TimeProvider\TimeProvider;
use Wojciech\TimeProvider\TimeProviderInterface;

/**
 * @covers TimeProvider
 */
class TimeProviderTest extends TestCase
{
    public function testCreating()
    {
        $instance = new TimeProvider();

        self::assertInstanceOf(TimeProviderInterface::class, $instance);
    }

    public function testGettingTime()
    {
        $instance = new TimeProvider();

        // @todo mock time in PHP

        $actual = new \DateTimeImmutable();
        $expected = $instance->now();

        self::assertLessThan(3, abs($actual->getTimestamp() - $expected->getTimestamp()));
    }
}
