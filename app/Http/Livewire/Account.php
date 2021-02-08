<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Account extends Component
{
    public $showModal=false;
    public $firstname,$middlename,$lastname,$address,$password,$birthdate,$age, $course,$email;
    public function render()
    {
        return view('livewire.account');
    }

    public function show(){
        $this->showModal=true;
        $data = User::find(auth()->user()->id);
        $this->firstname = $data->firstname;
        $this->middlename = $data->middlename;
        $this->lastname = $data->lastname;
        $this->address = $data->address;
        $this->age = $data->age;
        $this->course = $data->course;
        $this->email = $data->email;
    }
    public function save(){
        $data = User::find(auth()->user()->id);
        $data->update([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'address' => $this->address,
            'age' => $this->age,
            'course' => $this->course,
            'email' => $this->email,
            'password' => Hash::make( $this->password),
            'pass' =>  $this->password,
        ]);
        $this->emit('alert',['type'=>'success','message' => 'Account Updated Successfully']);
        $this->showModal = false;
        $this->firstname = '';
     
    }

}
