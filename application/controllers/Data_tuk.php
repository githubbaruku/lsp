<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_tuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Data_tuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/data_tuk/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/data_tuk/index/';
            $config['first_url'] = base_url() . 'index.php/data_tuk/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Data_tuk_model->total_rows($q);
        $data_tuk = $this->Data_tuk_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'data_tuk_data' => $data_tuk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','data_tuk/tbl_data_tuk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Data_tuk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'kode' => $row->kode,
		'nama' => $row->nama,
		'jenis' => $row->jenis,
		'penanggung_jawab' => $row->penanggung_jawab,
		'alamat' => $row->alamat,
	    );
            $this->template->load('template','data_tuk/tbl_data_tuk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_tuk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('data_tuk/create_action'),
	    'no' => set_value('no'),
	    'kode' => set_value('kode'),
	    'nama' => set_value('nama'),
	    'jenis' => set_value('jenis'),
	    'penanggung_jawab' => set_value('penanggung_jawab'),
	    'alamat' => set_value('alamat'),
	);
        $this->template->load('template','data_tuk/tbl_data_tuk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode' => $this->input->post('kode',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'penanggung_jawab' => $this->input->post('penanggung_jawab',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Data_tuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('data_tuk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Data_tuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('data_tuk/update_action'),
		'no' => set_value('no', $row->no),
		'kode' => set_value('kode', $row->kode),
		'nama' => set_value('nama', $row->nama),
		'jenis' => set_value('jenis', $row->jenis),
		'penanggung_jawab' => set_value('penanggung_jawab', $row->penanggung_jawab),
		'alamat' => set_value('alamat', $row->alamat),
	    );
            $this->template->load('template','data_tuk/tbl_data_tuk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_tuk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'kode' => $this->input->post('kode',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'penanggung_jawab' => $this->input->post('penanggung_jawab',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Data_tuk_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('data_tuk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Data_tuk_model->get_by_id($id);

        if ($row) {
            $this->Data_tuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('data_tuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('data_tuk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode', 'kode', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('penanggung_jawab', 'penanggung jawab', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Data_tuk.php */
/* Location: ./application/controllers/Data_tuk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-01 16:13:25 */
/* http://harviacode.com */