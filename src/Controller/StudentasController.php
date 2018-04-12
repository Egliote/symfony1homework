<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentasController extends Controller
{
    private $data_file='data.json';
    /**
     * @Route("/student", name="student-list")
     */
    public function index()
    {
        $data=file_get_contents($this->data_file);
        $teams=json_decode($data);
        $students=array();
        foreach ($teams as $team)
        {
            $students= array_merge ($students, $team->members);
        }
        asort($students);
        return $this->render('student-list/index.html.twig', [
            'students' => $students
        ]);
    }
}
