<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievement extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'student_id', 'chinese', 'math', 'english', 'count',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
