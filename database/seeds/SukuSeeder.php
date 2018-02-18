<?php

use Illuminate\Database\Seeder;

class SukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        	      ['nama'=>'Suku Jawa','wilayah'=>'Jawa','populasi'=>'100.000.000 jiwa','agama'=>'Islam','bahasa'=>'Jawa, Indonesia, dan Melayu'],
                ['nama'=>'Suku Sunda','wilayah'=>'Jawa barat','populasi'=>'36.701.670 jiwa','agama'=>'Islam','bahasa'=>'Sunda dan Indonesia'],
                ['nama'=>'Suku Batak','wilayah'=>'Sumatra','populasi'=>'8.466.969 jiwa','agama'=>'kristen','bahasa'=>'Toba dan Indonesia'],
                ['nama'=>'`Suku Madura','wilayah'=>'Jawa dan Kalimantan','populasi'=>'7.179.356 jiwa','agama'=>'Islam','bahasa'=>'Madura dan Indonesia'],
                ['nama'=>'Suku Dayak','wilayah'=>'Banten','populasi'=>'4.657.000 jiwa','agama'=>'Islam','bahasa'=>'Banten, Sunda, dan Indonesia']
			];
  	DB::table('sukus')->insert($table);
    }
}
