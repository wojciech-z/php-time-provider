<?php
namespace Wojciech\TimeProvider;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Wojciech\TimeProvider\DependencyInjection\TimeProviderExtension;

class TimeProviderBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->register(TimeProviderInterface::class, TimeProvider::class);
    }
}
