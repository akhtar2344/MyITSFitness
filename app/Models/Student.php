<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $incrementing = false;       // ✅
    protected $keyType = 'string';      // ✅
    protected $fillable = [
        'id',
        'user_id',
        'nrp',
        'name',
        'email',
        'program',
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class, 'student_id');
    }
}
