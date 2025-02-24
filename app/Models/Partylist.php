<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partylist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function campus(){
        return $this->belongsTo('App\Models\Campus');
    }
    public function candidates(){
        return $this->belongsTo('App\Models\Candidate');
    }
}
