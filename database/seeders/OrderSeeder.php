<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Coffe;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gantilah '1' dengan ID yang dipilih oleh pelanggan
        $selectedCoffeeId = '1';

        // Ambil data kopi berdasarkan ID yang dipilih
        $coffe = Coffe::find($selectedCoffeeId);

        // Buat pesanan dengan harga kopi yang dipilih
        if ($coffe) {
            Order::create([
                'id_o' => Str::uuid(),
                'nama' => 'Farel',
                'alamat' => 'Lumin',
                'nohp' => '082145245699',
                'coffe_id' => $coffe->id,
                'quantity' => 1, // Sesuaikan jumlah yang diinginkan
                'total_harga' => $coffe->price,
            ]);
        } else {
            // Handle ketika kopi tidak ditemukan
            echo "Coffee not found.";
        }
    }
}
