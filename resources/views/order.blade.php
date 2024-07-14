@extends('layout.template')

@section('title.Homepage')
@endsection

@section('content')
    <div class="flex justify-center items-start animate-fade-up animate-once animate-ease-in-out">
        @error('msg')
            {{ $msg }}
        @enderror
        <div class="bg-white px-8 py-6 w-[95%] rounded-lg shadow-lg">
            <p class="font-bold text-2xl">Pembelian</p>
            <form class="max-w-md mx-auto" method="POST" action="{{ route('order.store') }}">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nama" id="nama"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 focus:outline-none focus:ring-0 peer"
                        placeholder=" " required />
                    <label for="nama"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="alamat" id="alamat"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 focus:outline-none focus:ring-0 peer"
                        placeholder=" " required />
                    <label for="alamat"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat
                    </label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="number" name="nohp" id="nohp"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 focus:outline-none focus:ring-0 peer"
                        placeholder=" " required />
                    <label for="nohp"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No
                        Hp.
                    </label>
                </div>
                <h3 class="mb-5 text-lg font-medium">Pilih Minuman :</h3>
                <ul class="grid w-full gap-6 md:grid-cols-3 justify-center">
                    @foreach ($coffes as $coffee)
                        <li>
                            <input type="checkbox" id="coffe_{{ $coffee->id }}" name="coffe_id[]"
                                value="{{ $coffee->id }}" class="hidden peer"
                                onchange=" handleCheckboxChange('{{ $coffee->id }}')">
                            <label for="coffe_{{ $coffee->id }}"
                                class="inline-flex flex-col items-center w-full p-5 bg-gradient-to-t from-[#a6c1ee] to-[#fbc2eb] border-2 rounded-lg cursor-pointer shadow-lg peer-checked:border-blue-600 ">
                                <div class="block mb-3">
                                    <img src="/image/{{ $coffee->c_image }}" class="w-10 rounded-full mx-auto"
                                        alt="">
                                    <div class="w-full text-lg font-semibold">{{ $coffee->name }}</div>
                                </div>

                            </label>
                        </li>
                    @endforeach
                </ul>
                <button type="submit"
                    class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Order</button>
            </form>
        </div>
    </div>
@endsection
