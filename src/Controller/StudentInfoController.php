<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentInfoController extends Controller
{
    private $data_file = 'data.json';

    /**
     * @Route("/student/info", name="student_info")
     */
    public function index(Request $request)
    {
        $data = file_get_contents($this->data_file);
        $teams = json_decode($data);
        $request->getPathInfo();
        $studentName = $request->query->get('utm_term');
        $foundTeam = null;
        $foundTeamName = null;
        foreach ($teams as $teamName => $team) {
            foreach ($team->members as $student) {
                if ($studentName == $student) {
                    $foundTeam = $team;
                    $foundTeamName = $teamName;
                    break;
                }
            }
        }

        if ($foundTeam != null && $foundTeamName != null) {
            return $this->render('student_info/index.html.twig', [
                'team' => $foundTeamName,
                'mentor' => $foundTeam->mentor,
                'student' => $studentName
            ]);
        } else {
            $errorMessage = "Student not found";
            return $this->render('student_not_found/index.html.twig', [
                'message' => $errorMessage
            ]);
        }
    }
}