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
$data['title'] = 'Halaman AboutMe';
$data['nama'] = 'Pradana Dike';
$data['alamat'] = 'Ga punya lagi nganggur';
$data['no_hp'] = '08123745638';

$this->view('templates/header', $data);
$this->view('templates/sidebar', $data);
$this->view('about/index', $data);
$this->view('templates/footer');
}
}