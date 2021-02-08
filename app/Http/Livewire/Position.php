<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Position as positionModel;
use Livewire\WithPagination;

class Position extends Component
{
    use WithPagination;
    public $position_name,$position_id,$updateMode=false;
    public function render()
    {
        return view('livewire.admin.position.position',[
            'positions' => positionModel::paginate(8),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'position_name' => 'required',    
        ]);
    }

    public function save(){

        $this->validate([
            'position_name' => 'required',
          ]);

        positionModel::create([
            'position' => $this->position_name,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Campus added Successfully']);
        $this->position_name ="";
    }

    public function edit($id){
        $data = positionModel::find($id);
        $this->position_name = $data->position;
        $this->position_id = $data->id;
        $this->updateMode = true;
    }

    public function canceledit(){
        $this->updateMode = false;
        $this->position_name ="";
    }

    public function saveedit(){
        $this->validate([
            'position_name' => 'required',
        ]);
        $data = positionModel::find($this->position_id);
        $data->update([
            'position' => $this->position_name
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Position Updated Successfully']);
       $this->updateMode = false;
       $this->position_name = '';
    }

    public function delete($id){
        positionModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'Position deleted Successfully']);
    }

}
