<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = 'student_details';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'department',
        'marks',
        'created_at',
        'updated_at'
    ];
}
