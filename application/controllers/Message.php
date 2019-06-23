<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_message');
	}

	public function index()
	{
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['getMessage'] = $this->Model_message->getMessage();
        $data['message'] = $this->db->get('user')->result_array();

        $this->form_validation->set_rules('isi', 'Isi', 'required');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('message/inboxout', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'isi' => $this->input->post('isi'),
               
            ];
            $this->db->insert('message', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Message  added!</div>');
            redirect('message');
        }
    }

	

}

/* End of file Message.php */
/* Location: ./application/controllers/Message.php */