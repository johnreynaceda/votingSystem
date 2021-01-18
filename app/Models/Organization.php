<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function campus(){
        return $this->belongsTo('App\Models\Campus');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User', 'user_organization');
    }
    public function candidates(){
        return $this->belongsToMany('App\Models\Candidate');
    }
}
