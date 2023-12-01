<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_subjects',
        'description',
        'credits',
        'knowledge_area',
        'name_teacher',
        'type',

    ];
}
