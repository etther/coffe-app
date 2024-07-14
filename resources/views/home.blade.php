@extends('layout.template')

@section('title.Homepage')
@endsection

@section('content')
    <div class="gap-2 mt-32 min-h-auto min-w-fit p-2 mx-24 flex justify-center items-center sm:text-left">
        <div class="grid grid-cols-3 justify-center items-center md:grid-cols-2">
            <div class="col-span-1">
                <p class="text-5xl font-semibold animate-fade-down animate-once animate-ease-out">Caffein.</p>
                <p class="text-xl mb-4 font-italic animate-fade-right animate-once animate-ease-out">The world's most popular
                    stimulant.</p>
                <p class="text-lg mt-2 animate-fade-left animate-once animate-ease-out">
                    Welcome to Caffein, where every cup tells a story and every sip is a journey into the world of rich
                    flavors
                    and aromatic delights. At Caffein, we are passionate about crafting the perfect cup of coffee that
                    transcends the ordinary, elevating your daily caffeine ritual to an extraordinary experience.
                </p>
            </div>
            <div class="col-span-1 ml-auto">
                <img src="/image/caffein.png" class="h-auto max-w-lg animate-fade-up animate-once animate-ease-out"
                    alt="">
            </div>
        </div>
    </div>
@endsection
