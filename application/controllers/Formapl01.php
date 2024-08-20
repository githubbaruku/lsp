<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formapl01 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //is_login();
        $this->load->model('Formapl01_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/formapl01/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/formapl01/index/';
            $config['first_url'] = base_url() . 'index.php/formapl01/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Formapl01_model->total_rows($q);
        $formapl01 = $this->Formapl01_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'formapl01_data' => $formapl01,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','formapl01/tbl_formapl01_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Formapl01_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'skema' => $row->skema,
		'tuk' => $row->tuk,
		'nama_kampus' => $row->nama_kampus,
		'nama_lengkap' => $row->nama_lengkap,
		'nik' => $row->nik,
		'tempat_lahir' => $row->tempat_lahir,
		'tanggal_lahir' => $row->tanggal_lahir,
		'jenis_kelamin' => $row->jenis_kelamin,
		'kebangsaan' => $row->kebangsaan,
		'email' => $row->email,
		'no_telepon' => $row->no_telepon,
		'pendidikan_terakhir' => $row->pendidikan_terakhir,
		'alamat_rumah' => $row->alamat_rumah,
		'nama_pekerjaan' => $row->nama_pekerjaan,
		'nama_perusahaan' => $row->nama_perusahaan,
		'jabatan' => $row->jabatan,
		'alamat_perusahaan' => $row->alamat_perusahaan,
		'no_telepon_email' => $row->no_telepon_email,
		'fotokopi_ktp' => $row->fotokopi_ktp,
		'pas_foto' => $row->pas_foto,
		'sertifikat_pelatihan' => $row->sertifikat_pelatihan,
		'fotokopi_ijazah' => $row->fotokopi_ijazah,
		'tanggal' => $row->tanggal,
	    );
            $this->template->load('template','formapl01/tbl_formapl01_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('formapl01'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('formapl01/create_action'),
	    'id' => set_value('id'),
	    'skema' => set_value('skema'),
	    'tuk' => set_value('tuk'),
	    'nama_kampus' => set_value('nama_kampus'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'nik' => set_value('nik'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tanggal_lahir' => set_value('tanggal_lahir'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'kebangsaan' => set_value('kebangsaan'),
	    'email' => set_value('email'),
	    'no_telepon' => set_value('no_telepon'),
	    'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
	    'alamat_rumah' => set_value('alamat_rumah'),
	    'nama_pekerjaan' => set_value('nama_pekerjaan'),
	    'nama_perusahaan' => set_value('nama_perusahaan'),
	    'jabatan' => set_value('jabatan'),
	    'alamat_perusahaan' => set_value('alamat_perusahaan'),
	    'no_telepon_email' => set_value('no_telepon_email'),
	    'fotokopi_ktp' => set_value('fotokopi_ktp'),
	    'pas_foto' => set_value('pas_foto'),
	    'sertifikat_pelatihan' => set_value('sertifikat_pelatihan'),
	    'fotokopi_ijazah' => set_value('fotokopi_ijazah'),
	    'tanggal' => set_value('tanggal'),
	);
        $this->template->load('template','formapl01/tbl_formapl01_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'skema' => $this->input->post('skema',TRUE),
		'tuk' => $this->input->post('tuk',TRUE),
		'nama_kampus' => $this->input->post('nama_kampus',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'kebangsaan' => $this->input->post('kebangsaan',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telepon' => $this->input->post('no_telepon',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
		'nama_pekerjaan' => $this->input->post('nama_pekerjaan',TRUE),
		'nama_perusahaan' => $this->input->post('nama_perusahaan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'no_telepon_email' => $this->input->post('no_telepon_email',TRUE),
		'fotokopi_ktp' => $this->input->post('fotokopi_ktp',TRUE),
		'pas_foto' => $this->input->post('pas_foto',TRUE),
		'sertifikat_pelatihan' => $this->input->post('sertifikat_pelatihan',TRUE),
		'fotokopi_ijazah' => $this->input->post('fotokopi_ijazah',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Formapl01_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('formapl01'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Formapl01_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('formapl01/update_action'),
		'id' => set_value('id', $row->id),
		'skema' => set_value('skema', $row->skema),
		'tuk' => set_value('tuk', $row->tuk),
		'nama_kampus' => set_value('nama_kampus', $row->nama_kampus),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'nik' => set_value('nik', $row->nik),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tanggal_lahir' => set_value('tanggal_lahir', $row->tanggal_lahir),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'kebangsaan' => set_value('kebangsaan', $row->kebangsaan),
		'email' => set_value('email', $row->email),
		'no_telepon' => set_value('no_telepon', $row->no_telepon),
		'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
		'alamat_rumah' => set_value('alamat_rumah', $row->alamat_rumah),
		'nama_pekerjaan' => set_value('nama_pekerjaan', $row->nama_pekerjaan),
		'nama_perusahaan' => set_value('nama_perusahaan', $row->nama_perusahaan),
		'jabatan' => set_value('jabatan', $row->jabatan),
		'alamat_perusahaan' => set_value('alamat_perusahaan', $row->alamat_perusahaan),
		'no_telepon_email' => set_value('no_telepon_email', $row->no_telepon_email),
		'fotokopi_ktp' => set_value('fotokopi_ktp', $row->fotokopi_ktp),
		'pas_foto' => set_value('pas_foto', $row->pas_foto),
		'sertifikat_pelatihan' => set_value('sertifikat_pelatihan', $row->sertifikat_pelatihan),
		'fotokopi_ijazah' => set_value('fotokopi_ijazah', $row->fotokopi_ijazah),
		'tanggal' => set_value('tanggal', $row->tanggal),
	    );
            $this->template->load('template','formapl01/tbl_formapl01_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('formapl01'));
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
		'tuk' => $this->input->post('tuk',TRUE),
		'nama_kampus' => $this->input->post('nama_kampus',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'kebangsaan' => $this->input->post('kebangsaan',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telepon' => $this->input->post('no_telepon',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'alamat_rumah' => $this->input->post('alamat_rumah',TRUE),
		'nama_pekerjaan' => $this->input->post('nama_pekerjaan',TRUE),
		'nama_perusahaan' => $this->input->post('nama_perusahaan',TRUE),
		'jabatan' => $this->input->post('jabatan',TRUE),
		'alamat_perusahaan' => $this->input->post('alamat_perusahaan',TRUE),
		'no_telepon_email' => $this->input->post('no_telepon_email',TRUE),
		'fotokopi_ktp' => $this->input->post('fotokopi_ktp',TRUE),
		'pas_foto' => $this->input->post('pas_foto',TRUE),
		'sertifikat_pelatihan' => $this->input->post('sertifikat_pelatihan',TRUE),
		'fotokopi_ijazah' => $this->input->post('fotokopi_ijazah',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Formapl01_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('formapl01'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Formapl01_model->get_by_id($id);

        if ($row) {
            $this->Formapl01_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('formapl01'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('formapl01'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('skema', 'skema', 'trim|required');
	$this->form_validation->set_rules('tuk', 'tuk', 'trim|required');
	$this->form_validation->set_rules('nama_kampus', 'nama kampus', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('kebangsaan', 'kebangsaan', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('no_telepon', 'no telepon', 'trim|required');
	$this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
	$this->form_validation->set_rules('alamat_rumah', 'alamat rumah', 'trim|required');
	$this->form_validation->set_rules('nama_pekerjaan', 'nama pekerjaan', 'trim|required');
	$this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'trim|required');
	$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
	$this->form_validation->set_rules('alamat_perusahaan', 'alamat perusahaan', 'trim|required');
	$this->form_validation->set_rules('no_telepon_email', 'no telepon email', 'trim|required');
	$this->form_validation->set_rules('fotokopi_ktp', 'fotokopi ktp', 'trim|required');
	$this->form_validation->set_rules('pas_foto', 'pas foto', 'trim|required');
	$this->form_validation->set_rules('sertifikat_pelatihan', 'sertifikat pelatihan', 'trim|required');
	$this->form_validation->set_rules('fotokopi_ijazah', 'fotokopi ijazah', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Formapl01.php */
/* Location: ./application/controllers/Formapl01.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2024-08-09 17:32:11 */
/* http://harviacode.com */