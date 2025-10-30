<?php

namespace App\Models\Submission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'submission.activity';
    protected $primaryKey = 'id';

    // ID bertipe UUID (string), tidak auto-increment
    public $incrementing = false;
    protected $keyType = 'string';

    // Tabel activity tidak punya created_at/updated_at (lihat skemamu)
    public $timestamps = false;

    protected $fillable = ['id', 'name', 'date', 'location', 'duration_minutes'];

    public function submissions()
    {
        return $this->hasMany(\App\Models\Submission\Submission::class, 'activity_id');
    }
}
