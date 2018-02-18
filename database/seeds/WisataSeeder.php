<?php

use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        	['nama'=>'Tangkuban Perahu','lokasi'=>'Jawa Barat','jenis_wisata'=>'Pegunungan','keunggulan'=>'Pemandangan','sejarah'=>'Gunung ini sering di kaitkan dengan legenda Sangkuriang yang gagal mendapatkan Dayang Sumbi yang ternyata ibu kandungnya'],
            ['nama'=>'Kawah Putih','lokasi'=>'Ciwidey','jenis_wisata'=>'Pegunungan','keunggulan'=>'Pemandangan','sejarah'=>'akibat dari letusan gunung Patuha'],
            ['nama'=>'Maribaya','lokasi'=>'Bandung Barat','jenis_wisata'=>'Air terjun','keunggulan'=>'Pemandangan dan Pemandian','sejarah'=>'Dulunya terkenal karena pemandian nya yang sekarang terkenal karena pemandian dan air terjunnya'],
            ['nama'=>'Situ Patenggang','lokasi'=>'Bandung Selatan','jenis_wisata'=>'Situ atau Danau','keunggulan'=>'Pemandangan','sejarah'=>'Danau ini di buat sebagai rasa sayang ki Santang kepada Dewi Rengganis'],
            ['nama'=>'333','lokasi'=>'Bandung','jenis_wisata'=>'Museum','keunggulan'=>'Arsitektur','sejarah'=>'Dahulunya di buat untuk Departemen Lalulintas dan Pekerjaan Umum']
			];
  	DB::table('wisatas')->insert($table);
    }
}
