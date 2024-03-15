<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        DB::table('tbl_akuns')->insert([
            [
            "nama" => "Rayhan",
            "username" => "Rayhan",
            "email" => "rayhan@gmail.com",
            "phone" => "9873491",
            "address" => "Bangkalan",
            "password" => Hash::make("testimoni"),
            "role" => "admin",
            ],
        ]);
    }
}
