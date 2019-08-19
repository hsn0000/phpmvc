<?php

 class About extends Controller {
     public function index($nama = 'husin', $pekerjaan = 'newbie') {

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
     }

     public function page() {
         $data['judul'] = 'Page';
         $this->view('templates/header');
         $this->view ('about/page', $data);
         $this->view('templates/footer');
     }   
 }