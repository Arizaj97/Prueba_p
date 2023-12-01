<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\SubjectsStudent;
use App\Models\SubjectsTeacher;
use Exception;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
 
class studentController extends Controller
{
    public function index()
    { 
        $subjectTeachers = SubjectsTeacher::join('users', 'subjects_teachers.id_teacher', '=', 'users.id')
        ->join('subjects', 'subjects_teachers.id_subjects', '=', 'subjects.id')
       ->get();

        return Inertia::render('Studen/Index', [
        'subjects' => $subjectTeachers]);
    }

    public function update(Request $request)
    {
        foreach ($request->student as $studentData ) {

            $student = new SubjectsStudent();

           $student->id_teacher = $studentData['id_teacher'];
           $student->id_subjects = $studentData['id_subjects'];
           $student->id_student = $request->id;
           $student->save();
        }

        return response()->json( 'suscces', 200);
     
    
    }
    

    public function show(Request $request,)

    {
        $array = $request->all();
        $query = SubjectsStudent::with('student', 'teacher', 'subject')->where('id_student', '=',  array_keys($array))->get();

        return Inertia::render('Studen/Show', [
            'quey'=> $query

        ]);

    

    }
    
    
}
