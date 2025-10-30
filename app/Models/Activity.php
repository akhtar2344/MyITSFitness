<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $primaryKey = 'id';
    public $incrementing = false;       // ✅ wajib kalau UUID
    protected $keyType = 'string';      // ✅ biar id bisa string
    protected $fillable = [
        'id',
        'name',
        'date',
        'location',
        'duration_minutes',
    ];

    public function submissions()
    {
        return $this->hasMany(Submission::class, 'activity_id');
    }
}
