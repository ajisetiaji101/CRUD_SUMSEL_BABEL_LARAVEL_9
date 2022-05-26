<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Administrator',
            'nik' => '1671142606980123',
            'address'=> 'jalan tegal binangun',
            'dob' => '1998-06-24',
            'sex' => 'male',
            'mobilenumber' => '08969648123',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name'  => 'taufiq',
            'nik' => '1671142606980232',
            'address'=> 'jalan tegal binangun',
            'dob' => '1999-05-20',
            'sex' => 'male',
            'mobilenumber' => '08969648123',
            'level' => 'admin',
            'email' => 'taufiq@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name'  => 'aji',
            'nik' => '1671142606980232',
            'address'=> 'jalan tegal binangun',
            'dob' => '1998-06-24',
            'sex' => 'male',
            'mobilenumber' => '08969648123',
            'level' => 'admin',
            'email' => 'aji@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement($array = array('male','female'));
        foreach (range(1,200) as $index) {
            DB::table('clients')->insert([
                'name' => $faker->name('male'),
                'nik'=> $faker->nik(),
                'sex'=> 'male',
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->address,
                'no_rek' => $faker->bankAccountNumber,
                'nom_rek' => $faker->numberBetween($min=1000000, $max=6000000),
                'mobilenumber'=> $faker->phoneNumber
                
            ]);
        }
    }
}
