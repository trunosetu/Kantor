<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' =>'alden',
            'tanggal' =>'2022-03-04',
            'alamat'=>'jl.menur',
            'jabatan'=>'komisar',
            'status'=>'aktif'
        ]);
        Pegawai::create([
            'nama' =>'reza',
            'tanggal' =>'2020-03-04',
            'alamat'=>'jl.kijang',
            'jabatan'=>'officer',
            'status'=>'aktif'
        ]);
        Pegawai::create([
            'nama' =>'wardi',
            'tanggal' =>'2018-03-04',
            'alamat'=>'jl.bethelm',
            'jabatan'=>'operator',
            'status'=>'aktif'
        ]);
        Pegawai::create([
            'nama' =>'sia',
            'tanggal' =>'2019-03-04',
            'alamat'=>'jl.amijaya 3',
            'jabatan'=>'operator',
            'status'=>'cuti'
        ]);
        Pegawai::create([
            'nama' =>'endro',
            'tanggal' =>'2017-03-04',
            'alamat'=>'jl.dovahkin 44',
            'jabatan'=>'operator',
            'status'=>'aktif'
        ]);

}
}