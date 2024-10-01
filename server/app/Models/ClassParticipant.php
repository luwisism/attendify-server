<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'student_id'
    ];
}