<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function campus(){
        return view('admin.campus');
    }
    public function student(){
        return view('admin.student  ');
    }
    public function organization(){
        return view('admin.organization');
    }
    public function partylist(){
        return view('admin.party-list');
    }
    public function position(){
        return view('admin.position');
    }
    public function candidate(){
        return view('admin.candidate');
    }
}
