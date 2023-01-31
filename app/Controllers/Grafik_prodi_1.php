<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Grafik_model;

class Grafik_prodi_1 extends BaseController
{
    public function index()
    {
        $data = [
            'location'     => 'grafik_prodi_1'
        ];

        return view('grafik_prodi_1', $data);
    }

    public function grafik_prodi_1_json(){  
        $m_grafik        = new Grafik_model();
        $rs = $m_grafik->grafik_prodi_1_json();
        $data = array();
		$no = 1;
		
		foreach($rs as $r) {	
		$prodi = $r->prodi;  
		$jumlah = $r->jumlah;
		
			 $data[] = array(
				"prodi" => $prodi,
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