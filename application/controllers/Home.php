<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // public function __construct() {
    //     parent::__construct();
    //     Load any necessary models, libraries, or helpers here
    //     $this->load->model('example_model');
    //     $this->load->helper('url');
    // }

    public function index()
    {
        // Data yang ingin dikirim ke view
        // $data = array(
        //     'title' => 'Home Page',
        //     'content' => 'Welcome to the Home page!'
        // );

        // Muat view 'home_view' dan kirimkan data
        $this->load->view('home_view');
    }
}
