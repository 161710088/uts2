<?php

use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $table =[
        		['nama'=>'Kota Ambon','nama_walkot'=>'Richard Louhenapessy','hari_jadi'=>'1575-10-7','julukan'=>'Pusat pariwisata','sejarah'=>'Asal-usul dari istilah Ambon tidak mudah ditentukan. Menurut keterangan yang diberikan penduduk setempat, istilah tersebut berasal dari kata ombong yang merupakan bentukan lokal dari kata embun'],
        		['nama'=>'Kota Balikpapan','nama_walkot'=>'Rizal Effendi','hari_jadi'=>'1897-02-10','julukan'=>'Kota Minyak ','sejarah'=>'Adanya 10 keping papan yang kembali ke Jenebora dari 1.000 keping yang diminta oleh Sultan Kutai sebagai sumbangan bahan bangunan untuk pembangunan Istana Baru Kutai Lama. Kesepuluh papan yang balik tersebut disebut oleh orang Kutai Balikpapan Tu. Sehingga wilayah sepanjang Teluk Balikpapan, tepatnya di Jenebora disebut Balikpapan.'],
        		['nama'=>'Kota Banda Aceh','nama_walkot'=>'Kota Banda Aceh','hari_jadi'=>'1205-04-22','julukan'=>'kota Islam yang paling tua di Asia Tenggara','sejarah'=>'Banda Aceh sebagai ibu kota Kesultanan Aceh Darussalam berdiri pada abad ke-14. Kesultanan Aceh Darussalam dibangun di atas puing-puing kerajaan-kerajaan Hindu dan Budha yang pernah ada sebelumnya, seperti Kerajaan Indra Purba, Kerajaan Indra Purwa, Kerajaan Indra Patra, dan Kerajaan Indrapura (Indrapuri). Dari batu nisan Sultan Firman Syah, salah seorang sultan yang pernah memerintah Kesultanan Aceh, didapat keterangan bahwa Kesultanan Aceh beribukota di Kutaraja (Banda Aceh).'],
        		['nama'=>'Kota Bandar Lampung','nama_walkot'=>' Drs. H. Herman H.N.','hari_jadi'=>'1682-06-17','julukan'=>'kota terbesar dan terpadat ketiga di Pulau Sumatera ','sejarah'=>'Secara geografis, Telukbetung berada di selatan Tanjungkarang, karena itu di marka jalan, Telukbetung yang dijadikan patokan batas jarak ibukota provinsi. Telukbetung, Tanjungkarang dan Panjang (serta Kedaton) merupakan wilayah tahun 1984 digabung dalam satu kesatuan Kota Bandar Lampung, mengingat ketiganya sudah tidak ada batas pemisahan yang jelas.'],
        		['nama'=>'Kota Bandung','nama_walkot'=>'Muhammad Ridwan Kamil, S.T., M.U.D.','hari_jadi'=>'1810-09-25','julukan'=>'kota kembang','sejarah'=>'Secara resmi dimulai pada masa pemerintahan kolonial Hindia Belanda pada abad ke-19. Kota Bandung didirikan oleh dan atas kehendak(kebijakan) Bupati Bandung ke-6, R.A.Wiranatakusumah 2 (1794-1829).']
			];
  	DB::table('kotas')->insert($table);
    }
}
