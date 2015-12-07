<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 7/12/2015
 * Time: 3:23 PM
 */
use Test\Entities\TicketComment;
class TicketCommentTableSeeder extends BaseSeeder
{
    protected $total = 250;
    public function getModel()
    {
        return new TicketComment();
    }
    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id,
            'comment'   => $faker->paragraph(),
            'link'      => $faker->randomElement(['', '', $faker->url])
        ];
    }
}