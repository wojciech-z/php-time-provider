<?php
namespace Wojciech\TimeProvider;

class MockedTimeProvider implements TimeProviderInterface
{
    /**
     * @var \DateTimeImmutable
     */
    private $now;

    public function __construct(\DateTimeImmutable $now)
    {

        $this->now = $now;
    }

    public function now(): \DateTimeImmutable
    {
        return $this->now;
    }
}
