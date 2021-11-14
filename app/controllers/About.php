<?php
class About extends Controller {
    public function __construct()
    {
    if($_SESSION['session_login'] != 'sudah_login') {
    Flasher::setMessage('Login','Tidak ditemukan.','danger');
    header('location: '. base_url . '/login');
    exit;
    }
    }

    public function index()
{
$data['title'] = 'About Me';
$data['nama1'] = 'Pradana Dike Rohmat Izzulhaq';
$data['nama2'] = 'Setyawan Adi Prayogi';
$data['nim1'] = '18083000200';
$data['nim2'] = '18083000110';
$data['alamat'] = 'Malang';
$data['no_hp'] = '08123745638';

$this->view('templates/header', $data);
$this->view('templates/sidebar', $data);
$this->view('about/index', $data);
$this->view('templates/footer');
}
}