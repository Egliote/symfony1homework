<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentInfoController extends Controller
{
    private $data_file='data.json';
    /**
     * @Route("/student/info", name="student_info")
     */
    public function index()
    {
        $data=file_get_contents($this->data_file);
        $teams=json_decode($data);
        $request = Request::createFromGlobals();
        $request->getPathInfo();
        $request->query->get('student');
        if ($request->query->get('student')=="Eglė")
        {
            $message="Dešimt balų";
            $format="table-success";
        } else
        {
            $message="Gal pasiseks kitą kartą";
            $format="table-warning";
        }
        foreach ($teams as $teamName => $team)
        {
            foreach ($team->members as $student)
            {
                if (($request->query->get('student'))==$student)
                {
                    return $this->render('student_info/index.html.twig', [
                        'team' => $teamName,
                        'mentor' => $team->mentor,
                        'student'=>$student,
                        'message'=>$message,
                        'format'=>$format
                    ]);
                }
            }
        }

    }
}
