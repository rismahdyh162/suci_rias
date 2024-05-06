<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/index');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function registrasi()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SC Rias Pengantin';
            $this->load->view('auth/registrasi');
        } else {
            echo 'data berhasil ditambahkan!';
        }
    }


    //page user
    public function index2()
    {
        $this->load->view('user/index2');
    }

    public function package()
    {
        $this->load->view('user/package');
    }

    public function galeri()
    {
        $this->load->view('user/galeri');
    }

    public function faq()
    {
        $this->load->view('user/faq');
    }

    public function pesanan()
    {
        $this->load->view('user/pesanan');
    }

    public function profil()
    {
        $this->load->view('user/profil');
    }

    public function reset_pw()
    {
        $this->load->view('user/reset_pw');
    }

    public function riwayat_pesan()
    {
        $this->load->view('user/riwayat_pesan');
    }

    public function verif_pesan()
    {
        $this->load->view('user/verif_pesan');
    }

    //page admin
    public function index3()
    {
        $this->load->view('admin/index3');
    }

    public function gallery()
    {
        $this->load->view('admin/pages/gallery');
    }

    public function data_pesanan()
    {
        $this->load->view('admin/pages/data_pesanan');
    }
}
