<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        return $this->hasMany('App\Models\User');
    }
    public function positions(){
        return $this->hasOne('App\Models\Position', "id", "position_id");
    }
    public function partylist(){
        return $this->belongsTo('App\Models\Partylist');
    }
    public function organizations(){
        return $this->hasMany('App\Models\Organization');
    }
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

}
