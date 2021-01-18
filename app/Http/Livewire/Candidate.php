<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Organization;
use App\Models\User;
use App\Models\Partylist;
use App\Models\Candidate as candidateModel;
use App\Models\Position;
use App\Models\Image;
use Livewire\WithFileUploads;

class Candidate extends Component
{
    use WithFileUploads;
    public $organizations,$organization_id,$manage,$addModal=false,$candidates;
    public $searchStudent=false,$student,$search,$fullname,$student_id, $partylist,$searchParty=false;
    public $partylist_name,$party_id,$position,$photo,$iteration,$isdependent=0,$position_id;
    public function render()
    {
        $this->organizations = Organization::all();
       $this->position = Position::all();
        $this->manage = Organization::where('id',$this->organization_id)->first();
        $this->candidates = candidateModel::where('organization_id',$this->organization_id)->get();
        return view('livewire.admin.candidate.candidate');
    }

    public function resetfields(){
        $this->party_id="";
        $this->fullname="";
        $this->student_id = "";
        $this->partylist_name ="";
        $this->position_id = null;
        $this->photo=null;
        $this->isdependent =0;

    }

    public function updated($propertyName)
    {
        if ($this->isdependent == 1) {
           
            $this->validateOnly($propertyName,[
                'student_id' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
                'position_id' => 'required',
                ]);
        }else{
            $this->validateOnly($propertyName,[
                'student_id' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
                'partylist_name'=> 'required',
                'position_id' => 'required',
                ]);
        }



       
    }

    public function add(){
        $this->addModal=true;
    }
    public function searchStud(){
        $this->searchStudent=true;
        $this->student = User::where('isadmin',0)->where('campus_id',$this->manage->campus_id)->get();
        $query = $this->search;
        $query = User::where('lastname','like', '%' .$this->search. '%')->orwhere('firstname','like', '%' .$this->search. '%');
    }

    public function getStud($id){
      $data = User::find($id);
      $this->fullname = $data->lastname.", ".$data->firstname." ".$data->middlename[0].".";
      $this->student_id = $data->id;
      $this->searchStudent = false;
    }

    public function searchPartylist(){
        $this->searchParty=true;
         $this->partylist = Partylist::where('campus_id',$this->manage->campus_id)->get();
        // $query = $this->search;
        // $query = User::where('lastname','like', '%' .$this->search. '%')->orwhere('firstname','like', '%' .$this->search. '%');
    
    }

    public function getParty($id){
        $data = Partylist::find($id);
        $this->partylist_name = $data->partylist."- Partylist";
        $this->party_id = $data->id;
        $this->searchParty = false;
    }

    public function save(){
        $filename = $this->photo->getClientOriginalName();
        $this->photo->storeAs('candidates',$filename,'public');
        if($this->isdependent == 1){

            $this->validate([
               
                'position_id' => 'required',
            ]);

            $data = candidateModel::create([
                'user' => $this->student_id,
                'organization_id' => $this->organization_id,
                'position_id' => $this->position_id,
            ]);
            Image::create([
                'url' => $filename,
                'imageable_id' => $data->id,
                'imageable_type' =>  candidateModel::class,
            ]);
        }else{
            $this->validate([
                'partylist_name'=> 'required',
                'position_id' => 'required',
            ]);
            $data = candidateModel::create([
                'user_id' => $this->student_id,
                'partylist_id' => $this->party_id,
                'organization_id' => $this->organization_id,
                'position_id' => $this->position_id,
            ]);
                Image::create([
                    'url' => $filename,
                    'imageable_id' => $data->id,
                    'imageable_type' =>  candidateModel::class,
                ]);
            
        }
      
        $this->emit('alert',['type'=>'success','message' => 'Candidate Added Successfully']);
        $this->resetfields();
        $this->addModal=false;
    }
}
