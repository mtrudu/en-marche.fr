<?php

namespace AppBundle\Assessor;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

//use Symfony\Component\Workflow\StateMachine;/

final class AssessorRequestHandler
{
    const SESSION_KEY = 'assessor.request';

    private $manager;
//    private $stateMachine;

    public function __construct(ObjectManager $manager /*StateMachine $stateMachine*/)
    {
        $this->manager = $manager;
//       $this->stateMachine = $stateMachine;
    }

    public function start(SessionInterface $session)
    {
        return $session->get(self::SESSION_KEY);
    }
}
