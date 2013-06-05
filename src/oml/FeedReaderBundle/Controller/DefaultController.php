<?php

namespace oml\FeedReaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('omlFeedReaderBundle:Default:index.html.twig', array('name' => $name));
    }
}
