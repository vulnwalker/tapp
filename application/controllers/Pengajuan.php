<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_pengajuan');
         $this->load->model('Model_user');
    }

    public function data_awal()
    {
        $data['title'] = 'Data Awal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['dataAwal'] = $this->db->get('data_awal')->result_array();

        $this->form_validation->set_rules('ip_address', 'Ip Address', 'required');
        $this->form_validation->set_rules('tipe_jarkom', 'Tipe Jarkom', 'required');
        $this->form_validation->set_rules('provider', 'Provider', 'required');
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');
        $this->form_validation->set_rules('alamat_lokasi', 'Alamat Lokasi', 'required');
        $this->form_validation->set_rules('tipe_uker', 'Tipe Uker', 'required');
        $this->form_validation->set_rules('nama_pic', 'Nama Pic', 'required');
        $this->form_validation->set_rules('no_tlp', 'No. Telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/data_awal', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'ip_address' => $this->input->post('ip_address'),
                'tipe_jarkom' => $this->input->post('tipe_jarkom'),
                'provider' => $this->input->post('provider'),
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'alamat_lokasi' => $this->input->post('alamat_lokasi'),
                'tipe_uker' => $this->input->post('tipe_uker'),
                'nama_pic' => $this->input->post('nama_pic'),
                'no_tlp' => $this->input->post('no_tlp')
            ];
            $this->db->insert('data_awal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/data_awal');
        }
    }


    public function pasang_baru()
    {
        $data['title'] = 'Pasang Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pasang_baru'] = $this->db->get('pasang_baru')->result_array();

        $this->form_validation->set_rules('nama_uker', 'Nama Uker', 'required');
        $this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required');
        $this->form_validation->set_rules('alamat_lokasi', 'Alamat Lokasi', 'required');
        $this->form_validation->set_rules('tipe_jarkom', 'tipe_jarkom', 'required');
        $this->form_validation->set_rules('provider', 'Provider', 'required');
        $this->form_validation->set_rules('nama_pic', 'Nama PIC', 'required');
        $this->form_validation->set_rules('no_tlp', 'No. Telepon', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/pasang_baru', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_uker' => $this->input->post('nama_uker'),
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'alamat_lokasi' => $this->input->post('alamat_lokasi'),
                'tipe_jarkom' => $this->input->post('tipe_jarkom'),
                'provider' => $this->input->post('provider'),
                'nama_pic' => $this->input->post('nama_pic'),
                'no_tlp' => $this->input->post('no_tlp'),
                'tanggal' => $this->input->post('tanggal'),
                'gambar' => $this->input->post('gambar')
            ];
            $this->db->insert('pasang_baru', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/pasang_baru');
        }
    }


    public function relokasi()
    {
        $data['title'] = 'Relokasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['Relokasi'] = $this->db->get('relokasi')->result_array();

        $this->form_validation->set_rules('nama_uker', 'Nama Uker', 'required');
        $this->form_validation->set_rules('alamat_lama', 'Alamat Lama', 'required');
        $this->form_validation->set_rules('alamat_lama', 'Alamat Lama', 'required');
        $this->form_validation->set_rules('tanggal', 'Target Live', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        $this->form_validation->set_rules('provider', 'Provider', 'required');
        $this->form_validation->set_rules('ip_address', 'IP Address', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajuan/relokasi', $data);
        $this->load->view('templates/footer');
         } else {
            $data = [
                'nama_uker' => $this->input->post('nama_uker'),
                'alamat_lama' => $this->input->post('alamat_lama'),
                'alamat_baru' => $this->input->post('alamat_baru'),
                'tanggal' => $this->input->post('tanggal'),
                'gambar' => $this->input->post('gambar'),
                'provider' => $this->input->post('provider'),
                'ip_address' => $this->input->post('ip_address')
            ];
            $this->db->insert('relokasi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/relokasi');
        }
    }


    public function relayout()
    {
        $data['title'] = 'Relayout';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['relayout'] = $this->db->get('relayout')->result_array();

        $this->form_validation->set_rules('jarak', 'Jarak', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajuan/relayout', $data);
        $this->load->view('templates/footer');
        } else {
            $data = [
                'jarak' => $this->input->post('jarak'),
                'gambar' => $this->input->post('gambar'),
            ];
            $this->db->insert('relayout', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/relayout');
        }
    }


    public function updown_bandwidth()
    {
        $data['title'] = 'Up/Down Bandwidth';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ug_dg'] = $this->db->get('ug_dg')->result_array();

        $this->form_validation->set_rules('bw_lama', 'Bandwidth Lama', 'required');
        $this->form_validation->set_rules('bw_baru', 'Bandwidth Baru', 'required');
        $this->form_validation->set_rules('ug_dg', 'Upgrade/Downgrade', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajuan/updown_bandwidth', $data);
        $this->load->view('templates/footer');
        } else {
            $data = [
                'bw_lama' => $this->input->post('bw_lama'),
                'bw_baru' => $this->input->post('bw_baru'),
                'ug_dg' => $this->input->post('ug_dg'),
            ];
            $this->db->insert('ug_dg', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/updown_bandwidth');
        }
    }


    public function upgrade_link()
    {
        $data['title'] = 'Upgrade Link';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['upgrade_link'] = $this->db->get('upgrade_link')->result_array();

        $this->form_validation->set_rules('fiber_optic', 'Fiber Optic', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajuan/upgrade_link', $data);
        $this->load->view('templates/footer');
        } else {
            $data = [
                'fiber_optic' => $this->input->post('fiber_optic'),
            ];
            $this->db->insert('upgrade_link', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/upgrade_link');
        }
    }


    public function dismantle()
    {
        $data['title'] = 'Dismantle';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['aa'] = $this->db->get_where('user', ['id' => $this->session->userdata('email')])->row_array();

        $data['dismantle'] = $this->db->get('dismantle')->result_array();
        $data['user1']= $this->Model_user->listingOther();
        // $data['pesan']= $this->Model_user->pesan();

        $this->form_validation->set_rules('dismantle', 'Dismantle', 'required');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengajuan/dismantle', $data);
        $this->load->view('templates/footer');
        } else {
            $data = [
                'id_pengirim'   => $this->session->userdata('email'),
                'id_penerima'  => $this->input->post('id_user'),
                'dismantle'    => $this->input->post('dismantle')

            ];
            $this->db->insert('dismantle', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">success</div>');
            redirect('pengajuan/dismantle');
        }
    }

    public function editpasangbaru($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['edpasangbaru']= $this->Model_pengajuan->getPasangbaruById($id);




        $this->form_validation->set_rules('ip_address','IP Address','required');
        $this->form_validation->set_rules('tipe_jarkom','Tipe Jarkom','required');
        $this->form_validation->set_rules('provider','Provider','required');
        $this->form_validation->set_rules('nama_lokasi','Nama Lokasi','required');
        $this->form_validation->set_rules('alamat_lokasi','Alamat Lokasi','required');
        $this->form_validation->set_rules('tipe_uker','Tipe Uker','required');
        $this->form_validation->set_rules('nama_pic','Nama PIC','required');
        $this->form_validation->set_rules('no_tlp','no_tlp','required');


        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/pasang_baru/editpasangbaru', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahpasangbaru();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/pasang_baru');
        }
    }


     public function editdataawal($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['eddataawal']= $this->Model_pengajuan->getDataawalById($id);




        $this->form_validation->set_rules('ip_address','IP Address','required');
        $this->form_validation->set_rules('tipe_jarkom','Tipe Jarkom','required');
        $this->form_validation->set_rules('provider','Provider','required');
        $this->form_validation->set_rules('nama_lokasi','Nama Lokasi','required');
        $this->form_validation->set_rules('alamat_lokasi','Alamat Lokasi','required');
        $this->form_validation->set_rules('tipe_uker','Tipe Uker','required');
        $this->form_validation->set_rules('nama_pic','Nama PIC','required');
        $this->form_validation->set_rules('no_tlp','no_tlp','required');


        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/data_awal/editdataawal', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahdataawal();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/data_awal');
        }
    }

    public function editrelokasi($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['edrelokasi']= $this->Model_pengajuan->getRelokasiById($id);




        $this->form_validation->set_rules('ip_address','IP Address','required');
        $this->form_validation->set_rules('provider','Provider','required');
        $this->form_validation->set_rules('nama_uker','Nama Uker','required');
        $this->form_validation->set_rules('alamat_lama','Alamat Lama','required');
        $this->form_validation->set_rules('alamat_baru','Alamat Baru','required');
        $this->form_validation->set_rules('tanggal','tanggal','required');
        $this->form_validation->set_rules('gambar','Gambar','required');


        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/relokasi/editrelokasi', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahrelokasi();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/relokasi');
        }
    }

     public function editrelayout($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['edrelayout']= $this->Model_pengajuan->getRelayoutById($id);




        $this->form_validation->set_rules('jarak','Jarak','required');
        $this->form_validation->set_rules('gambar','Gambar','required');


        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/relayout/editrelayout', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahrelayout();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/relayout');
        }
    }

    public function editupdown($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['edupdown']= $this->Model_pengajuan->getUpdownById($id);




        $this->form_validation->set_rules('bandwidth_lama','Bandwidth Lama','required');
        $this->form_validation->set_rules('bandwidth_baru','Bandwidth Baru','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');

        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/updown_bandwidth/editupdown', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahupgrade();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/updown_bandwidth');
        }
    }


    public function editupgrade($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['edup']= $this->Model_pengajuan->getUpgradeById($id);




        $this->form_validation->set_rules('upgrade','Upgrade Link','required');

        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/upgrade_link/editupgrade', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubahupgrade();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/upgrade_link');
        }
    }

    public function editdismantle($id)
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['eddis']= $this->Model_pengajuan->getDismantleById($id);




        $this->form_validation->set_rules('dismantle','Dismantle','required');

        if($this->form_validation->run()== FALSE){
           $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengajuan/dismantle/editdismantle', $data);
            $this->load->view('templates/footer');

        }else{
            $this->Model_pengajuan->ubah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User Edited!</div>');
            redirect('pengajuan/dismantle');
        }
    }


}
