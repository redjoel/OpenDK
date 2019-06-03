<?php

use Illuminate\Database\Seeder;

class DasProfilTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('das_profil')->delete();

        \DB::table('das_profil')->insert(array (
            0 =>
            array (
                'id' => 1,
                'provinsi_id' => '64',
                'kabupaten_id' => '6407',
                'kecamatan_id' => '640720',
                'alamat' => 'Jl. Nihin RT.005 Sekolaq Darat',
                'kode_pos' => '75764',
                'telepon' => '021-2345234',
                'email' => 'admin@mail.com',
                'tahun_pembentukan' => 1990,
                'dasar_pembentukan' => 'PEREGUB No 4 1990',
                'nama_camat' => 'Suwila Erpina S.P, M.Si',
                'sekretaris_camat' => 'Drs. Zaenal Abidin',
                'kepsek_pemerintahan_umum' => 'Musyayad, S.Sos',
                'kepsek_kesejahteraan_masyarakat' => 'Suhartono, S.Sos',
                'kepsek_pemberdayaan_masyarakat' => 'Asrarudin, SE',
                'kepsek_pelayanan_umum' => 'Masturi, ST',
                'kepsek_trantib' => 'Mastur Idris, SH',
                'file_struktur_organisasi' => 'Lighthouse.jpg',
                'file_logo' => NULL,
                'visi' => NULL,
                'misi' => NULL,
                'created_at' => '2018-02-03 06:57:26',
                'updated_at' => '2018-07-19 01:29:57',
            ),
        ));


    }
}
