<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecuritySystem extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'acronyms', 'email', 'url', 'status', 'user', 'new_justificative', 'last_justificative'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
