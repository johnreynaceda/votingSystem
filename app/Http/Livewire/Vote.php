<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Candidate;
use App\Models\Organization;
use App\Models\Vote as voteModel;
use App\Models\User;



class Vote extends Component
{
    public $vote,$count,$list= false;

    public function render()
    {
        $organization = Organization::where('isdefault',1)->first();
        $positions = Candidate::all()->where('organization_id',$organization->id)->groupBy('position_id');
        $this->vote = voteModel::where('user_id',auth()->user()->id)->get();
        // $this->result = voteModel::all()->where('isfinal',1);
        $partylists = Candidate::all()->where('organization_id',$organization->id)->groupBy('partylist_id');
        //   dd($this->result); 
       
        return view('livewire.student.vote',[
            'organization' => $organization,
            'positions' => $positions,
            'partylists' => $partylists,
        ]);
    }

    public function vote($id,$position){
        $candidate = Candidate::find($id);
        $limit = 1;
        switch ($position) {
            case 3:
                $limit = 8;
                break;
            case 10:
                $limit = 2;
                break;
            case 11:
                $limit = 2;
                break;
            default:
                # code...
                break;
        }
        $canVote = auth()->user()->votes()->whereHas('candidate',function($c) use($position){
            $c->where('position_id',$position);
        })->get()->count() < $limit;

        if($canVote){
            if(auth()->user()->hasVoted($id)) {
                $this->emit('alert',['type'=>'error','message' => 'You have already voted this candidate.']);
            }
           else{
            voteModel::create([
                'user_id' => auth()->user()->id,
                'candidate_id' => $candidate->id,
            ]);
            $this->emit('alert',['type'=>'success','message' => 'Voted Successfully']);
           }
            
        }else{
            $this->emit('alert',['type'=>'success','message' => 'You have already voted for this position.']);      
       
        }

        
    }
    public function delete($id){
        // dd($id);
        voteModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'Voted cancellation Successfully  ']);
    }

    public function submit($id){
        // dd($id);
        $data = voteModel::where('user_id',$id)->update([
            'isfinal' => true,
        ]);
        User::find($id)->update([
            'isvoted' => true,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Voted Submitted Successfully']); 
    }

    public function voted_list()
    {
        if($this->list == false){
            $this->list = true;
        }else{
            $this->list=false;
        }
    }
}
