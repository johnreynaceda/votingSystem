<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function candidate(){
        return $this->belongsTo('App\Models\Candidate');
    }
}
