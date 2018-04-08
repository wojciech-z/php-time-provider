<?php
namespace Wojciech\TimeProvider;

class TimeProvider implements TimeProviderInterface
{
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
}
