<?php

use Illuminate\Database\Seeder;

class DasDataDesaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('das_data_desa')->delete();

        \DB::table('das_data_desa')->insert(array (
            0 =>
            array (
                'id' => 1,
                'desa_id' => ' 6407202007',
                'kecamatan_id' => '640720',
                'nama' => 'SEKOLAQ DARAT',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'desa_id' => ' 6407202008',
                'kecamatan_id' => '640720',
                'nama' => 'LELENG',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'desa_id' => ' 6407202001',
                'kecamatan_id' => '640720',
                'nama' => 'SEKOLAQ MULIAQ',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'desa_id' => ' 6407202002',
                'kecamatan_id' => '640720',
                'nama' => 'SEKOLAQ MULIAQ',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'desa_id' => ' 6407202003',
                'kecamatan_id' => '640720',
                'nama' => 'SEKOLAQ ODAY',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'desa_id' => ' 6407202004',
                'kecamatan_id' => '640720',
                'nama' => 'SRI MULYO',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'desa_id' => ' 6407202005',
                'kecamatan_id' => '640720',
                'nama' => 'SUMBER BANGUN',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'desa_id' => ' 6407202006',
                'kecamatan_id' => '640720',
                'nama' => 'SUMBER REJO',
                'website' => NULL,
                'luas_wilayah' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));


    }
}
