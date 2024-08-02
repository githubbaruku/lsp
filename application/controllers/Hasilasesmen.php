<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasilasesmen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Hasilasesmen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/hasilasesmen/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/hasilasesmen/index/';
            $config['first_url'] = base_url() . 'index.php/hasilasesmen/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Hasilasesmen_model->total_rows($q);
        $hasilasesmen = $this->Hasilasesmen_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'hasilasesmen_data' => $hasilasesmen,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','hasilasesmen/tbl_hasilasesmen_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Hasilasesmen_model->get_by_id($id);
        if ($row) {
            $data = array(
		'no' => $row->no,
		'hasil_asesmen' => $row->hasil_asesmen,
	    );
            $this->template->load('template','hasilasesmen/tbl_hasilasesmen_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilasesmen'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('hasilasesmen/create_action'),
	    'no' => set_value('no'),
	    'hasil_asesmen' => set_value('hasil_asesmen'),
	);
        $this->template->load('template','hasilasesmen/tbl_hasilasesmen_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'hasil_asesmen' => $this->input->post('hasil_asesmen',TRUE),
	    );

            $this->Hasilasesmen_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('hasilasesmen'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Hasilasesmen_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('hasilasesmen/update_action'),
		'no' => set_value('no', $row->no),
		'hasil_asesmen' => set_value('hasil_asesmen', $row->hasil_asesmen),
	    );
            $this->template->load('template','hasilasesmen/tbl_hasilasesmen_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilasesmen'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
		'hasil_asesmen' => $this->input->post('hasil_asesmen',TRUE),
	    );

            $this->Hasilasesmen_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('hasilasesmen'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Hasilasesmen_model->get_by_id($id);

        if ($row) {
            $this->Hasilasesmen_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('hasilasesmen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('hasilasesmen'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('hasil_asesmen', 'hasil asesmen', 'trim|required');

	$this->form_validation->set_rules('no', 'no', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Hasilasesmen.php */
/* Location: ./application/controllers/Hasilasesmen.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-02 03:56:27 */
/* http://harviacode.com */