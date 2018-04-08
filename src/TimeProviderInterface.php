<?php
namespace Wojciech\TimeProvider;

interface TimeProviderInterface
{
    function now(): \DateTimeImmutable;
}
