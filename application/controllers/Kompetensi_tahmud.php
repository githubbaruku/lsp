<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kompetensi_tahmud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Kompetensi_tahmud_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/kompetensi_tahmud/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/kompetensi_tahmud/index/';
            $config['first_url'] = base_url() . 'index.php/kompetensi_tahmud/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Kompetensi_tahmud_model->total_rows($q);
        $kompetensi_tahmud = $this->Kompetensi_tahmud_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kompetensi_tahmud_data' => $kompetensi_tahmud,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','kompetensi_tahmud/tbl_kompetensi_tahmud_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kompetensi_tahmud_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kode_kompetensi' => $row->kode_kompetensi,
		'judul_kompetensi' => $row->judul_kompetensi,
	    );
            $this->template->load('template','kompetensi_tahmud/tbl_kompetensi_tahmud_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kompetensi_tahmud'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kompetensi_tahmud/create_action'),
	    'id' => set_value('id'),
	    'kode_kompetensi' => set_value('kode_kompetensi'),
	    'judul_kompetensi' => set_value('judul_kompetensi'),
	);
        $this->template->load('template','kompetensi_tahmud/tbl_kompetensi_tahmud_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_kompetensi' => $this->input->post('kode_kompetensi',TRUE),
		'judul_kompetensi' => $this->input->post('judul_kompetensi',TRUE),
	    );

            $this->Kompetensi_tahmud_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('kompetensi_tahmud'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kompetensi_tahmud_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kompetensi_tahmud/update_action'),
		'id' => set_value('id', $row->id),
		'kode_kompetensi' => set_value('kode_kompetensi', $row->kode_kompetensi),
		'judul_kompetensi' => set_value('judul_kompetensi', $row->judul_kompetensi),
	    );
            $this->template->load('template','kompetensi_tahmud/tbl_kompetensi_tahmud_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kompetensi_tahmud'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kode_kompetensi' => $this->input->post('kode_kompetensi',TRUE),
		'judul_kompetensi' => $this->input->post('judul_kompetensi',TRUE),
	    );

            $this->Kompetensi_tahmud_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kompetensi_tahmud'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kompetensi_tahmud_model->get_by_id($id);

        if ($row) {
            $this->Kompetensi_tahmud_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kompetensi_tahmud'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kompetensi_tahmud'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_kompetensi', 'kode kompetensi', 'trim|required');
	$this->form_validation->set_rules('judul_kompetensi', 'judul kompetensi', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kompetensi_tahmud.php */
/* Location: ./application/controllers/Kompetensi_tahmud.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-08 18:14:02 */
/* http://harviacode.com */