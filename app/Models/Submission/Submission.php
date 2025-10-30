<?php

namespace App\Models\Submission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submission.submission';
    protected $primaryKey = 'id';
    public $incrementing = false;   // UUID
    protected $keyType = 'string';
    public $timestamps = true;

    // kolom yang boleh di-mass assign
    protected $fillable = [
        'id',
        'student_id',
        'activity_id',
        'duration_minutes',
        'status',
        'note',
    ];

    // casting tipe data
    protected $casts = [
        'duration_minutes' => 'integer',
    ];

    // relasi
    public function student()
    {
        return $this->belongsTo(\App\Models\People\Student::class, 'student_id');
    }

    public function activity()
    {
        return $this->belongsTo(\App\Models\Submission\Activity::class, 'activity_id');
    }
}
