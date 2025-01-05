<?php
// src/Controller/TaskController.php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    // List all tasks
    #[Route('/tasks', name: 'task_index')]
    public function index(EntityManagerInterface $em): Response
    {
        //$tasks = $em->getRepository(Task::class)->findAll();

        return new Response('hello world');
    }
}