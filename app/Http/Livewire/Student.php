<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Student extends Component
{
    public $addModal=false;
    public function render()
    {
        return view('livewire.admin.student.student');
    }
}
