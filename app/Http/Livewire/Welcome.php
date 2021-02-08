<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Organization;
use App\Models\Vote as voteModel;
use App\Models\User;

class Welcome extends Component
{
    public $vote,$count,$list= false;
    public function render()
    {
        $organization = Organization::where('isdefault',1)->first();
        $positions = Candidate::all()->where('organization_id',$organization->id)->groupBy('position_id');
        // $this->result = voteModel::all()->where('isfinal',1);
        $partylists = Candidate::all()->where('organization_id',$organization->id)->groupBy('partylist_id');
        //   dd($this->result); 
        return view('livewire.welcome',[
            'organization' => $organization,
            'positions' => $positions,
            'partylists' => $partylists,
        ]);
    }
}
