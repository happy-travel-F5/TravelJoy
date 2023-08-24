<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Gigi',
            'email'=>'gi@gmail.com    ',
            'password'=>'123456789'
        
            
           ]);
           User::create([
            'name' => 'Macarena',
            'email'=>'Chris@gmail.com    ',
            'password'=>'chrislugogonzales'
        
            
           ]);
           User::create([
            'name' => 'Macarena',
            'email'=>'macarena@gmail.com    ',
            'password'=>'Sienateextrañamos'
        
            
           ]);
           User::create([
            'name' => 'Paula',
            'email'=>'paulinga@gmail.com    ',
            'password'=>'paulinga12345'
        
            
           ]);
    }
}
