<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
class BasketballController extends Controller
{
    /**
     * @Route("/basketball", name="basketball")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/basketball.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/basketball/list", name="basketball_list")
     * @Method("GET")
     */
    public function listAction(Request $request)
    {
        $serializer = $this->get('serializer');
        $users = $this->getDoctrine()->getRepository('AppBundle:BasketballPlays')->findAll();
        $response = $serializer->serialize($users, 'json');
        return new Response($response);
    }
}