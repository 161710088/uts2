<?php

use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        		['nama'=>'Mie Aceh','asal'=>'Aceh','harga'=>'RP.30.000/porsi','bahan_pokok'=>'Mie Kuning','jenis_makanan'=>'Berat'],
                ['nama'=>'Sate Padang','asal'=>'Padang','harga'=>'RP.15.000/porsi','bahan_pokok'=>'Daging Sapi','jenis_makanan'=>'Berat'],
                ['nama'=>'Bika Ambon','asal'=>'Medan','harga'=>'RP.5.000/buah','bahan_pokok'=>'Tepung Terigu','jenis_makanan'=>'Ringan'],
                ['nama'=>'Sate Maranggi','asal'=>'Purwakarta dan Cianjur','harga'=>'RP.20.000/10 tusuk','bahan_pokok'=>'Daging ayam','jenis_makanan'=>'Berat'],
                ['nama'=>'Kerak Telor','asal'=>'Jakarta','harga'=>'RP.10.000/porsi','bahan_pokok'=>'Telor dan Nasi','jenis_makanan'=>'Berat']
			];
  	DB::table('makanans')->insert($table);
    }
}
