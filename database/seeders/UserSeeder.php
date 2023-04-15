<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone'=>'(567)-5676567',
            'email_verified_at'=>now(),
            'password' => Hash::make('password'),
        ]);
        $user->assignRole(['Admin','Processor']);
        $user = User::create([
            'name' => 'Processor',
            'email' => 'processor@gmail.com',
            'phone'=>'(567)-5676567',
            'email_verified_at'=>now(),
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('Processor');
        $user = User::create([
            'name' => 'Sale_Rep',
            'email' => 'sale@gmail.com',
            'phone'=>'(567)-5676567',
            'email_verified_at'=>now(),
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('Sale_rep');
      
    }
}
