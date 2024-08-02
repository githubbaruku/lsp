<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pilih_skema extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Pilih_skema_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pilih_skema/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pilih_skema/index/';
            $config['first_url'] = base_url() . 'index.php/pilih_skema/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pilih_skema_model->total_rows($q);
        $pilih_skema = $this->Pilih_skema_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pilih_skema_data' => $pilih_skema,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','pilih_skema/tbl_pilih_skema_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pilih_skema_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'skema' => $row->skema,
		'biaya' => $row->biaya,
	    );
            $this->template->load('template','pilih_skema/tbl_pilih_skema_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pilih_skema'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pilih_skema/create_action'),
	    'no' => set_value('no'),
	    'skema' => set_value('skema'),
	    'biaya' => set_value('biaya'),
	);
        $this->template->load('template','pilih_skema/tbl_pilih_skema_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'skema' => $this->input->post('skema',TRUE),
		'biaya' => $this->input->post('biaya',TRUE),
	    );

            $this->Pilih_skema_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('pilih_skema'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pilih_skema_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pilih_skema/update_action'),
		'no' => set_value('no', $row->no),
		'skema' => set_value('skema', $row->skema),
		'biaya' => set_value('biaya', $row->biaya),
	    );
            $this->template->load('template','pilih_skema/tbl_pilih_skema_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pilih_skema'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'skema' => $this->input->post('skema',TRUE),
		'biaya' => $this->input->post('biaya',TRUE),
	    );

            $this->Pilih_skema_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pilih_skema'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pilih_skema_model->get_by_id($id);

        if ($row) {
            $this->Pilih_skema_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pilih_skema'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pilih_skema'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('skema', 'skema', 'trim|required');
	$this->form_validation->set_rules('biaya', 'biaya', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pilih_skema.php */
/* Location: ./application/controllers/Pilih_skema.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-01 16:37:06 */
/* http://harviacode.com */