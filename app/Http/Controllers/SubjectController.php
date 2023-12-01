<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Models\SubjectsTeacher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects=subject::get();

        return Inertia::render('Subject/Index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(subject $subject, Request $request,)

    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, subject $subject)

    { try{

          //   $teachers = SubjectsTeacher::create([
            //'id_teacher' => $request['teacher']['id'],
            //'id_subjects' => $request->id,
            //'id_student'=>'',

       // ]);

        $subjectTeachers = SubjectsTeacher::leftjoin('users', 'subjects_teachers.id_teacher', '=', 'users.id')
             ->leftjoin('subjects', 'subjects_teachers.id_subjects', '=', 'subjects.id')
             ->select('users.name as teacher_name', 
             'users.email', 'subjects.name_subjects',
              'subjects.description', 'subjects.credits',
            'subjects.knowledge_area',
             'subjects.name_teacher',
            'subjects.type')
            ->get();

      
            
               return response()->json($subjectTeachers, 200);
    }catch(Exception $e) {
        return response()->json($e, 500);

    }  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(subject $subject)
    {
        //
    }
}
