@extends('layouts.student-base')
@section('content')
<div class="main  relative">
    <div class=" px-2 mt-3 flex justify-end space-x-2">
        <form method="POST" class="flex space-x-2" action="{{ route('logout') }}">
            @csrf
   
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                this.closest('form').submit();">
        <div class="flex border p-1 space-x-2 px-4 rounded-full bg-nav text-white  hover:bg-green-600  cursor-pointer border-gray-400 shadow-md">
            <i class="material-icons">logout</i>
            <h1 class="">Sign-out</h1>
        </div>
    </a>
        </form>
        @livewire('account')
    </div>
    
   <div class="px-4 py-5">
    @livewire('vote')
   </div>
</div>
@endsection