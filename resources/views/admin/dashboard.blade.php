@extends('layouts.master')
@section('content')
<div class="flex space-x-2 border-b  border-green-500 items-center text-nav">
    <i class="material-icons md-36">dashboard</i>
    <h1 class="text-xl font-medium ">Dashboard</h1>
</div>
<div class="main-body mt-2">
    @livewire('admin-dashboard')
</div>
@endsection