<?php

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        		    ['nama'=>'Jawa Barat','nama_gubernur'=>'Ahmad Heryawan','luas'=>'35.222,18 km2','kepadatan'=>'1.306 jiwa/km2','populasi'=>'43.798.140 jiwa'],
                ['nama'=>'Jawa Tengah','nama_gubernur'=>'Ganiar Pranowo','luas'=>'32.548 km2','kepadatan'=>'986 jiwa/km2','populasi'=>'35.557.249 jiwa'],
                ['nama'=>'Jawa Timur','nama_gubernur'=>'Soekarwo','luas'=>'47.922 km2','kepadatan'=>'806 jiwa/km2','populasi'=>'42.030.633 jiwa'],
                ['nama'=>'Kalimantan Timur','nama_gubernur'=>'Awang Faroek Ishak','luas'=>'129.066,64 km2','kepadatan'=>'1700 jiwa/km2','populasi'=>'3.725.279 jiwa'],
                ['nama'=>'Kalimantan Barat','nama_gubernur'=>'Cornelis','luas'=>'146.807 km2','kepadatan'=>'36.43 jiwa/km2','populasi'=>'4100 jiwa/km2']
			];
  	DB::table('provinsis')->insert($table);
    }
}
