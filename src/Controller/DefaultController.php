<?php
/**
 * Created by PhpStorm.
 * User: josio
 * Date: 26/08/2021
 * Time: 11:54
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @return JsonResponse
     *
     * @Route("/api/test", name="blog_list")
     *
     */
    public function testController()
    {
        return new JsonResponse('ofdokfd');
    }
}
