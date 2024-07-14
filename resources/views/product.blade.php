@extends('layout.template')

@section('title.Product')
@endsection

@section('content')
    <div
        class=" gap-10 mt-14 min-h-auto min-w-fit p-2 mx-24 flex flex-wrap backdrop-blur-sm justify-center animate-fade-up animate-once animate-ease-out">
        @foreach ($coffes as $coffe)
            <div>
                <a href="#" class="flex flex-col items-center rounded-lg shadow-2xl md:flex-row md:max-w-xl ">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/image/{{ $coffe['c_image'] }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight ">{{ $coffe['name'] }}
                        </h5>
                        <p class="mb-3 font-normal">{{ $coffe['description'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
