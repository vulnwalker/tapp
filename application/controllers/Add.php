<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
         $this->load->library('form_validation');
         
        
    }

    public function index()
    {
          $data['title'] = 'Add User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('model', 'menu');

       
        $data['tambah'] = $this->db->get('user')->result_array();


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tambah/add_user', $data);
            $this->load->view('templates/footer');
        } 
                
       }

     public function registration()
    {
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('kode_uker', 'Kode Uker', 'required|trim');
        $this->form_validation->set_rules('nama_uker', 'Nama Uker', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
         $this->form_validation->set_rules('pn', 'PN', 'required|trim|min_length[8]|is_unique[user.pn]', [
            'is_unique' => 'This Personal Number has already registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tambah/registration', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $role_id = $this->input->post('role_id', true);
            $jabatan = $this->input->post('jabatan', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'kode_uker' => htmlspecialchars($this->input->post('kode_uker', true)),
                'nama_uker' => htmlspecialchars($this->input->post('nama_uker', true)),
                'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
                'jabatan' => $jabatan,
                'pn' => htmlspecialchars($this->input->post('pn', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $role_id,
                'is_active' => 0,
                'date_created' => time()
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));

            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
            redirect('add/registration');
        }
    }


    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'rikkiparnando1@gmail.com',
            'smtp_pass' => 'kingkong1234567890',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('rikkiparnando1@gmail.com', 'rikki p');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account verification');
            $this->email->message(
                'Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');


        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please Login!</div>');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation fail ! Token expired</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation fail ! Token invalid</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation fail! Wrong Email !</div>');
            redirect('auth');
        }
    }

     public function edituser($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
         $data['eduser']= $this->Model_user->getUserById($id);
       


        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('kode_uker','Kode Uker','required');
        $this->form_validation->set_rules('nama_uker','Nama Uker','required');
        $this->form_validation->set_rules('no_hp','No HP','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('pn','PN','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('role_id','Role ID','required');
      
       

        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('tambah/edituser', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_user->ubah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('add');
        }
    }


}

/* End of file Add.php */
/* Location: ./application/controllers/Add.php */