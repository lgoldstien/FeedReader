<?php

namespace oml\FeedReaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('omlFeedReaderBundle:Public:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('omlFeedReaderBundle:Public:about.html.twig');
    }

}
