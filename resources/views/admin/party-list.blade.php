@extends('layouts.master')
@section('content')
<div class="flex space-x-2 border-b border-green-500 items-center text-nav">
    <i class="material-icons md-36">view_module</i>
    <h1 class="text-xl font-medium ">Party-list</h1>
</div>
<div class="main-body mt-4">
   @livewire('partylist')
</div>
@endsection