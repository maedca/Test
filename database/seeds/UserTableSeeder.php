<?php

use Illuminate\Database\Seeder;
use Test\Entities\User;
use Faker\Factory as Faker;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{

    public function getModel(){
        return new User();
    }
    public function getDummyData(Generator $faker, array $customValues = array()){
        return [
          'name' => $faker->name,
            'email'=> $faker->email,
            'password' => bcrypt('secret')
        ];
    }
    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'manuel camacho',
            'email' => 'maedca@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }

//    public function createUsers($total){
//        $faker = Faker::create();
//
//        for($i =1 ; $i<= $total; $i++){
//            User::create([
//               'name' => $faker->name,
//                'email' => $faker->email,
//                'password' => bcrypt('secret')
//            ]);
//        }
//    }
}