<?php

namespace SamyAsm\SamyAsmBlog\Controller;

use SamyAsmBlog\Controller\Base\CoreController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="samy_asm_blog_")
*/
class HomeBlogController extends CoreController
{
    /**
     * @Route("/dashboard", name="index")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return new Response("Bonjour");
    }
}