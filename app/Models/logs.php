<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    protected $table = 'tbl_logs';
    protected $primaryKey = 'log_id';

    protected $fillable = [
        'student_id',
        'last_name',
        'first_name',
        'middle_name',
        'program',
        'section',
        'entry_date',
        'entry_time'
    ];
    
    protected $casts = [
        'created_at' => 'datetime: m-d-Y h:m:s',
        'updated_at' => 'datetime: m-d-Y h:m:s'
    ];
}
