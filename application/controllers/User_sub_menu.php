<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_sub_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('User_sub_menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/user_sub_menu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/user_sub_menu/index/';
            $config['first_url'] = base_url() . 'index.php/user_sub_menu/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->User_sub_menu_model->total_rows($q);
        $user_sub_menu = $this->User_sub_menu_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user_sub_menu_data' => $user_sub_menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','user_sub_menu/user_sub_menu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->User_sub_menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'menu_id' => $row->menu_id,
		'title' => $row->title,
		'url' => $row->url,
		'icon' => $row->icon,
		'is_active' => $row->is_active,
	    );
            $this->template->load('template','user_sub_menu/user_sub_menu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_sub_menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('user_sub_menu/create_action'),
	    'id' => set_value('id'),
	    'menu_id' => set_value('menu_id'),
	    'title' => set_value('title'),
	    'url' => set_value('url'),
	    'icon' => set_value('icon'),
	    'is_active' => set_value('is_active'),
	);
        $this->template->load('template','user_sub_menu/user_sub_menu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'menu_id' => $this->input->post('menu_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'url' => $this->input->post('url',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->User_sub_menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('user_sub_menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->User_sub_menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('user_sub_menu/update_action'),
		'id' => set_value('id', $row->id),
		'menu_id' => set_value('menu_id', $row->menu_id),
		'title' => set_value('title', $row->title),
		'url' => set_value('url', $row->url),
		'icon' => set_value('icon', $row->icon),
		'is_active' => set_value('is_active', $row->is_active),
	    );
            $this->template->load('template','user_sub_menu/user_sub_menu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_sub_menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'menu_id' => $this->input->post('menu_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'url' => $this->input->post('url',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'is_active' => $this->input->post('is_active',TRUE),
	    );

            $this->User_sub_menu_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('user_sub_menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->User_sub_menu_model->get_by_id($id);

        if ($row) {
            $this->User_sub_menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('user_sub_menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user_sub_menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('menu_id', 'menu id', 'trim|required');
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('url', 'url', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('is_active', 'is active', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file User_sub_menu.php */
/* Location: ./application/controllers/User_sub_menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-09 19:09:32 */
/* http://harviacode.com */