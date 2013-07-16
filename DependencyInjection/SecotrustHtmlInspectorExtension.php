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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * Class SecotrustHtmlInspectorExtension
 */
class SecotrustHtmlInspectorExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setParameter('secotrust_html_inspector.parameters', $config);
    }
}
