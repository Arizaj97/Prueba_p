<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectsTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_teacher',
        'id_subjects',
    ];

    public function teachers()
    {
        return $this->hasMany(User::class, 'id', 'id_teacher');}

        public function subject()
    {
        return $this->hasMany(subject::class, 'id', 'id_subjects');}

}
