<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    use HasFactory;
    public $fillable = [ 
        'ssn',
        'name', 
        'email',
        'password',
        'birth_date',
        'img'
    ];
    public $timestamps = false;
     /**
      * The roles that belong to the Secretary
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
     public function posts()
     {
         return $this->belongsToMany(Post::class, 'post_secretary', 'secretary_ssn', 'post_id', 'ssn', 'id');
     }
}
