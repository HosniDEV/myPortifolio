<svg fill="" viewBox="0 0 1695 57" class="fill-gray-200 "><path d="M0 23c135.4 19 289.6 28.5 462.5 28.5C721.9 51.5 936.7 1 1212.2 1c183.6-.1 344.5 7.3 482.8 22v34H0V23z"></path></svg>
    <div class=" bg-gray-200 relative ">
        <x-container>
              <div class="py-6  px-2 md:py-12 flex justify-center items-center ">
        <div class=" flex flex-col items-center ">
         <div class="absolute right-0 bottom-0">
             <img src="{{asset('images/5.png')}}" alt="" class="w-[300px]">
         </div>
         <div class="absolute left-0 -top-3">
             <img src="{{asset('images/5.png')}}" alt="" class="w-[300px] -rotate-180">
         </div>
         <h1 class="text-3xl font-bold text-red-600  mb-3">Hit me up</h1>

         <form action="{{route('post.store')}}" method="post" class="w-full  mt-3 ">
            @csrf
      <div class="flex gap-3">
        <input required  name='name'type="text" class="px-3 py-2 outline-none w-full rounded-sm border border-red-600  bg-slate-200" placeholder="Full name">
        <input required name='email' type="email" class="px-3 py-2 outline-none w-full rounded-sm border border-red-600  bg-slate-200" placeholder="Your email adresse">
      </div>
      <div class="flex gap-3 mt-3 ">
        <textarea required  name='content'type="text" class="px-3 py-2 outline-none w-full rounded-sm border border-red-600  bg-slate-200" placeholder="what's on your mind"> </textarea>
      </div>
      <button type="submit" class="px-3 py-2 outline-none w-full rounded-sm border border-red-600  bg-red-600 mt-3 text-base font-medium text-white hover:bg-red-500" >Send</button>
        </div>
     </div>
        </x-container>
    </div>
    {{-- <p class="text-center text-base font-medium">Keep up to date with any new courses <br>I’m working on and receive exclusive offers and discounts when they launch.</p> --}}
    {{-- <div class="py-6  px-2 md:py-12 flex justify-center items-center ">
        <div class=" flex flex-col items-center ">
         <div class="absolute right-0 bottom-0">
             <img src="{{asset('images/5.png')}}" alt="" class="w-[300px]">
         </div>
         <div class="absolute left-0 -top-3">
             <img src="{{asset('images/5.png')}}" alt="" class="w-[300px] -rotate-180">
         </div>
         <h1 class="text-3xl font-bold text-red-600  mb-3">Join my Newsletter</h1>
         <p class="text-center text-base font-medium">Keep up to date with any new courses <br>I’m working on and receive exclusive offers and discounts when they launch.</p>
         <form action="" method="post" class="w-full mt-10 relative">
             <input required type="text" class="pl-2 pr-36 py-3 outline-none w-full rounded-sm border border-red-600  bg-slate-200" placeholder="Your email adresse">
             <button class="relative w-full py-3 mt-2  md:absolute md:-right-14  md:h-full md:mt-0 bg-red-600 md:w-[160px] text-lg text-white font-bold hover:bg-red-500 duration-200 ease-in">Subsicribe now</button>
         </form>
        </div>
     </div> --}}
