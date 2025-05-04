<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname'=>'Muhammad',
            'lname'=>'Ramadan',
            'email'=>'Muhammad@romio.com',
            'password'=> Hash::make('Muhammad'),
            'is_admin'=>1
        ]);
        
    }
}
