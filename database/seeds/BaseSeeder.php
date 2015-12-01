<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 30/11/2015
 * Time: 4:49 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Faker\Generator;

abstract class BaseSeeder extends Seeder
{
protected function createMultiple($total, array $customValues = array()){
    for($i=1; $i<=$total; $i++){
        $this->create($customValues);
    }
}
    abstract public function getModel();
    abstract public function getDummyData(Generator $faker, array $customValues = array());
    protected function create(array $customValues = array()){
        $values = $this->getDummyData(Faker::create(), $customValues);
        $values = array_merge($values, $customValues);
        $this->getModel()->create($values);
    }


}