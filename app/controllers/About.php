<?php

class About extends Controller{
    public function index($nama = 'Dimas Setiadi',$pekerjaan = 'Seorang Gamers' )
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'page';
        $this->view('../templates/header', $data);
        $this->view('../about/page');
        $this->view('../templates/footer');
    }
}