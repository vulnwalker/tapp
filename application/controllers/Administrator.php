<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }

        public function hapusrole($id)
    {
        $this->model->hapusrole($id);
        // $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/role');
    }

    public function hapus($id)
    {
        $this->model->hapusMenu($id);
        // $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu');
    }

    public function hapusSub($id)
    {
        $this->model->hapusSubMenu($id);
        // $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu/submenu');
    }

    public function hapuspasang_baru($id)
    {
        $this->model->hapuspasang_baru($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/pasang_baru');
    }

    public function hapusrelokasi($id)
    {
        $this->model->hapusrelokasi($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/relokasi');
    }

    public function hapusrelayout($id)
    {
        $this->model->hapusrelayout($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/relayout');
    }

    public function hapusupdown_bandwidth($id)
    {
        $this->model->hapusupdown_bandwidth($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/updown_bandwidth');
    }

    public function hapusupgrade_link($id)
    {
        $this->model->hapusupgrade_link($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/upgrade_link');
    }

    public function hapusdismantle($id)
    {
        $this->model->hapusdismantle($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/dismantle');
    }

    public function hapusdataawal($id)
    {
        $this->model->hapusdataawal($id);
        // $this->session->set_flashdata('flash', ''Dihapus');
        redirect('pengajuan/data_awal');
    }
 



}
