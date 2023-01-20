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

    function admin()
    {
        return view('adminpages/adm_home');
    }
}
