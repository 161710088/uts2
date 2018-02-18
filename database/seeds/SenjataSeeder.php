<?php

use Illuminate\Database\Seeder;

class SenjataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        		    ['nama'=>'Rencong','asal'=>'Aceh','material'=>'Baja','fungsi'=>'Perlindungan dari pria bangsawan','sejarah'=>'Rencong adalah sebilah pedang pendek dengan gagang atau pegangan yang di buat melengkung 90 derajat.'],
                ['nama'=>'Piso Gaja Dompak','asal'=>'Sumatra Utara','material'=>'Baja','fungsi'=>'Perlindungan diri','sejarah'=>'Dahlunya digunakan secara terbatas pada kalangan raja-raja Batak '],
                ['nama'=>'Pedang Jenawi','asal'=>'Riau','material'=>'Baja','fungsi'=>'Sarana perlindungan diri dan alat menyerang lawan','sejarah'=>'Pedang ini adalah sebuah pedang panjang yang bilahnya terbuat dari baja dan bentuknya lurus meruncing di bagian ujung'],
                ['nama'=>'Karih','asal'=>'Sumatra Barat','material'=>'Baja','fungsi'=>'Perlindugan diri dari musuh atau binatangb buas','sejarah'=>'karih adalah sebuah senjata berbentuk seperti keris tapi tidak memiliki lengkungan seperti keris di jawa'],
                ['nama'=>'Tumbuk Lado','asal'=>'Jambi','material'=>'Baja','fungsi'=>'Untuk pertahanan diri','sejarah'=>'Senjata ini mirip dengan senjata khas Riau bedanya senjata Badik Tumbuk Lado lebih kecil dan memiliki ukiran yang lebih banyak']
			];
  	DB::table('senjatas')->insert($table);
    }
}
