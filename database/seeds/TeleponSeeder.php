<?php

use App\Telepon;
use Illuminate\Database\Seeder;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Telepon::class, 10)->create();
    }
}
