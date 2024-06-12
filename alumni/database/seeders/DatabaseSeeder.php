<?php

// namespace Database\Seeders;

// use App\Models\User;
// // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      */
//     public function run(): void
//     {
//         // User::factory(10)->create();

//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
//     }
// }
namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Kuisioner;
use App\Models\Lulusan;
use App\Models\MainKuisioner;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Admin::create([
            "username"=>"a",
            "password"=>"a",
            "nama"=>"admin"
            ]);
        Lulusan::create([
            "username"=>"tt",
            "password"=>"a",
            "nama"=>"andre",
            "tanggal_lahir"=>"2003-07-15",
            "alamat"=>'tuban',
            "jenis_kelamin" =>"1",
            "ipk"=>4,
            "tahun_masuk"=>"2000",
            "tahun_lulus"=>"2005",
            "prodi"=>"tif",
            "no_hp" =>"089515896944",
            "email"=>"andreka852@gmail.com"
        ]);
        MainKuisioner::create([
            "subject"=>"text"
        ]);
        Kuisioner::create([
            "id_main_kuisioner"=>1,
            "kuisioner"=>"test"
        ]);
        Kuisioner::create([
            "id_main_kuisioner"=>1,
            "kuisioner"=>"test2"
        ]);
        
    }
}
