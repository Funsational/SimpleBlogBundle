<?php

namespace Funsational\SimpleBlogBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\FileLocator;

class SimpleBlogExtension extends Extension
{
    public function configLoad(array $configs, ContainerBuilder $container)
    {
        foreach ($configs as $config) {
            $this->doConfigLoad($config, $container);
        }
    }

    public function doConfigLoad(array $config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));       
        $loader->load('controller.xml');
        $loader->load('templating.xml');
        $loader->load('form.xml');
        
        if (!isset($config['db_driver'])) {
            throw new \InvalidArgumentException('You must provide the simple_blog.db_driver configuration');
        }
        
        try {
            $loader->load(sprintf('%s.xml', $config['db_driver']));
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException(sprintf('The db_driver "%s" is not supported by forum', $config['db_driver']));
        }
    }

    /**
     * Returns the namespace to be used for this extension (XML namespace).
     *
     * @return string The XML namespace
     */
    public function getNamespace()
    {
        return 'http://www.symfony-project.org/shemas/dic/symfony';
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return null;
    }

    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * @return string The alias
     */
    public function getAlias()
    {
        return 'simple_blog';
    }

}
