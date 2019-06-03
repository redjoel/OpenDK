<?php

use Illuminate\Database\Seeder;

class DasDataUmumTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('das_data_umum')->delete();

        \DB::table('das_data_umum')->insert(array (
            0 =>
            array (
                'id' => 1,
                'profil_id' => 1,
                'kecamatan_id' => '640720',
                'tipologi' => 'Kecamatan terpencil.',
                'ketinggian' => 300,
                'luas_wilayah' => 0.0,
                'jumlah_penduduk' => 0,
                'jml_laki_laki' => 0,
                'jml_perempuan' => 0,
                'bts_wil_utara' => 'Barong Tongkok',
                'bts_wil_timur' => 'Damai',
                'bts_wil_selatan' => 'Melak',
                'bts_wil_barat' => 'Mook Manaar Bulatn',
                'jml_puskesmas' => 0,
                'jml_puskesmas_pembantu' => 0,
                'jml_posyandu' => 0,
                'jml_pondok_bersalin' => 0,
                'jml_paud' => 0,
                'jml_sd' => 0,
                'jml_smp' => 0,
                'jml_sma' => 0,
                'jml_masjid_besar' => 0,
                'jml_mushola' => 1,
                'jml_gereja' => 0,
                'jml_pasar' => 0,
                'jml_balai_pertemuan' => 0,
                'kepadatan_penduduk' => 0,
                'embed_peta' => NULL,
                'created_at' => '2019-05-03 10:33:43',
                'updated_at' => '2019-05-19 01:35:15',
            ),
        ));


    }
}
