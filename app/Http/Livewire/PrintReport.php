<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Partylist;
use App\Models\Campus;
use App\Models\Position;
use App\Models\Organization;
use App\Models\Vote as voteModel;
use App\Models\User;
class PrintReport extends Component
{
    public $camp,$stud,$org,$part,$pos,$can,$user;
    public function render()
    {
        $this->camp = Campus::all()->count();
        $this->org = Organization::all()->count();
        $this->part = Partylist::all()->count();
        $this->pos = Position::all()->count();
        $this->can = Candidate::all()->count();
        $this->stud = User::all()->where('isadmin',0)->count();
        $this->user = User::all()->where('isadmin',1)->count();
        // dd($this->can);
        $organization = Organization::where('isdefault',1)->first();
        $partylists = Candidate::all()->where('organization_id',$organization->id)->groupBy('partylist_id');
        
       
        return view('livewire.print-report',[
            'organization' => $organization,
            'partylists' => $partylists,
        ]);
    }
}
