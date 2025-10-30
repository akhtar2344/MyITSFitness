<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model
{
    use HasFactory;

    protected $table = 'auth.user_account';

    protected $primaryKey = 'id';
    public $incrementing = false;   // id bukan auto-increment
    protected $keyType = 'string';  // id bertipe UUID (string)

    public $timestamps = true;

    protected $fillable = [
        'id',
        'email',
        'password_hash',
        'role',
        'is_active',
    ];

    public function student()

    {
        return $this->hasOne(\App\Models\People\Student::class, 'user_id');
    }   
}
