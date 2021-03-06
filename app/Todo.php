<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'description','owner_id'];
 
    public function owner()
    {
        return $this->belongsTo('App\User','owner_id');
    }
}
