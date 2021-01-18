<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\Campus;
use App\Models\Organization;
use App\Models\User;

class Student extends Component
{
   public $addModal=false, $editModal=false;
    public $organizations,$campuses;
    public $firstname,$middlename,$lastname,$address,$birthdate,$age,$contact;
    public $organization=[],$course,$email,$password,$pass,$sidn,$campus,$isadmin;
    public function render()
    {
    
        $this->campuses = Campus::all();
        $this->organizations = Organization::where('campus_id', $this->campus)->get();
        return view('livewire.admin.student.student',[
            'users' => User::where('isadmin',0)->paginate(10),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'firstname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'middlename' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'lastname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'address' => 'required',    
            'birthdate' => 'required',    
            'age' => 'required',    
            'contact' => 'required|max:11|min:11',    
            'course' => 'required',    
            'email' => 'required|unique:users|email',   
            'sidn' => 'required|max:5|min:5',    
            'campus' => 'required',    
       
        ]);
    
    }

    public function resetfields(){
        $this->firstname="";
        $this->middlename="";
        $this->lastname="";
        $this->birthdate="";
        $this->age="";
        $this->address="";
        $this->contact="";
        $this->course="";
        $this->email="";
        
        $this->sidn="";
       
        $this->campus=null;

    }

    public function add(){
        $this->addModal=true;
    }

    public function save(){
      
        $this->validate([
            'firstname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'middlename' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'lastname' => 'required|regex:/^[a-zA-Z\pL\s\-]+$/u',    
            'address' => 'required',    
            'birthdate' => 'required',    
            'age' => 'required',    
            'contact' => 'required|max:11|min:11',    
            'course' => 'required',    
            'email' => 'required|unique:users|email',  
            'sidn' => 'required|max:5|min:5',    
            'campus' => 'required',  
          ]);

         $this->pass = str_shuffle(substr($this->firstname,0,5).''.$this->sidn);
          $this->data = User::create([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'age' => $this->age,
            'contact' => $this->contact,
            'course' => $this->course,
            'email' => $this->email,
            'password' => Hash::make($this->pass),
            'pass' => $this->pass,
            'sidn' =>$this->sidn,
            'campus_id' =>$this->campus,
      ]);

      $student = User::find($this->data->id);
      $student->organizations()->attach($this->organization);
      $this->emit('alert',['type'=>'success','message' => 'Student added Successfully']);
      $this->resetfields();
        $this->addModal=false;
        }
    

    public function edit(){
        $this->editModal=true;
    }
    public function saveedit(){
        $this->editModal=false;
    }

    
}
