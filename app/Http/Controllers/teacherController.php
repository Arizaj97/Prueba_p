<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\SubjectsTeacher;
use Exception;
use Inertia\Inertia;

class teacherController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $subjects=subject::get();
        
        return Inertia::render('Teacher/Index', ['subjects' => $subjects]);

 
    }

    public function update(Request $request, subject $subject)

    {  $teacherId = $request['teacher']['id'];
        $subjectId = $request->id;
        $existingRecordCount = SubjectsTeacher::where('id_teacher', $teacherId)
            ->where('id_subjects', $subjectId)
            ->count();

       
        if ($existingRecordCount === 0) {
            SubjectsTeacher::create([
                'id_teacher' =>$request['teacher']['id'],
                'id_subjects' => $request->id,
            ]);

        return response()->json($existingRecordCount, 200);
        }
        else{
            return response()->json('registro doble', 500);

        }
    

    }
    public function destroy(Request $request,)
    {
        $teacherId = $request['teacher']['id'];
        $subjectId = $request->id_subjects;


        $existingRecord = SubjectsTeacher::where('id_teacher', $teacherId)
        ->where('id_subjects', $subjectId)->delete();

            return response()->json('succes', 200);
    }
    

    public function show( Request $request,)
    {
        $array = $request->all();
        $subjectTeachers = SubjectsTeacher::join('users', 'subjects_teachers.id_teacher', '=', 'users.id')
        ->join('subjects', 'subjects_teachers.id_subjects', '=', 'subjects.id')
        ->where('users.id', '=',  array_keys($array))
        ->get();


       return Inertia::render('Teacher/Show', ['subjects' => $subjectTeachers]);
    
    }

    public function create(){

        return Inertia::render('Teacher/Create');

    }

    public function store(Request $request){

      
        $subject6=subject::create([
            'name_subjects' => $request->name_subjects,
            'description' => $request->description,
            'credits' =>$request->credits,
            'knowledge_area' =>$request->knowledge_area,
            'name_teacher'=> '',
            'type' =>$request->type,
        ]
    );

        return response()->json('success', 200);
    


    }
}