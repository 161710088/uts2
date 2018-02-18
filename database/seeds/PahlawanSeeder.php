<?php

use Illuminate\Database\Seeder;

class PahlawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        		    ['nama'=>'Ismail Marzuki','tempat'=>'Kwitang, Senen, Batavia','tanggal_lahir'=>'1914-05-11','wafat'=>'1958-05-25','tempat_tinggal'=>'Jakarta','kota_asal'=>'Jakarta'],
                ['nama'=>'Raden Dewi Sartika','tempat'=>'Bandung','tanggal_lahir'=>'1884-12-04','wafat'=>'1947-12-11','tempat_tinggal'=>'Bandung','kota_asal'=>'Bandung'],
                ['nama'=>'Otto Iskandardinata','tempat'=>'Bandung','tanggal_lahir'=>'1897-03-31','wafat'=>'1945-12-20','tempat_tinggal'=>'Banten','kota_asal'=>'Bandung'],
                ['nama'=>'Jendral Besar Raden Soedirman','tempat'=>'Purbalingga','tanggal_lahir'=>'1916-01-24','wafat'=>'1950-01-29','tempat_tinggal'=>'Purbalingga','kota_asal'=>'Purbalingga'],
                ['nama'=>'Raden Adjeng Kartini','tempat'=>'Jepara','tanggal_lahir'=>'1879-04-21','wafat'=>'1904-09-17','tempat_tinggal'=>'Jawa','kota_asal'=>'Jepara']
			];
  	DB::table('pahlawans')->insert($table);
    }
}
