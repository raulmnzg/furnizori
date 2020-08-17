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
        ConsumptionCategory::create([
            'name' => '1'
        ]);
    }
}
