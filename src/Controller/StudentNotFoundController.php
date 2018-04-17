<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentNotFoundController extends Controller
{
    /**
     * @Route("/student/not/found", name="student_not_found")
     */
    public function index()
    {
        return $this->render('student_not_found/index.html.twig', [
            'controller_name' => 'StudentNotFoundController',
        ]);
    }
}
