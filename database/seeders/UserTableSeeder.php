<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>'Edmilson Joaquim'
            ,'email'    =>'admin@doador.com.br'
            ,'password' =>bcrypt('doador1234')
        ]);

        User::create([
            'name'      =>'Joaquim Edmilson'
            ,'email'    =>'admin@doador.com'
            ,'password' =>bcrypt('doador4321')
        ]);
    }
}
