<?php

namespace TS\Bundle\MinesweeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->getDoctrine()->getRepository('TSMinesweeperBundle:User')->findOneByUsername('genUser1');

        $globals = array(
            'user' => array(
                'name' => $user->getName(),
                'username' => $user->getUsername(),
            )
        );

        return array('globals' => $globals);
    }
}
