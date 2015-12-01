<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 1/12/2015
 * Time: 3:46 PM
 */
use Test\Entities\Ticket;

class TicketTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new Ticket();
    }


    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        // TODO: Implement getDummyData() method.
        return [
            'title' => $faker->sentence(),
            'status' => $faker->randomElement(['open', 'closed']),
            'user_id' => 5
            //'user_id' => $this->getRandom('User')->id
        ];
    }

    public function run(){
        $this->createMultiple(50);
    }

}