<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = 
        [
            'dataKamar' => $this->objKamar->getAllKamar()->getResult(),
        ];

        return view('pages/homepage',$data);
    }
}
