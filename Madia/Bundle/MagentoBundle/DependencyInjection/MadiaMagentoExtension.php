<?php

namespace Madia\Bundle\MadiaMagentoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class MadiaMagentoExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->prependExtensionConfig('madia_mage', $config);

       // $loader->load('services.yml');
    }
}