<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Dashboard_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/dashboard/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/dashboard/index/';
            $config['first_url'] = base_url() . 'index.php/dashboard/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Dashboard_model->total_rows($q);
        $dashboard = $this->Dashboard_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dashboard_data' => $dashboard,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','dashboard/tbl_dashboard_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dashboard_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'title' => $row->title,
		'description' => $row->description,
		'image' => $row->image,
	    );
            $this->template->load('template','dashboard/tbl_dashboard_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dashboard/create_action'),
	    'id' => set_value('id'),
	    'title' => set_value('title'),
	    'description' => set_value('description'),
	    'image' => set_value('image'),
	);
        $this->template->load('template','dashboard/tbl_dashboard_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'description' => $this->input->post('description',TRUE),
		'image' => $this->input->post('image',TRUE),
	    );

            $this->Dashboard_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('dashboard'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dashboard_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dashboard/update_action'),
		'id' => set_value('id', $row->id),
		'title' => set_value('title', $row->title),
		'description' => set_value('description', $row->description),
		'image' => set_value('image', $row->image),
	    );
            $this->template->load('template','dashboard/tbl_dashboard_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'title' => $this->input->post('title',TRUE),
		'description' => $this->input->post('description',TRUE),
		'image' => $this->input->post('image',TRUE),
	    );

            $this->Dashboard_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dashboard'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dashboard_model->get_by_id($id);

        if ($row) {
            $this->Dashboard_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dashboard'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-09 19:53:58 */
/* http://harviacode.com */