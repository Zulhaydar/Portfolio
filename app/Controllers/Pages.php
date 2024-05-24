<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | My website'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About me | My website'
        ];
        
        return view('pages/about', $data);
        
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | My website',
            'alamat' => [
                [   
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Cibatu Nagrak, Desa Nagrak, RT 01/01, No.12, Kec. Cisaat, Kab. Sukabumi 43152, Jawa Barat',
                    'kota' => 'Sukabumi'
                ],
                [
                    'tipe' => 'Universitas Muhammadiyah Sukabumi',
                    'alamat' => 'Jl. R. Syamsudin, S.H. No. 50, Cikole, Kec. Cikole, Kota Sukabumi, Jawa Barat 43113',
                    'kota' => 'Sukabumi'
                ]
            ]


        ];
        return view('pages/contact', $data);
    }
}
