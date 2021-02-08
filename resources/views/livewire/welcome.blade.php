<div>
    @forelse ($partylists as $key => $partylist)
    <h1 class="mt-5 font-semibold underline text-xl">{{ App\Models\Partylist::find($key)->partylist }}-PARTYLIST</h1>
    <div  data-flickity="{
        &quot;cellAlign&quot;: &quot;left&quot;,
        &quot;prevNextButtons&quot;: false,
        &quot;pageDots&quot;: false,
        &quot;contain&quot;: true,
        &quot;autoPlay&quot;: 2000,
        &quot;wrapAround&quot;: true}"  class="w-full  main-carousel flickity-enabled is-draggable mt-4 " tabindex="0">
        @foreach ($partylist as $candidate)
        <div class="carousel-cell shadow-md relative  md:h-96 h-96 md:w-6/12 w-full ">
            <img src="{{ asset('images/sksu2.jpg') }}" class="absolute opacity-50" alt="">
           <div class="h-full relative flex items-center justify-center">
               <img src="{{ asset('/storage/candidates/' . $candidate->image->url) }}" class="h-80 shadow-md" alt="">
           </div>
            <div class="absolute bottom-3 left-3 bg-side text-white opacity-75 p-2">
                <h1 class="font-medium">{{ $organization->organization }}-{{ $organization->campus->campus }} CAMPUS</h1>
            </div>
        </div>
        @endforeach
        
        
       
      </div>
    @empty
        
    @endforelse
  
</div>
