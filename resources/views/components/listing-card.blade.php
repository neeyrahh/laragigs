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
         <div class="border border-gray-200 w-full mb-6"></div>
         <div>
             <h3 class="text-3xl font-bold mb-4"> Job description</h3>
             <div class="text-lg space-y-6">
                 <p>{{$listing->description}}</p>

                 <a href="mailto:{{$listing->email}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Contact Employee</a>

                 <a href="mailto:{{$listing->website}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i> Visit website</a>
             </div>
         </div>
        </div>
    </div>
</x-card>