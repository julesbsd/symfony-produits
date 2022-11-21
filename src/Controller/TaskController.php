<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_tast')]
    public function new(Request $request): Response
    {
        $task = new Task();
        // ...
        $form = $this->createForm(TaskType::class, $task);
        return $this->renderForm('task/form.html.twig', [
            'form' => $form,
        ]);
    }
}