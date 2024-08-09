<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile_user extends CI_Controller
{
    public function index()
    {
        $this->template->load('template', 'profile_user');
    }
}
