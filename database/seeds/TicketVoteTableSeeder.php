<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 7/12/2015
 * Time: 11:33 AM
 */
use \Test\Entities\TicketVote;
class TicketVoteTableSeeder extends BaseSeeder
{
    protected $total = 250;
    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        // TODO: Implement getDummyData() method.
        return [
            'user_id' => $this->getRandom('User')->id,
            'ticket_id' => $this->getRandom('Ticket')->id
        ];
    }
}