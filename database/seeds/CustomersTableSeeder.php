<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Customer::class, 10)->create()->each(function ($customer) {

            foreach(range(1,4) as $x) {
                $customer->orders()->save(factory(App\Order::class)->make());
            }

            $customer->address()->save(factory(App\Address::class)->make());
        });
    }
}
