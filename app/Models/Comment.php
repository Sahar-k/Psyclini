<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_ssn', 'ssn');
    }
    public function secretary()
    {
        return $this->belongsTo(Secretary::class, 'secretary_ssn', 'ssn');
    }
}