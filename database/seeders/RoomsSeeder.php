<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $rooms = []; //array itu adalah beberapa  data yang akan diinputkan ke dalam tabel rooms
        for ($i=1; $i <=100 ; $i++) { 
            $rooms[] = [
                //mengisi data yang akan diinputkan ke dalam tabel rooms
                'name' => 'Room ' . $i,
                'capacity' => rand(1, 5),
                'price' => rand(500, 500), //harga dalam satuan besar
                'status' => ['available', 'reserved'][rand(0, 1)],//rand maksudnya untuk mengacak data
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        //memasukkan data yang sudah diinputkan ke dalam tabel rooms
        foreach($rooms as $room){
            \App\Models\Rooms::create($room); //menyimpan data ke dalam tabel rooms dengan meggunakan elequent
        }
    }
}
