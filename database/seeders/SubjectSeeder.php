<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject1=subject::create( 
            ['name_subjects' => 'Matemáticas',
             'description' => 'Curso de matemáticas básicas',
             'credits' => 4,
             'knowledge_area' => 'Matemáticas',
             'name_teacher'=> '',

             'type' => 'obligatory',
        ]);
        $subject2=subject::create( [
            'name_subjects' => 'Historia',
            'description' => 'Curso de historia universal',
            'credits' => 3,
            'knowledge_area' => 'Humanidades',
            'name_teacher'=> '',

            'type' => 'obligatory',
        ]);
        $subject3=subject::create( [
            'name_subjects' => 'conoce la u',
            'description' => 'Curso de la universal',
            'credits' => 2,
            'knowledge_area' => 'Humanidades',
            'name_teacher'=> '',
            'type' => 'elective',
        ]);
        $subject4=subject::create([
            'name_subjects' => 'molecular',
            'description' => 'desarrollo molecula',
            'credits' => 3,
            'knowledge_area' => 'Ciencia',
            'name_teacher'=> '',
            'type' => 'obligatory',
        ]);
        $subject5=subject::create( [
            'name_subjects' => 'Historia de la informatica',
            'description' => 'Curso de historia universal',
            'credits' => 5,
            'knowledge_area' => 'Informatica',
            'name_teacher'=> '',
            'type' => 'obligatory',
        ]);
        $subject6=subject::create([
                'name_subjects' => 'PHP',
                'description' => 'Curso de PHP',
                'credits' => 3,
                'knowledge_area' => 'Informatica',
                'name_teacher'=> '',
                'type' => 'obligatory',
            ]
        );
        $subject7=subject::create([
                'name_subjects' => 'java',
                'description' => 'Curso de java',
                'credits' => 3,
                'knowledge_area' => 'Informatica',
                'name_teacher'=> '',
                'type' => 'obligatory',
            ]);
    }
}
