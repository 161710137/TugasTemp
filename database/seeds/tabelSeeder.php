<?php

use Illuminate\Database\Seeder;

class tabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
         {
    	    $pw = [
                ["nis"=>"212","nama"=>"pawit","tempat_lahir"=>"bandung","tanggal_lahir"=>"2001-01-18","alamat"=>"batubau","cita"=>"sukses","hobi"=>"badminton","gambar"=>"dede.jpg"]
            ];
        DB::table('siswas')->insert($pw);
    
    }
}
 
   