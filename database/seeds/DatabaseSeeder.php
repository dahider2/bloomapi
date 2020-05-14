<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        $this->call(MerchantSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(OtherOptionCategorieSeeder::class);
        $this->call(OtherOptionSeeder::class);
        $this->call(DeliveryFeeSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
