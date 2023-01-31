<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_angkatan_1 extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_angkatan_1'
        ];

        return view('grafik_angkatan_1', $data);
    }

    public function grafik_angkatan_1_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_angkatan_1_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$tgl_masuk = $r->tgl_masuk;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"tgl_masuk" => $tgl_masuk,
                "jumlah" => $jumlah
			 );
			 $no++;
		}

		$output = array(
			   "data" => $data
		  );
		echo json_encode($data);
	}


}