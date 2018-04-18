<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentasController extends Controller
{
    private $data_file = 'data.json';

    /**
     * @Route("/student", name="student-list")
     */
    public function index()
    {
        $data = file_get_contents($this->data_file);
        $teams = json_decode($data);
        $paths = array();
        $p = array();
        foreach ($teams as $teamName => $team) {
            foreach ($team->members as $member) {
                $p = array('utm_source' => 'akademija', 'utm_campaign' => $team->mentor, 'utm_term' => $member, 'utm_content' => $teamName);
                array_push($paths, $p);
            }
        }

        return $this->render('student-list/index.html.twig', [
            'paths' => $paths
        ]);
    }
}