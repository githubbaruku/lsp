<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Skema extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Skema_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/skema/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/skema/index/';
            $config['first_url'] = base_url() . 'index.php/skema/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Skema_model->total_rows($q);
        $skema = $this->Skema_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'skema_data' => $skema,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','skema/tbl_skema_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Skema_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_skema' => $row->id_skema,
		'nama_skema' => $row->nama_skema,
		'gambar_skema' => $row->gambar_skema,
		'kategori_skema' => $row->kategori_skema,
		'jenis_skema' => $row->jenis_skema,
		'deskripsi' => $row->deskripsi,
		'kode_skema' => $row->kode_skema,
		'unit_kompetensi' => $row->unit_kompetensi,
		'harga_skema' => $row->harga_skema,
	    );
            $this->template->load('template','skema/tbl_skema_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('skema'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('skema/create_action'),
	    'id_skema' => set_value('id_skema'),
	    'nama_skema' => set_value('nama_skema'),
	    'gambar_skema' => set_value('gambar_skema'),
	    'kategori_skema' => set_value('kategori_skema'),
	    'jenis_skema' => set_value('jenis_skema'),
	    'deskripsi' => set_value('deskripsi'),
	    'kode_skema' => set_value('kode_skema'),
	    'unit_kompetensi' => set_value('unit_kompetensi'),
	    'harga_skema' => set_value('harga_skema'),
	);
        $this->template->load('template','skema/tbl_skema_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_skema' => $this->input->post('nama_skema',TRUE),
		'gambar_skema' => $this->input->post('gambar_skema',TRUE),
		'kategori_skema' => $this->input->post('kategori_skema',TRUE),
		'jenis_skema' => $this->input->post('jenis_skema',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_skema' => $this->input->post('kode_skema',TRUE),
		'unit_kompetensi' => $this->input->post('unit_kompetensi',TRUE),
		'harga_skema' => $this->input->post('harga_skema',TRUE),
	    );

            $this->Skema_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('skema'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Skema_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('skema/update_action'),
		'id_skema' => set_value('id_skema', $row->id_skema),
		'nama_skema' => set_value('nama_skema', $row->nama_skema),
		'gambar_skema' => set_value('gambar_skema', $row->gambar_skema),
		'kategori_skema' => set_value('kategori_skema', $row->kategori_skema),
		'jenis_skema' => set_value('jenis_skema', $row->jenis_skema),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
		'kode_skema' => set_value('kode_skema', $row->kode_skema),
		'unit_kompetensi' => set_value('unit_kompetensi', $row->unit_kompetensi),
		'harga_skema' => set_value('harga_skema', $row->harga_skema),
	    );
            $this->template->load('template','skema/tbl_skema_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('skema'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_skema', TRUE));
        } else {
            $data = array(
		'nama_skema' => $this->input->post('nama_skema',TRUE),
		'gambar_skema' => $this->input->post('gambar_skema',TRUE),
		'kategori_skema' => $this->input->post('kategori_skema',TRUE),
		'jenis_skema' => $this->input->post('jenis_skema',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'kode_skema' => $this->input->post('kode_skema',TRUE),
		'unit_kompetensi' => $this->input->post('unit_kompetensi',TRUE),
		'harga_skema' => $this->input->post('harga_skema',TRUE),
	    );

            $this->Skema_model->update($this->input->post('id_skema', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('skema'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Skema_model->get_by_id($id);

        if ($row) {
            $this->Skema_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('skema'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('skema'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_skema', 'nama skema', 'trim|required');
	$this->form_validation->set_rules('gambar_skema', 'gambar skema', 'trim|required');
	$this->form_validation->set_rules('kategori_skema', 'kategori skema', 'trim|required');
	$this->form_validation->set_rules('jenis_skema', 'jenis skema', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('kode_skema', 'kode skema', 'trim|required');
	$this->form_validation->set_rules('unit_kompetensi', 'unit kompetensi', 'trim|required');
	$this->form_validation->set_rules('harga_skema', 'harga skema', 'trim|required|numeric');

	$this->form_validation->set_rules('id_skema', 'id_skema', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Skema.php */
/* Location: ./application/controllers/Skema.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-05 15:23:42 */
/* http://harviacode.com */