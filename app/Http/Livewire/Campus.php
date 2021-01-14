<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Campus as campusModel;
use Livewire\WithPagination;

class Campus extends Component
{
    use WithPagination;
    
    public $campus_name,$campus_id,$updateMode=false;
    public function render()
    {
        // $this->campus = campusModel::all();
        return view('livewire.admin.campus.campus',[
            'campus' => campusModel::paginate(8),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'campus_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
        ]);
    }
    public function save(){

        $this->validate([
            'campus_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
          ]);

        campusModel::create([
            'campus' => $this->campus_name,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Campus added Successfully']);
        $this->campus_name ="";
    }

    public function edit($id){
        $data = campusModel::find($id);
        $this->campus_name = $data->campus;
        $this->campus_id = $data->id;
        $this->updateMode = true;
    }
    public function canceledit(){
        $this->updateMode = false;
        $this->campus_name ="";
    }
    public function saveedit(){
        $this->validate([
            'campus_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
        ]);
        $data = campusModel::find($this->campus_id);
        $data->update([
            'campus' => $this->campus_name
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Campus Updated Successfully']);
       $this->updateMode = false;
       $this->campus_name = '';
    }

    public function delete($id){
        campusModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'Campus deleted Successfully']);
    }

   
}
