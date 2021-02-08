<div>
    <div class="flex">
        <img src="{{ asset('images/sksulogo.png') }}" class="h-20" alt="">
        <div class="flex flex-col ml-2 justify-center">
            <h1 class="text-2xl font-medium">SULTAN KUDARAT STATE UNIVERISTY</h1>
            <h1 class="text-lg">Province of Sultan Kudarat, 9800, City of Tacurong, Philippines</h1>
        </div>
    </div>

    <div class="flex  mt-10 justify-end">
        <div class="flex flex-col">
            <h1 class="font-bold text-lg" style="color: #00993C">SKSU-OVS</h1>
        <h1>Online Voting System </h1>
        </div>
    </div>
    <div class="title mt-5">
        <h1 class="text-center text-xl font-bold">{{ $organization->organization }}-{{ $organization->campus->campus }} CAMPUS ELECTION</h1>
    </div>
    <div class="result mt-5 ">
       @forelse ($partylists as $key => $partylist)
       <h1 class="underline text-lg  font-medium">{{ App\Models\Partylist::find($key)->partylist }}-PARTYLIST</h1>
       <div class="candidates">
        @foreach ($partylist as $candidate)
        <h1>{{ $candidate->user->lastname.', '.$candidate->user->firstname.' '.$candidate->user->middlename[0].'.' }} = {{ $candidate->finalVotes->count() }} votes</h1>
        @endforeach
          
       </div>
       @empty
           <h1 class="text-center"> No results of voting!</h1>
       @endforelse
    </div>
</div>
