<?php

namespace App\Models\People;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'people.student';
    protected $primaryKey = 'id';

    // ID kamu bertipe UUID (string) dan tidak auto-increment
    public $incrementing = false;
    protected $keyType = 'string';

    // Tabel student tidak punya created_at/updated_at
    public $timestamps = false;

    protected $fillable = [
        'id', 'user_id', 'nrp', 'name', 'email', 'program',
    ];

    public function submissions()
    {
        return $this->hasMany(\App\Models\Submission\Submission::class, 'student_id');
    }

    public function userAccount()
    {
        return $this->belongsTo(\App\Models\Auth\UserAccount::class, 'user_id');
    }
}
