<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Form_model');
    }

    public function index()
    {
        $this->load->view('form_apl01');
    }

    public function submit_form()
    {

        // Set validation rules
        $this->form_validation->set_rules('skema', 'Skema', 'required');
        $this->form_validation->set_rules('tuk', 'TUK', 'required');
        // Add more rules as needed

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_view');
        } else {
            // Configure upload
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            $uploaded_files = array();
            $files = array('fotokopi_ktp', 'pas_foto', 'sertifikat_pelatihan', 'fotokopi_ijazah');

            foreach ($files as $file) {
                if ($this->upload->do_upload($file)) {
                    $uploaded_files[$file] = $this->upload->data('file_name');
                } else {
                    $this->load->view('form_view', array('error' => $this->upload->display_errors()));
                    return;
                }
            }

            // Data to be inserted
            $data = array(
                'skema' => $this->input->post('skema'),
                'tuk' => $this->input->post('tuk'),
                'nama_kampus' => $this->input->post('nama_kampus'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kebangsaan' => $this->input->post('kebangsaan'),
                'email' => $this->input->post('email'),
                'no_telepon' => $this->input->post('no_telepon'),
                'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
                'alamat_rumah' => $this->input->post('alamat_rumah'),
                'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'jabatan' => $this->input->post('jabatan'),
                'alamat_perusahaan' => $this->input->post('alamat_perusahaan'),
                'no_telepon_email' => $this->input->post('no_telepon_email'),
                'fotokopi_ktp' => $uploaded_files['fotokopi_ktp'],
                'pas_foto' => $uploaded_files['pas_foto'],
                'sertifikat_pelatihan' => $uploaded_files['sertifikat_pelatihan'],
                'fotokopi_ijazah' => $uploaded_files['fotokopi_ijazah'],
                'tanggal' => $this->input->post('tanggal'),
                'tanda_tangan' => $this->input->post('tanda_tangan')
            );

            //  var_dump($data);
            // exit;

            $simpan =  $this->Form_model->insert_form($data);
            if ($simpan) {
                echo 'berhasil';
                $this->session->set_flashdata('pesan', 'Form APL 01 berhasil disimpan');
            } else {
                $this->session->set_flashdata('pesan', 'Form APL 01 gagal disimpan');
            }
            return redirect('form_apl01');
        }
    }
}
