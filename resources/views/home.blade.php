@extends('master.layout')
@section('title')
    HosniCr
@endsection
@section('body')
    <x-header></x-header>
    <x-flash-message></x-flash-message>
    <x-container>
        <div class="grid grid-cols-2 md:grid md:grid-cols-3 my-10 gap-0  md:gap-10">
            <x-leftSide></x-leftSide>

            <div class=" col-span-2 md:col-span-2  border border-collapse  rounded-lg p-5 relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-[300px] rotate-45 opacity-60">
                    <img src="{{ asset('images/4.png') }}" alt="">
                </div>
                <div class="flex space-x-4 bg-gray-200 p-5 rounded-lg mt-4">
                    <div class="space-y-3">
                        <h1 class="text-2xl font-bold text-red-600  hover:underline">Who am I <span class="text-lg"><i
                                    class="far fa-smile-wink"></i></span></h1>
                        <p class="text-base font-medium first-letter:text-red-600 text-black text-start">Greetings! I’m
                            <span class="text-red-600">HOSNI</span>. I spend my days designing and developing web
                            applications,
                            I specialize in the Laravel PHP framework on the backend, Vue.js on the frontend and
                            Tailwind CSS for styling.
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <img src="{{ asset('images/future.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class=" bg-gray-300 p-5 rounded-lg mt-4 text-base font-bold text-red-600 uppercase">
                    Here are some projects I've worked on:
                </div>
                <div class="space-y-4 bg-gray-200 p-5 rounded-lg mt-4">

                   <x-card-project>
                    @slot('title')
                Laravel Voting App
                    @endslot
                    Example Ecommerce site built with Laravel.
                   </x-card-project>

                   <x-card-project>
                    @slot('title')
                    Laravel Blog App
                    @endslot
                    Example Ecommerce site built with Laravel.
                   </x-card-project>

                   <x-card-project>
                    @slot('title')
                    Flutter Ecommerce App
                    @endslot
                     in this project i tried build an application Mobile and web using flutter,<a href="https://github.com/HosniDEV/Ecommerce_App" class="text-red-600">GitHub link</a>
                   </x-card-project>

                   <x-card-project>
                    @slot('title')
                    Flutter whatsApp clone
                    @endslot
                     in this project i tried rebuild whatsApp  in my own view using flutter,<a href="https://github.com/HosniDEV/whatsappClone" class="text-red-600">GitHub link</a>
                   </x-card-project>

                   <x-card-project>
                    @slot('title')
                    Flutter Sneakers App
                    @endslot
                     in this project i tried build a simple sneakers app UI  using flutter,<a href="https://github.com/HosniDEV/sneakersAppUI" class="text-red-600">GitHub link</a>
                   </x-card-project>
                   <x-card-project>
                    @slot('title')
                    Traditional Resume
                    @endslot
                    If you still prefer a traditional resume,<a href="{{asset("images/CVHosni.pdf")}}" class="text-red-600">pdf version</a>
                   </x-card-project>

                </div>
                <div class="space-y-4 bg-gray-200 p-5 rounded-lg mt-4">
                    <h1 class="text-lg font-semibold text-red-600">Contact me :</h1>
                    <p>If you’re looking to get in contact with me for business inquiries or if you have a question, feel free to <a href="mailto:contact.hosnii@gmail.com" class="text-lg text-red-600">email me</a>. I’ll try to respond as soon as I can.</p>
                </div>
            </div>
        </div>

    </x-container>
    <x-newsletter></x-newsletter>
    <x-footer></x-footer>

@endsection
