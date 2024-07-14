@extends('layout.template')

@section('title', 'Homepage')

@section('content')
    <div class="px-8 py-6">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID Order</th>
                        <th scope="col" class="px-6 py-3">Nama Customer</th>
                        <th scope="col" class="px-6 py-3">Alamat Customer</th>
                        <th scope="col" class="px-6 py-3">No. Hp Customer</th>
                        <th scope="col" class="px-6 py-3">Nama Minuman</th>
                        <th scope="col" class="px-6 py-3">Total Harga</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $order->id_o }}
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $order->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->alamat }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->nohp }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->coffee->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->total_harga }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('order.edit', ['id' => $order->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="{{ route('order.delete', ['id' => $order->id]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
