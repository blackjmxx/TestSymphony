<?php

namespace ISportis\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
  public function indexAction()
  {
    return $this->render('ISportisTestBundle:Test:index.html.twig',array('nom' => 'winzou'));
  }
}
