<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TutorshipController extends Controller
{
    public function dashboards(string $page, ?int $tutorId = null)
    {                   
        $tutors = User::where('role_id', '=', 2)->orderBy('name')->get();
        $tutorSelected = $tutorId ? User::where('id', '=', $tutorId)->first() : null;
                
        $tutoredStudents = $tutorId ?
                                User::where('tutor_id', '=', $tutorId)->paginate(10, ['*'], 'tutored-students')
                                : array();
        $studentsWhithoutTutor = User::where('role_id', '=', 4)
                                        ->where('tutor_id', '=', null)
                                        ->orderBy('name')
                                        ->paginate(10, ['*'], 'students-whitout-tutor');
        
        return view("tutorship.tutor-info", compact('tutoredStudents', 'studentsWhithoutTutor', 'tutors', 'tutorSelected'));
    }

    public function updateTutorStudents(Request $request)
    {        
        $studentId = $request->studentId;
        $actionToDo = $request->actionToDo;
        $tutorId = $request->tutorId;
        
        if ($studentId && $tutorId) {            
            $student = User::where('id', '=', $studentId)->first();

            $student->tutor_id = ( $actionToDo === "add" ) ?  $tutorId : null;
            $student->save();

        }

        return redirect()->route('dashboards', ['page' => 'tutorship', 'tutorId' => $tutorId]);
    }

    public function profiles(string $page)
    {
        if (view()->exists("pages.profile.{$page}")) {
            return view("pages.profile.{$page}");
        }

        return abort(404);
    }

    public function users(string $page)
    {
        if (view()->exists("pages.users.{$page}")) {
            return view("pages.users.{$page}");
        }

        return abort(404);
    }
    public function signins(string $page)
    {
        if (view()->exists("authentication.sign-in.{$page}")) {
            return view("authentication.sign-in.{$page}");
        }

        return abort(404);
    }
    public function signups(string $page)
    {
        if (view()->exists("authentication.sign-up.{$page}")) {
            return view("authentication.sign-up.{$page}");
        }

        return abort(404);
    }

    public function resets(string $page)
    {
        if (view()->exists("authentication.reset-password.{$page}")) {
            return view("authentication.reset-password.{$page}");
        }

        return abort(404);
    }

    public function locks(string $page)
    {
        if (view()->exists("authentication.lock.{$page}")) {
            return view("authentication.lock.{$page}");
        }

        return abort(404);
    }

    public function verifications(string $page)
    {
        if (view()->exists("authentication.verification.{$page}")) {
            return view("authentication.verification.{$page}");
        }

        return abort(404);
    }

    public function errors(string $page)
    {
        if (view()->exists("authentication.error.{$page}")) {
            return view("authentication.error.{$page}");
        }

        return abort(404);
    }
}
