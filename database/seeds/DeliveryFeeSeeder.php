<?php

use Illuminate\Database\Seeder;

class DeliveryFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DeliveryFee::class, 20)->create();

    }
}
