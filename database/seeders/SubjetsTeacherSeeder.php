<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubjectsTeacher;

class SubjetsTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SubjectsTeacher1=SubjectsTeacher::create([
            'id_teacher' => 2,
            'id_subjects' => 2,

        ]);
        $SubjectsTeacher2=SubjectsTeacher::create([
            'id_teacher' => 2,
            'id_subjects' => 1,

        ]);
        $SubjectsTeacher3=SubjectsTeacher::create([
            'id_teacher' => 2,
            'id_subjects' => 3,

        ]);
        $SubjectsTeacher4=SubjectsTeacher::create([
            'id_teacher' => 2,
            'id_subjects' => 4,

        ]);
        $SubjectsTeacher5=SubjectsTeacher::create([
            'id_teacher' => 3,
            'id_subjects' => 2,

        ]);
        $SubjectsTeacher6=SubjectsTeacher::create([
            'id_teacher' => 3,
            'id_subjects' => 3,

        ]);
        $SubjectsTeacher7=SubjectsTeacher::create([
            'id_teacher' => 3,
            'id_subjects' => 4,

        ]);
        $SubjectsTeacher8=SubjectsTeacher::create([
            'id_teacher' => 3,
            'id_subjects' => 1,

        ]);
        $SubjectsTeacher9=SubjectsTeacher::create([
            'id_teacher' => 3,
            'id_subjects' => 5
            
            ,

        ]);
    }
}
