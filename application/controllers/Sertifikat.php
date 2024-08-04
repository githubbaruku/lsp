<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sertifikat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Sertifikat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/sertifikat/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/sertifikat/index/';
            $config['first_url'] = base_url() . 'index.php/sertifikat/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Sertifikat_model->total_rows($q);
        $sertifikat = $this->Sertifikat_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'sertifikat_data' => $sertifikat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','sertifikat/tbl_sertifikat_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Sertifikat_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'sertifikat' => $row->sertifikat,
	    );
            $this->template->load('template','sertifikat/tbl_sertifikat_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sertifikat'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('sertifikat/create_action'),
	    'no' => set_value('no'),
	    'sertifikat' => set_value('sertifikat'),
	);
        $this->template->load('template','sertifikat/tbl_sertifikat_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'sertifikat' => $this->input->post('sertifikat',TRUE),
	    );

            $this->Sertifikat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('sertifikat'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sertifikat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('sertifikat/update_action'),
		'no' => set_value('no', $row->no),
		'sertifikat' => set_value('sertifikat', $row->sertifikat),
	    );
            $this->template->load('template','sertifikat/tbl_sertifikat_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sertifikat'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'sertifikat' => $this->input->post('sertifikat',TRUE),
	    );

            $this->Sertifikat_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sertifikat'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sertifikat_model->get_by_id($id);

        if ($row) {
            $this->Sertifikat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sertifikat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sertifikat'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('sertifikat', 'sertifikat', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Sertifikat.php */
/* Location: ./application/controllers/Sertifikat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-04 06:17:54 */
/* http://harviacode.com */