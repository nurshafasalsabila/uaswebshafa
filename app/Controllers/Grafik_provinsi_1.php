<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_provinsi_1 extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_provinsi_1'
        ];

        return view('grafik_provinsi_1', $data);
    }

    public function grafik_provinsi_1_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_provinsi_1_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$provinsi = $r->provinsi;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"provinsi" => $provinsi,
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