<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Roda as seeders
        $this->call([
            AddressSeeder::class,
            CompanySeeder::class,
            UserSeeder::class
        ]);

        //Popula a materialized view do postgress
        DB::unprepared("REFRESH MATERIALIZED VIEW sales_commission_view");
    }
}
