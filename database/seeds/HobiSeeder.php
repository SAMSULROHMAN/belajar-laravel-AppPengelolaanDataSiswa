<?php

use Illuminate\Database\Seeder;
use App\Hobi;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hobi::class, 5)->create();
    }
}
