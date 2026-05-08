<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Amezora komik'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Amezora komik'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | Amezora komik',
            'alamat' => [['jalan' => 'Jl. Raya No. 123',
                'kota' => 'Karawang'
                ]
                
            ],
        ];
        echo view('pages/contact', $data);
    }
}