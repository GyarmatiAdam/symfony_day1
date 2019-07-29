<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function baseAction(Request $request)
    {
        return $this->render('base.html.twig', [
            'title' => 'home',
        ]);

        throw new \Exception('Something went horribly wrong!');

        $this->addFlash('notice', 'You will leave this page!');

        
    }

    /**
     * @Route("/add", name="addpage")
     */
    public function createAction(Request $request)
    {
        return $this->render('pages/create.html.twig', [
            'title' => 'create',
        ]);
    }

    /**
     * @Route("/delete", name="deletepage")
     */
    public function deleteAction(Request $request)
    {
        return $this->render('pages/delete.html.twig', [
            'title' => 'delete',
        ]);
    }

}
