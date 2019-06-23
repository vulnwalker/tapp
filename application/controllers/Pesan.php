<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_pesan');
        $this->load->model('Model_user');
    }

	public function index()
	{
		$data['title'] = 'Pesan';
        $data['user'] = $this->db->get_where('pesan', ['email_user' => $this->session->userdata('email')])->row_array();
        // $data['aa'] = $this->db->get_where('user', ['id' => $this->session->userdata('email')])->row_array();
		$data['pesan']= $this->Model_user->pesan($this->session->userdata('email'));

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pesan/pesan', $data);
        $this->load->view('templates/footer');
			}
		}
}
/* End of file Pesan.php */
/* Location: ./application/controllers/Pesan.php */
