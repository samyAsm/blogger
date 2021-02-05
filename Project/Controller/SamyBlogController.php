<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 04/02/21
 * Time: 10:17
 */

namespace SamyAsm\SamyAsmBlog\Controller;


use SamyAsm\SamyAsmBlog\Service\SamyBlogInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SamyBlogController extends AbstractController
{
    /**
     * @var SamyBlogInterface[]
     */
    private $samyBlogService = [];

    public function addSamyBlogService(SamyBlogInterface $samyBlogService)
    {
        $this->samyBlogService[] = $samyBlogService;
    }

    /**
     * @Route("/blog", methods={"GET"}, name="samy_blog_index")
     * @return JsonResponse
     */
    public function index()
    {
        return new JsonResponse("Le blog est ok");
    }
}