

<x-layout>
@include('partials/_hero')
@include('partials/_search')
    
@if(count($listings) == 0)
    <h1>No listings no party</h1>
@else 
     <div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
      >
      
    @foreach($listings as $listing)
     <x-listing-card :listing="$listing" />
    @endforeach
    </div>

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>

    
@endif
</x-layout>







