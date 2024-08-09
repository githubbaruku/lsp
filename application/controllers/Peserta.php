<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/peserta/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/peserta/index/';
            $config['first_url'] = base_url() . 'index.php/peserta/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Peserta_model->total_rows($q);
        $peserta = $this->Peserta_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'peserta_data' => $peserta,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template', 'peserta/tbl_peserta_list', $data);
    }

    public function read($id)
    {
        $row = $this->Peserta_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'nama' => $row->nama,
                'nik' => $row->nik,
                'nomor_hp' => $row->nomor_hp,
            );
            $this->template->load('template', 'peserta/tbl_peserta_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('peserta/create_action'),
            'id' => set_value('id'),
            'nama_lengkap' => set_value('nama_lengkap'),
            'nik' => set_value('nik'),
            'no_telepon' => set_value('no_telepon'),
        );
        $this->template->load('template', 'peserta/tbl_peserta_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'no_telepon' => $this->input->post('no_telepon', TRUE),
            );

            $this->Peserta_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('peserta'));
        }
    }

    public function update($id)
    {
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('peserta/update_action'),
                'id' => set_value('id', $row->id),
                'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
                'nik' => set_value('nik', $row->nik),
                'no_telepon' => set_value('no_telepon', $row->no_telepon),
            );
            $this->template->load('template', 'peserta/tbl_peserta_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap', TRUE),
                'nik' => $this->input->post('nik', TRUE),
                'no_telepon' => $this->input->post('no_telepon', TRUE),
            );

            $this->Peserta_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('peserta'));
        }
    }

    public function delete($id)
    {
        $row = $this->Peserta_model->get_by_id($id);

        if ($row) {
            $this->Peserta_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('peserta'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('peserta'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('nomor_hp', 'nomor hp', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Peserta.php */
/* Location: ./application/controllers/Peserta.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-09 06:42:24 */
/* http://harviacode.com */