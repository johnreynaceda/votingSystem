@extends('layouts.student-base')
@section('content')
<div class="mt-5 flex justify-end ">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
            this.closest('form').submit();">
    <div class="flex border p-1 space-x-2 px-4 rounded-full bg-nav text-white  hover:bg-green-600  cursor-pointer border-gray-400 shadow-md">
        <i class="material-icons">logout</i>
        <h1>Sign-out</h1>
    </div>
</a>
    </form>
</div>
@endsection