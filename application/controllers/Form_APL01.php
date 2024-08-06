<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Form_APL01 extends CI_Controller
{
    public function index()
    {
        $this->template->load('template', 'form_apl01');
    }
}
