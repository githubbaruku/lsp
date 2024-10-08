<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Pembayaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pembayaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pembayaran/index/';
            $config['first_url'] = base_url() . 'index.php/pembayaran/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pembayaran_model->total_rows($q);
        $pembayaran = $this->Pembayaran_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pembayaran_data' => $pembayaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','pembayaran/tbl_pembayaran_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'skema' => $row->skema,
		'jumlah' => $row->jumlah,
		'nama' => $row->nama,
		'email' => $row->email,
	    );
            $this->template->load('template','pembayaran/tbl_pembayaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pembayaran/create_action'),
	    'id' => set_value('id'),
	    'skema' => set_value('skema'),
	    'jumlah' => set_value('jumlah'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	);
        $this->template->load('template','pembayaran/tbl_pembayaran_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'skema' => $this->input->post('skema',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Pembayaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pembayaran/update_action'),
		'id' => set_value('id', $row->id),
		'skema' => set_value('skema', $row->skema),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
	    );
            $this->template->load('template','pembayaran/tbl_pembayaran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'skema' => $this->input->post('skema',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

            $this->Pembayaran_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pembayaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembayaran_model->get_by_id($id);

        if ($row) {
            $this->Pembayaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pembayaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembayaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('skema', 'skema', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pembayaran.php */
/* Location: ./application/controllers/Pembayaran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-09 19:04:58 */
/* http://harviacode.com */