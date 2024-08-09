<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/jadwal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/jadwal/index/';
            $config['first_url'] = base_url() . 'index.php/jadwal/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Jadwal_model->total_rows($q);
        $jadwal = $this->Jadwal_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template', 'jadwal/tbl_jadwal_list', $data);
    }

    public function read($id)
    {
        $row = $this->Jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
                'no' => $row->no,
                'tanggal' => $row->tanggal,
                'skema' => $row->skema,
                'tuk' => $row->tuk,
            );
            $this->template->load('template', 'jadwal/tbl_jadwal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jadwal/create_action'),
            'no' => set_value('no'),
            'tanggal' => set_value('tanggal'),
            'skema' => set_value('skema'),
            'tuk' => set_value('tuk'),
        );
        $this->template->load('template', 'jadwal/tbl_jadwal_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'tanggal' => $this->input->post('tanggal', TRUE),
                'skema' => $this->input->post('skema', TRUE),
                'tuk' => $this->input->post('tuk', TRUE),
            );

            $this->Jadwal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('jadwal'));
        }
    }

    public function update($id)
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
                'no' => set_value('no', $row->no),
                'tanggal' => set_value('tanggal', $row->tanggal),
                'skema' => set_value('skema', $row->skema),
                'tuk' => set_value('tuk', $row->tuk),
            );
            $this->template->load('template', 'jadwal/tbl_jadwal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('no', TRUE));
        } else {
            $data = array(
                'tanggal' => $this->input->post('tanggal', TRUE),
                'skema' => $this->input->post('skema', TRUE),
                'tuk' => $this->input->post('tuk', TRUE),
            );

            $this->Jadwal_model->update($this->input->post('no', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwal'));
        }
    }

    public function delete($id)
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $this->Jadwal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('skema', 'skema', 'trim|required');
        $this->form_validation->set_rules('tuk', 'tuk', 'trim|required');

        $this->form_validation->set_rules('no', 'no', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ubah_jadwal()
    {

        $data = array(
            'no' => set_value('no'),
            'tanggal' => set_value('tanggal'),
            'skema' => set_value('skema'),
            'tuk' => set_value('tuk'),
        );
        $this->template->load('template', 'jadwal/ubah_jadwal', $data);
    }
}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-01 16:32:49 */
/* http://harviacode.com */