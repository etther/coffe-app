@extends('layout.template')

@section('title.History')
@endsection

@section('content')
    <img class="h-auto max-w-5xl transition-all duration-300 rounded-lg blur-sm hover:blur-none mx-auto mt-12 mb-20 rounded-lg animate-fade-up"
        src="/image/building.png" alt="Caffein">

    <div class="gap-2 mt-32 min-h-auto min-w-fit p-2 mx-24 flex justify-center items-center sm:text-left">
        <div class="grid grid-cols-3 justify-center items-center md:grid-cols-2">
            <div class="col-span-1 animate-fade-right animate-once animate-ease-out">
                <p class="text-5xl font-semibold ">Barista.</p>
                <p class="text-xl mb-4 font-italic">a barista is a coffee
                    artist and customer service champion.</p>
                <p class="text-lg mt-2">
                    Meet the heartbeat of Caffein, our exceptional baristas, the true artisans behind every crafted cup.
                    Steeped in passion and armed with expertise, our baristas elevate your coffee experience to an art form.
                </p>
            </div>
            <div class="col-span-1 ml-auto">
                <img src="/image/barista.jpg"
                    class="h-auto max-w-md rounded-lg animate-fade-left animate-once animate-ease-out" alt="">
            </div>
            <div class="col-span-1 mr-auto  mt-40">
                <img src="/image/machine.jpg"
                    class="h-auto max-w-md rounded-lg animate-fade-right animate-once animate-ease-out" alt="">
            </div>
            <div class="grid grid-cols-3 justify-center items-center md:grid-cols-2">
                <div class="col-span-2 animate-fade-left animate-once animate-ease-out">
                    <p class="text-5xl font-semibold ">Machine.</p>
                    <p class="text-xl mb-4 font-italic">A coffee machine is
                        a specialized appliance designed for brewing coffee.</p>
                    <p class="text-lg mt-2">
                        Introducing the heartbeat of Caffein – our state-of-the-art coffee machines. More than mere
                        appliances, they are the artisans behind the scenes, orchestrating the symphony of flavors that
                        define our coffee experience.
                    </p>
                </div>
            </div>
        </div>
    @endsection
