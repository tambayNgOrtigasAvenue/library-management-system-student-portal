<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRegister extends Model
{
    protected $table = 'tbl_student';
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_id',
        'last_name',
        'first_name',
        'middle_name',
        'sex',
        'address',
        'contact_number',
        'email',
        'student_status',
        'campus_id',
        'graduation_year',
        'program'
    ];
    
    protected $casts = [
        'created_at' => 'datetime: m-d-Y h:m:s',
        'updated_at' => 'datetime: m-d-Y h:m:s'
    ];
}
