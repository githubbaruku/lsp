<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_user_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('auth/login');
    }

    public function registration()
    {
        $this->form_validation->set_rules('full_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('idcard', 'ID Card', 'required|trim');
        // $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|trim');
        // $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|trim');
        // $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        // $this->form_validation->set_rules('pilihan[]', 'Options', 'required');
        // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        // $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'This email has been registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password is not match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password is not match!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'LSP | Registration';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'full_name' => htmlspecialchars($this->input->post('full_name', true)),
                'idcard' => htmlspecialchars($this->input->post('idcard', true)),
                // 'tempat' => htmlspecialchars($this->input->post('tempat', true)),
                // 'tgl' => htmlspecialchars($this->input->post('tgl', true)),
                // 'jk' => htmlspecialchars($this->input->post('email', true)),
                // 'pilihan' => htmlspecialchars($this->input->post('pilihan', true)),
                // 'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'images' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'id_user_level' => 2,
                'is_aktif' => 1,
            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, Your account has registered! Please login
          </div>');
            redirect('auth');
        }
    }

    // public function login()
    // {
    //     $this->load->library('form_validation');
    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ($this->form_validation->run() == TRUE) {
    //         $username = $this->input->post('username');
    //         $password = $this->input->post('password');

    //         // Check user in database
    //         $user = $this->db->get_where('users', ['username' => $username, 'password' => md5($password)])->row();

    //         if ($user) {
    //             // Set session data
    //             $this->session->set_userdata([
    //                 'user_id' => $user->id,
    //                 'username' => $user->username,
    //                 'user_level' => $user->user_level_id,
    //                 'logged_in' => TRUE
    //             ]);

    //             redirect('dashboard');
    //         } else {
    //             $this->session->set_flashdata('error', 'Invalid username or password');
    //             redirect('auth/login');
    //         }
    //     } else {
    //         $this->load->view('auth/login');
    //     }
    // }


    function cheklogin()
    {
        $email      = $this->input->post('email');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password', TRUE);
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('email', $email);
        //$this->db->where('password',  $test);
        $users       = $this->db->get('tbl_user');
        if ($users->num_rows() > 0) {
            $user = $users->row_array();
            if (password_verify($password, $user['password'])) {
                // retrive user data to session
                $this->session->set_userdata($user);
                if ($user['id_user_level'] == 2) {
                    redirect('welcome');
                } else if ($user['id_user_level'] == 3) {
                    redirect('profile_user');
                } else {
                    redirect('auth');
                }
            }
        } else {
            $this->session->set_flashdata('status_login', 'email atau password yang anda input salah');
            redirect('auth');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
