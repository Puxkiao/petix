<?php

namespace Database\Seeders;

use App\Models\Users;
use App\Models\Films;
use App\Models\Studio;
use App\Models\Ticket;
use App\Models\Payment;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Users::insert([
            'id_users' => 'U001',
            'nama'     => 'Josafat',
            'username' => 'electicbunny',
            'password' => 'jojoganteng123'
        ]);

        Films::insert([
            'id_films'      => 'F001',
            'judul_films'   => 'Mufasa',
            'tanggal'       => '2025-02-08',
            'durasi'        => '2 Jam',
            'jam_tayang'    => '18:00'
        ]);

        Studio::insert([
            'id_studio'     => 'S001',
            'nama_studio'   => 'Audi #1',
            'kursi'         => 'A1,A2,A3',
            'lokasi'        => 'CGV'
            
        ]);
        Ticket::insert([
            'id_ticket'         => 'T001',
            'id_users'          => 'U001',
            'id_studio'         => 'S001',
            'id_films'          => 'F001',
            'price'             => '35000',
            'status'            => 'Sukses'
        ]);
        
        
        Payment::insert([
            'id_payment'        => 'P001',
            'id_ticket'         => 'T001',
            'payment_method'    => 'Gopay',
            'total_price'       => '105000',
            'status'            => 'Sukses',
            'amount'            => '3',
            'payment_date'      => '2025-02-08 22:58:18'
            
            
        ]);

    }
}
