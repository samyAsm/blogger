<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 04/02/21
 * Time: 10:07
 */

namespace SamyAsm\SamyAsmBlog\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('health_check');
        return $treeBuilder;
    }
}