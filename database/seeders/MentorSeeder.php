<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mentors')->insert([
            [
                 'nip_mentor' => '1978151939',
                 'nama' => 'Dra. RR. Ratih Herawati, M.M.',
                 'nomor_telp' => '082934743922',
                 'email' => 'ratiherawati@gmail.com',
                 'alamat' => 'Jl. Petek no.9, Semarang',
                 'kode_instansi' => 'Disdik',
                 'jabatan'=>'Kepala Bidang Pembinaan Paud dan Pnf',
                 'user_id' =>1, 
            ],
            [
                'nip_mentor' => '1980013492',
                'nama' => 'Prananing Nusadhani, S.T., M.T.',
                'nomor_telp' => '082365089672',
                'email' => 'nusadhani@gmail.com',
                'alamat' => 'Jl. Gagak No. 2, Semarang',
                'kode_instansi' => 'Disperkim',
                'jabatan'=>'Kepala Bidang Pertamanan dan Pemakaman',
                'user_id' => 2, // Gantilah dengan user_id yang valid
            ],
            [
                'nip_mentor' => '1982015786',
                'nama' => 'Rochmad Wahyudi, S.E., S.T., M.M.',
                'nomor_telp' => '08137893024',
                'email' => 'rwahyudi@gmail.com',
                'alamat' => 'Jl. Erlangga No. 2, Semarang',
                'kode_instansi' => 'Disperkim',
                'jabatan'=>'Kepala Bidang Permukiman',
                'user_id' => 3, // Gantilah dengan user_id yang valid
            ],
            [
                'nip_mentor' => '1979026152',
                 'nama' => 'Mochamad Hisam Ashari, S.T., M.T.',
                 'nomor_telp' => '082273998793',
                 'email' => 'mhashari@gmail.com',
                 'alamat' => 'Jl. Madukoro no 9, Semarang',
                 'kode_instansi' => 'DPU',
                 'jabatan'=>'Kepala Bidang Sumber Daya Air dan Drainase',
                'user_id' => 4, // Gantilah dengan user_id yang valid
             ],
        ]);
    }
}
