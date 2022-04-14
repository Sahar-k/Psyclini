<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    
    public $table = 'patients';
    public $fillable = [ 
        'id',
        'phone',
        'name',
        'email' , 
        'password',
        'birth_date',
        'img',
        'sex'
    ];
    public $hidden = ['pivot'];
    /**
     * The roles that belong to the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tests()
    {
        return $this->belongsToMany(Test::class, 'patient_test');
    }
    /**
     * The roles that belong to the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_patient', 'patient_id', 'doctor_ssn', 'id' , 'ssn');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
