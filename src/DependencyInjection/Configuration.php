<?php

namespace Impulze\Bundle\InterventionImageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('intervention_image');

        $treeBuilder->getRootNode()
            ->children()
                ->enumNode('driver')
                    ->values(['gd', 'imagick'])
                    ->defaultValue('gd')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
