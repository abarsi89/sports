<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AmericanFootballController extends Controller
{
    /**
     * @Route("/americanFootball", name="americanFootball")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/americanFootball.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/americanFootball/list", name="americanFootball_list")
     * @Method("GET")
     */
    public function listAction(Request $request)
    {
        $serializer = $this->get('serializer');
        $users = $this->getDoctrine()->getRepository('AppBundle:AmericanFootballPlays')->findAll();
        $response = $serializer->serialize($users, 'json');
        return new Response($response);
    }
}