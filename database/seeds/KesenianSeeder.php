<?php

use Illuminate\Database\Seeder;

class KesenianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
        	['nama'=>'Debus','asal'=>'Banten','fungsi'=>'alat penyemangat','jenis_kesenian'=>'bela diri','sejarah'=>'kesenian ini berawal pada abad ke-16, pada masa pemerintahan sultan Maulana Hasanuddin(1543-1570).'],
        	['nama'=>'Ketoprak','asal'=>'Jawa','fungsi'=>'Hiburan','jenis_kesenian'=>'Seni Pentas','sejarah'=>'Ketoprak adalah sejenis seni pentas yang berasal dari jawa,Tema cerita diambil dari cerita legenda atau sejarah jawa'],
        	['nama'=>'Kuda Lumping','asal'=>'Jawa','fungsi'=>'Hiburan','jenis_kesenian'=>'Tarian','sejarah'=>'Kuda Lumping juga di sebut jaran kepang atau jathilan adalah tarian tradisional jawa menampilkan sekelompok prajurit tengah menumpang kuda'],
        	['nama'=>'Lenong','asal'=>'Betawi','fungsi'=>'Hiburan','jenis_kesenian'=>'Teater','sejarah'=>'Lenong adalah keseian teater tradisional atau sandiwara rakyat Betawi yang dibawakan dalam dialek Betawi yang berasal dari Jakarta,Indonesia'],
        	['nama'=>'Wayang Kulit','asal'=>'Jawa','fungsi'=>'Hiburan dan menyebarkan agama islam','jenis_kesenian'=>'Wayang','sejarah'=>'Wayang kulit adalah kesenian yang di pakai para wali songo untuk menyebarkan agama islam meskipun sekarang di jadikan kesenian hiburan']
        ];
    	DB::table('kesenians')->insert($table);
    }
}
