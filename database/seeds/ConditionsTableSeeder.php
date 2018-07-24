<?php

use App\Condition;
use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condition_names = [
            "Won't start",
            'Broken',
            'Scratched',
            'Somewhat new',
            'Pristine'
        ];

        $condition_percentages = [
            0,
            10,
            40,
            70,
            90
        ];

        $conditions = [];

        foreach($condition_names as $i => $condition_name)
        {
            $condition = [];
            $condition['name'] = $condition_names[$i];
            $condition['price_percentage'] = $condition_percentages[$i];

            $conditions[] = $condition;
        }

        Condition::insert($conditions);
    }
}
