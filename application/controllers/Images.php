<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Images extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Images_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/images/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/images/index/';
            $config['first_url'] = base_url() . 'index.php/images/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Images_model->total_rows($q);
        $images = $this->Images_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'images_data' => $images,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','images/images_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Images_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'image_name' => $row->image_name,
		'image_path' => $row->image_path,
	    );
            $this->template->load('template','images/images_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('images'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('images/create_action'),
	    'id' => set_value('id'),
	    'image_name' => set_value('image_name'),
	    'image_path' => set_value('image_path'),
	);
        $this->template->load('template','images/images_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'image_name' => $this->input->post('image_name',TRUE),
		'image_path' => $this->input->post('image_path',TRUE),
	    );

            $this->Images_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('images'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Images_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('images/update_action'),
		'id' => set_value('id', $row->id),
		'image_name' => set_value('image_name', $row->image_name),
		'image_path' => set_value('image_path', $row->image_path),
	    );
            $this->template->load('template','images/images_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('images'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'image_name' => $this->input->post('image_name',TRUE),
		'image_path' => $this->input->post('image_path',TRUE),
	    );

            $this->Images_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('images'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Images_model->get_by_id($id);

        if ($row) {
            $this->Images_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('images'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('images'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('image_name', 'image name', 'trim|required');
	$this->form_validation->set_rules('image_path', 'image path', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Images.php */
/* Location: ./application/controllers/Images.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-04 06:21:04 */
/* http://harviacode.com */