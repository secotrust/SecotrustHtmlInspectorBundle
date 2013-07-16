<?php

/*
 * This file is part of the SecotrustHtmlInspectorBundle package.
 *
 * (c) Henrik Westphal <henrik.westphal@gmail.com>
 * (c) secotrust IT GmbH & Co. KG - http://www.secotrust.de
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Secotrust\Bundle\HtmlInspectorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('secotrust_html_inspector');

        $rootNode
            ->children()
                ->booleanNode('load_javascript')
                    ->defaultTrue()
                    ->info('Set to false if you want to load HTML Inspector yourself')
                ->end()
                ->booleanNode('autorun')
                    ->defaultTrue()
                    ->info('Automatically run the inspection on load')
                ->end()
                /*
                ->arrayNode('rules')
                    ->prototype('scalar')->end()
                    ->info('List of rule names to run when inspecting')
                ->end()
                */
                ->arrayNode('exclude')
                    ->example(array('.debug', 'svg'))
                    ->prototype('scalar')->end()
                    ->info('List of selectors to exclude from traversal')
                ->end()
                ->arrayNode('exclude_subtree')
                    ->example(array('svg'))
                    ->prototype('scalar')->end()
                    ->info('List of selectors to exclude descendants from traversal')
                ->end()
                ->scalarNode('dom_root')
                    ->defaultValue('html')
                    ->info('The DOM element to start traversing from')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
