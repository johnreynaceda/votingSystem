<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Partylist as partylistModel;
use App\Models\Campus;
use Livewire\WithPagination;

class Partylist extends Component
{
    use WithPagination;
    public $partylist_name,$campus,$partylist_id,$campuses;
    public $updateMode=false;
    
    public function render()
    {
        $this->campuses = Campus::all();
        return view('livewire.admin.partylist.partylist',[
            'partylists' => partylistModel::paginate(8),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'partylist_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required',    
        ]);
    }

    public function save(){
        $this->validate([
            'partylist_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required',  
          ]);
          partylistModel::create([
            'partylist' => $this->partylist_name,
            'campus_id' => $this->campus,
          ]);
          $this->emit('alert',['type'=>'success','message' => 'Party-list added Successfully']);
          $this->partylist_name ="";
          $this->campus =null;
    }
    public function edit($id){
        $data = partylistModel::find($id);
        $this->partylist_name = $data->partylist;
        $this->campus = $data->campus_id;
        $this->partylist_id = $data->id;
        $this->updateMode = true;
    }
    public function canceledit(){
        $this->updateMode = false;
        $this->partylist_name ="";
        $this->campus =null;
    }

    public function saveedit(){
        $this->validate([
            'partylist_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required', 
          ]);
        $data = partylistModel::find($this->partylist_id);
        $data->update([
            'partylist' => $this->partylist_name,
            'campus_id' => $this->campus,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Party-list Updated Successfully']);
       $this->updateMode = false;
       $this->partylist_name ="";
       $this->campus =null;
    }

    public function delete($id){
        partylistModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'Party-list deleted Successfully']);
    }

}
