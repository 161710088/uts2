<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KabupatenSeeder::class);
        $this->call(KesenianSeeder::class);
        $this->call(KotaSeeder::class);
        $this->call(MakananSeeder::class);
        $this->call(PahlawanSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(PulauSeeder::class);
        $this->call(SenjataSeeder::class);
        $this->call(SukuSeeder::class);
        $this->call(WisataSeeder::class);
    }
}
