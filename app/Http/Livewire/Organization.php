<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Campus;
use App\Models\Organization as organizationModel;
use Livewire\WithPagination;

class Organization extends Component
{
    protected $listeners = ['refreshProducts'];
    use WithPagination;
    public $organization_name,$organization_id,$campus,$campuses,$updateMode=false;
    public $isdefault=1,$check;
    public function render()
    {
        
      
                $this->campuses = Campus::all();
        return view('livewire.admin.organization.organization',[
            'organizations' => organizationModel::paginate(12),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'organization_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required',    
        ]);
    }

    public function save(){
        $this->validate([
            'organization_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required', 
          ]);
          organizationModel::create([
            'organization' => $this->organization_name,
            'campus_id' => $this->campus,
          ]);
          $this->emit('alert',['type'=>'success','message' => 'Organization added Successfully']);
          $this->organization_name ="";
          $this->campus =null;
    }

    public function edit($id){
        $data = organizationModel::find($id);
        $this->organization_name = $data->organization;
        $this->campus = $data->campus_id;
        $this->organization_id = $data->id;
        $this->updateMode = true;
    }

    public function canceledit(){
        $this->updateMode = false;
        $this->organization_name ="";
        $this->campus =null;
    }

    public function saveedit(){
        $this->validate([
            'organization_name' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',
            'campus' => 'required', 
          ]);
        $data = organizationModel::find($this->organization_id);
        $data->update([
            'organization' => $this->organization_name,
            'campus_id' => $this->campus,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Organization Updated Successfully']);
       $this->updateMode = false;
       $this->organization_name ="";
       $this->campus =null;
    }

    public function togglein($id){
        $data = organizationModel::find($id);
       
        if($data->where('isdefault',1)->count() == 0){
            $data->update([
                'isdefault' => $this->isdefault,
            ]);
            $this->emit('alert',['type'=>'success','message' => 'Organization set to default']);
        }else{
            
            return redirect()->to('/admin/organization');
            $this->emit('alert',['type'=>'error','message' => 'There have already a default organization ']);
        }
    }

            
    public function toggleout($id){
        $data = organizationModel::find($id);
       
            $data->update([
                'isdefault' => 0,
            ]);
            $this->emit('alert',['type'=>'success','message' => 'Organization set to normal ']);
        }

       
    public function delete($id){
        organizationModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'Organization deleted Successfully']);
    }
}
