<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 04/02/21
 * Time: 10:54
 */

namespace SamyAsm\SamyAsmBlog\DependencyInjection\Compiler;


use SamyAsm\SamyAsmBlog\Controller\SamyBlogController;
use SamyAsm\SamyAsmBlog\Service\SamyBlogInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class SamyBlogServicePath implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->has(SamyBlogController::class)) {
            return;
        }

        $controller = $container->findDefinition(SamyBlogController::class);
        foreach (array_keys($container->findTaggedServiceIds(SamyBlogInterface::TAG)) as $serviceId) {
            $controller->addMethodCall('addSamyBlogService', [new Reference($serviceId)]);
        }
    }
}