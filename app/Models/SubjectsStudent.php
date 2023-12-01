<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectsStudent extends Model
{
    use HasFactory;
    protected $table = "subjects_student";

    protected $fillable = [
        'id_student',
        'Id_teacher',
        'id_subjects'
    ];

    public function student()
    {
        return $this->hasMany(User::class, 'id', 'id_student');}

    public function subject()
    {
        return $this->hasMany(subject::class, 'id', 'id_subjects');}

    public function teacher()
        {
            return $this->hasMany(User::class, 'id', 'Id_teacher');}


}
