@extends('layouts.master')
@section('content')
<div class="flex space-x-2 border-b border-green-500 items-center text-nav">
    <i class="material-icons md-36">person</i>
    <h1 class="text-xl font-medium ">Candidate</h1>
</div>
<div class="main-body mt-4">
    <h1 class="text-gray-600">: Please select organization to manage.</h1>
    <div class=" mt-5 grid grid-cols-6 gap-4">
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">CSSO</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">SBO-SULAN</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">SBO-ACCESS</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">SBO-TACURONG</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">ESO</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">view_column</i></div>
                <div class="text"><h1 class="font-medium text-center underline">NABA</h1></div>
            </div>
        </div>
    </div>
</div>
@endsection