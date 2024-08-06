<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Skema_model');

        $this->load->helper('url');
    }

    public function index()
    {
        // Data yang ingin dikirim ke view
        // $data = array(
        //     'title' => 'Home Page',
        //     'content' => 'Welcome to the Home page!'
        // );

        // Muat view 'home_view' dan kirimkan data
        $data['data'] = $this->Skema_model->get_all();
        $this->load->view('home_view', $data);
    }
}
