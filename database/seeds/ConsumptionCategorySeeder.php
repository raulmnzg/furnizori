<?php

use App\ConsumptionCategory;
use Illuminate\Database\Seeder;

class ConsumptionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsumptionCategory::create( [
            'id'=>'1',
            'name'=>'C1',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'2',
            'name'=>'C2',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'3',
            'name'=>'C3',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'4',
            'name'=>'C4',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'5',
            'name'=>'C5',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'6',
            'name'=>'C6',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );



        ConsumptionCategory::create( [
            'id'=>'7',
            'name'=>'C7',
            'created_at'=>'2020-08-11 20:41:41',
            'updated_at'=>'2020-08-11 20:41:41'
        ] );


    }
}
