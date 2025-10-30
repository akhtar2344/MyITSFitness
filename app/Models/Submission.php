<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';
    protected $primaryKey = 'id';
    public $incrementing = false;       // ✅
    protected $keyType = 'string';      // ✅
    protected $fillable = [
        'id',
        'student_id',
        'activity_id',
        'duration_minutes',
        'status',
        'notes',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }
}
