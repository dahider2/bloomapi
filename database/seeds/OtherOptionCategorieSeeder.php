<?php

use Illuminate\Database\Seeder;

class OtherOptionCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\OtherOptionCategorie::class, 5)->create();

    }
}
