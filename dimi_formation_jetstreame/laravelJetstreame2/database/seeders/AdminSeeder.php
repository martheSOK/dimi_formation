<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user1=User::create([

            'name'=>'sasa',
            'email'=>'sasa@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('12345678')
        ]);


        $user2=User::create([

            'name'=>'fafa',
            'email'=>'fafa@gmail.com',
            'email_verified_at' => now(),
            'password'=> Hash::make('12345678')
        ]);

        $user1 -> assignRole('etudiant');
        $user2 -> assignRole('enseignant');
    }
}
