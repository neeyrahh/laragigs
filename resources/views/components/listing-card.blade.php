@props(['listing'])

<x-card>
    <div class="flex">
       <img class= " hidden w-30 h-20 mr-6 md:block" src="{{asset('images/benz.png')}}" alt="logo"/>
        <div>
         <h3 class="text-2xl">
             <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
         </h3>
         <div class="text-xl font-bold mb-4 ">
          {{$listing->company}}
          {{-- <x-listing-tags :tagCsv="$listing->tags"/> --}}
         </div>
         <ul class="flex">
           <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-x5">
             <a href="#">LARAVEL</a>
           </li>
           <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-x5">
             <a href="#">API</a>
           </li>
           <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-x5">
             <a href="#">Backend</a>
           </li>
           <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-x5">
             <a href="#">vue</a>
           </li>
         </ul>
         <div class="text-lg mt-4">
           <i class="fa-solid fa-location-dot"></i>
           {{$listing->location}}
         </div>
        
        </div>
    </div>
</x-card>