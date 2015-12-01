<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->truncatesTables(array(
            'users',
            'password_resets',
            'tickets',
            'ticket_votes',
            'ticket_comments'
        ));

        $this->call('UserTableSeeder');
        $this->call('TicketTableSeeder');
    }

    public function truncatesTables(array $tables)
    {
        $this->checkForeignKeys(false);

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::table('users')->truncate(true);
    }

    public function checkForeignKeys($check){
        $check = $check ? '1':'0';
        DB::statement("SET FOREIGN_KEY_CHECKS = $check");
    }

}
