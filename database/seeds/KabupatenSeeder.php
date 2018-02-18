<?php

use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = [
        	['nama'=>'Kabupaten Bandung','nama_bupati'=>'H. Dadang M. Nasser, S.H., M.Ipol','luas'=>'1.762,39 km2','kepadatan'=>'2.309,29 jiwa/km2','populasi'=>'4.069.872 jiwa'],
        	['nama'=>'Kabupaten Bandung Barat','nama_bupati'=>'Drs. H. Abu Bakar, M.Si.','luas'=>'1.311,31 km2','kepadatan'=>'1.167,59 jiwa/km2','populasi'=>'1.531.072 jiwa'],
        	['nama'=>'Kabupaten Bogor','nama_bupati'=>'Hj. Nurhayanti, S.H., M.M., M.Si.','luas'=>'2.071,21 km2','kepadatan'=>'2.303,93 jiwa/km2','populasi'=>'4.771.932 jiwa'],
        	['nama'=>'Kabupaten Ciamis','nama_bupati'=>'Drs. H. Iing Syam Arifin, M.M','luas'=>'2.556,75 km2','kepadatan'=>'691,71 jiwa/km2','populasi'=>'1.768.532 jiwa'],
        	['nama'=>'Kabupaten Cirebon','nama_bupati'=>'Dr. H. Sunjaya Purwadi S., Drs. M.M., M.Si','luas'=>'990,36 km2','kepadatan'=>'21.000 jiwa/km2','populasi'=>'2.126.179 jiwa'],
        	['nama'=>'Kabupaten Garut','nama_bupati'=>'H. Rudy Gunawan, S.H., M.H.','luas'=>'3.065,19 km2','kepadatan'=>'  831,51 jiwa/km2','populasi'=>' 2.548.723 jiwa'],
        	['nama'=>'Kabupaten Cianjur','nama_bupati'=>'Drs. H. Irvan Rivano Muchtar, S.Ip, SH, M.Si','luas'=>'3.432,96 km2','kepadatan'=>'626,03 jiwa/km2','populasi'=>'2.149.121 jiwa'],
        	['nama'=>'Kabupaten Indramayu','nama_bupati'=>'Hj. Anna Sophana','luas'=>'2.000,99 km2','kepadatan'=>'897,24 jiwa/km2','populasi'=>'1.795.372 jiwa'],
        	['nama'=>'Kabupaten Pangandaran','nama_bupati'=>'H. Jeje Wiradinata','luas'=>'1.680 km2','kepadatan'=>'27.000 jiwa/km2','populasi'=>'450.658 jiwa'],
        	['nama'=>'Kabupaten Sukabumi','nama_bupati'=>'Drs. H. Marwan Hamami, M.M.','luas'=>'4.161,00 km2','kepadatan'=>'5.900 jiwa/km2','populasi'=>'2.434.221 jiwa']
        ];
    	DB::table('kabupatens')->insert($table);
    }
}
