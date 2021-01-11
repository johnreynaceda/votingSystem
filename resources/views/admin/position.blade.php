@extends('layouts.master')
@section('content')
<div class="flex space-x-2 border-b border-green-500 items-center text-nav">
    <i class="material-icons md-36">safety_divider</i>
    <h1 class="text-xl font-medium ">Position</h1>
</div>
<div class="main-body mt-4">
    <div class="flex space-x-3">
        <div class=" w-4/12">
        <div class=" border rounded-md shadow-md">
            <div class="header p-2 border-b space-x-2 flex text-side  border-green-500">
                <i class="material-icons">add_to_photos</i>
                <h1 class="font-medium">Add Position</h1>
            </div>
            <div class="body p-2">
                <form action="">
                    <div class="mb-5 text-side">
                        <label for="">Position:</label>
                        <input wire:model="firstname" type="text" class="h-8 w-full outline-none focus:border-green-400 text-sm px-3 mt-1 focus:shadow-md rounded-sm border" placeholder="Enter Position">
                    </div>
                    <div class="flex justify-end">
                        <button class="bg-nav p-1 focus:outline-none rounded-full px-6 text-white shadow-md hover:bg-green-400">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <div class=" w-8/12 border-l-2 border-green-500 p-2">
    <h1 class="font-medium text-side text-lg">LIST OF POSITIONS</h1>
    <div class=" mt-3 grid grid-cols-4 gap-4">
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">GOVERNOR</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">VICE GOVERNOR</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">BOARD MEMBER</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">MAYOR</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">VICE MAYOR</h1></div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-main text-white hover:text-side cursor-pointer via-green-400 to-main rounded-md shadow-md ">
            <div class="flex flex-col p-1  justify-center items-center">
                <div class="icon"><i class="material-icons md-48">person_pin</i></div>
                <div class="text"><h1 class="font-medium text-center underline">SECRETARY</h1></div>
            </div>
        </div>
        
      </div>
    </div>
    </div>
</div>
@endsection