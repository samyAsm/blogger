<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/21
 * Time: 13:52
 */


namespace SamyAsm\SamyAsmBlog;

use SamyAsm\SamyAsmBlog\DependencyInjection\Compiler\SamyBlogServicePath;
use SamyAsm\SamyAsmBlog\Service\SamyBlogInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SamyBlogBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new SamyBlogServicePath());
        $container->registerForAutoconfiguration(SamyBlogInterface::class)->addTag(SamyBlogInterface::TAG);
    }
}