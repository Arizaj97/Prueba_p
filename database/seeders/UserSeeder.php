<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name' =>'jose',
            'email' => 'a@gmail.com'  ,
            'document' =>'123456789',
            'phone' => '123456',
            'city' => 'medellin',
            'password' => Hash::make('123456789'),
            'rol_id' => '2' ,
            'semester' => '0',
            
        ]);
        $user=User::create([
            'name' =>'profe',
            'email' => 'e@gmail.com'  ,
            'document' =>'12345789',
            'phone' => '12356',
            'city' => 'medellin',
            'password' => Hash::make('123456789'),
            'rol_id' => '2' ,
            'semester' => '0',
            
        ]); $user=User::create([
            'name' =>'profe2',
            'email' => 'i@gmail.com'  ,
            'document' =>'126789',
            'phone' => '1234567',
            'city' => 'medellin',
            'password' => Hash::make('123456789'),
            'rol_id' => '2' ,
            'semester' => '0',
            
        ]);
    }
}
