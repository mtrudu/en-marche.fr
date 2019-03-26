<?php

namespace AppBundle\Controller\EnMarche;

use AppBundle\Assessor\AssessorRequestHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AssessorController extends AbstractController
{
    /**
     * @Route(
     *     path="/assesseur",
     *     name="app_assessor_request",
     * )
     */
    public function assessorProposal(Request $request, AssessorRequestHandler $assessorResquestHandler): Response
    {
        return $this->render('assessor/proposal.html.twig', []);
    }
}
