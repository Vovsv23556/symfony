<?php

namespace Store\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
 $newRepo=$this->getDoctrine()->getManager()->getRepository('StoreNewsBundle:News');
$news=$newRepo->findAll();

        return $this->render('StoreNewsBundle:News:index.html.twig', array('news' => $news));
    }
}
