<?php

use Illuminate\Database\Seeder;

class PulauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table =[
        		    ['nama'=>'Sulawesi','koordinat'=>'02*LU 121*BT/2*LS 121*BT','luas'=>'180,6807 km2','kepulauan'=>'Kepulauan Sunda Besar','puncak_tertinggi'=>'Rantemario 3.478 meter'],
                ['nama'=>'Jawa','koordinat'=>'7*30"10"LS,111*15"47"BT','luas'=>'126.700 km2','kepulauan'=>'Kepulauan Sunda Besar','puncak_tertinggi'=>'Semeru 3.676 meter'],
                ['nama'=>'Sumatra','koordinat'=>'0*00"LU 102*00"BT/0*LU 102*BT','luas'=>'473.481 km2','kepulauan'=>'Kepulauan Sunda Besar','puncak_tertinggi'=>'Kerinci 3.805 meter'],
                ['nama'=>'Kalimantan','koordinat'=>'1*00"LU 114*00"BT / 1*LU 114*BT','luas'=>'743.330 KM2','kepulauan'=>'Kepulauan Sunda Besar','puncak_tertinggi'=>'Kinabalu 4.095 meter'],
                ['nama'=>'Papua','koordinat'=>'5*20"LU 141*36"BT / 5,333*LS 141,6*BT','luas'=>'785.753 km2','kepulauan'=>'Kepulauan Melayu','puncak_tertinggi'=>'Puncak Jaya 4.884 meter']
			];
  	DB::table('pulaus')->insert($table);
    }
}
