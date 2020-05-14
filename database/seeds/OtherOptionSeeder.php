<?php

use Illuminate\Database\Seeder;

class OtherOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OtherOption::class, 20)->create();

    }
}
