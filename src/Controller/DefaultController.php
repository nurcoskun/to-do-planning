<?php

namespace App\Controller;


use App\Repository\DeveloperRepository;
use App\Repository\TasksRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function index(TasksRepository $tasksRepository, DeveloperRepository $developerRepository)
    {
        $tasks = $tasksRepository->findAll();
        $developers = $developerRepository->findAll();

        return $this->render('frontend/index.html.twig', array('tasks' => $tasks,'developers' => $developers));

    }

}
