<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 04/02/21
 * Time: 10:22
 */

namespace SamyAsm\SamyAsmBlog\Service;


interface SamyBlogInterface
{
    public const TAG = 'samy.blog.service';

    public function getName(): string;

    public function getHealthInfo(): string;
}