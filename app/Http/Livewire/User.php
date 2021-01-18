<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\Campus;
use App\Models\Organization;
use App\Models\User as userModel;

class User extends Component
{
   public $addModal=false, $editModal=false;
    public $organizations,$campuses,$user_id;
    public $firstname,$middlename,$lastname,$address,$birthdate,$age,$contact;
    public $organization=[],$course,$email,$password,$sidn,$campus,$isadmin=1;
    public function render()
    {
    
        $this->campuses = Campus::all();
        $this->organizations = Organization::where('campus_id', $this->campus)->get();
        return view('livewire.admin.user.user',[
            'users' => userModel::where('isadmin',1)->paginate(10),
        ]);
    }

   

    public function resetfields(){
        $this->firstname="";
        $this->middlename="";
        $this->lastname="";
        
        $this->email="";
        $this->password="";
        $this->sidn="";
      
    }

    public function add(){
        $this->addModal=true;
    }

    public function save(){
      
        
            $this->validate([
                'firstname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
                'middlename' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
                'lastname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
                'email' => 'required|unique:users|email',    
                'password' => 'required',  
                'sidn' => 'required|max:5|min:5',    
                // 'campus' => 'required',  
              ]);

            $this->data = userModel::create([
               
                    'firstname' => $this->firstname,
                    'middlename' => $this->middlename,
                    'lastname' => $this->lastname,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'sidn' =>$this->sidn,
                    'isadmin' =>$this->isadmin,
              ]);
            
              $this->emit('alert',['type'=>'success','message' => 'User added Successfully']);
              $this->resetfields();
              $this->addModal=false;
     
    }

    public function edit($id){
        $this->editModal=true;
        $data = userModel::find($id);
        $this->firstname = $data->firstname;
        $this->middlename = $data->middlename;
        $this->lastname = $data->lastname;
        $this->email = $data->email;
        $this->sidn = $data->sidn;
        $this->user_id = $data->id;
        $this->updateMode = true;
    }

    public function saveedit(){
       
        $this->validate([
            'firstname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'middlename' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'lastname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            // 'email' => 'required|unique:users|email',    
            'password' => 'required',  
            'sidn' => 'required|max:5|min:5',    
            // 'campus' => 'required',  
          ]);
        $data = userModel::find($this->user_id);
        $data->update([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'sidn' =>$this->sidn,
            'isadmin' =>$this->isadmin,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'User Updated Successfully']);
       $this->resetfields();
       $this->editModal=false;
    }

    public function canceledit(){
        $this->editModal = false;
        $this->resetfields();
    }

   

    public function delete($id){
        userModel::find($id)->delete();
        $this->emit('alert',['type'=>'error','message' => 'User deleted Successfully']);
    }

    
}
