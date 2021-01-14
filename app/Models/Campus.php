<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function organizations(){
        return $this->hasMany('App\Models\Organization');
    }
    public function partylists(){
        return $this->hasMany('App\Models\Partylist');
    }
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
