<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengajuan extends CI_Model {

	public function getDismantleById($id)
    {
        return $this->db->get_where('dismantle',['id_dismantle'=> $id])->row_array();
    }



    public function ubah()
    {
        $data = [

            "dismantle"=>$this->input->post('dismantle',true)

            
        ];

        $this->db->where('id_dismantle',$this->input->post('id'));
        $this->db->update('dismantle',$data);
    }

    public function getUpgradeById($id)
    {
        return $this->db->get_where('upgrade_link',['id_link'=> $id])->row_array();
    }



    public function ubahupgrade()
    {
        $data = [

            "upgrade_link"=>$this->input->post('upgrade',true)

            
        ];

        $this->db->where('id_link',$this->input->post('id'));
        $this->db->update('upgrade_link',$data);
    }



    public function getUpdownById($id)
    {
        return $this->db->get_where('ug_dg',['id_bandwidth'=> $id])->row_array();
    }



    public function ubahupdown()
    {
        $data = [

            "bw_lama"=>$this->input->post('bandwidth_lama',true),
            "bw_baru"=>$this->input->post('bandwidth_baru',true),
            "ug_dg"=>$this->input->post('keterangan',true)

            
        ];

        $this->db->where('id_bandwidth',$this->input->post('id'));
        $this->db->update('ug_dg',$data);
    }


    public function getRelayoutById($id)
    {
        return $this->db->get_where('relayout',['id_relayout'=> $id])->row_array();
    }



    public function ubahrelayout()
    {
        $data = [

            "jarak"=>$this->input->post('jarak',true),
            "gambar"=>$this->input->post('gambar',true)

            
        ];

        $this->db->where('id_relayout',$this->input->post('id'));
        $this->db->update('relayout',$data);
    }

    public function getRelokasiById($id)
    {
        return $this->db->get_where('relokasi',['id_relokasi'=> $id])->row_array();
    }



    public function ubahrelokasi()
    {
        $data = [

            "ip_address"=>$this->input->post('ip_address',true),
            "provider"=>$this->input->post('provider',true),
            "nama_uker"=>$this->input->post('nama_uker',true),
            "alamat_lama"=>$this->input->post('alamat_lama',true),
            "alamat_baru"=>$this->input->post('alamat_baru',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "gambar"=>$this->input->post('gambar',true)

            
        ];

        $this->db->where('id_relokasi',$this->input->post('id'));
        $this->db->update('relokasi',$data);
    }


    public function getDataawalById($id)
    {
        return $this->db->get_where('data_awal',['id_dataawal'=> $id])->row_array();
    }



    public function ubahdataawal()
    {
        $data = [

            "ip_address"=>$this->input->post('ip_address',true),
            "tipe_jarkom"=>$this->input->post('tipe_jarkom',true),
            "provider"=>$this->input->post('provider',true),
            "nama_lokasi"=>$this->input->post('nama_lokasi',true),
            "alamat_lokasi"=>$this->input->post('alamat_lokasi',true),
            "tipe_uker"=>$this->input->post('tipe_uker',true),
            "nama_pic"=>$this->input->post('nama_uker',true),
            "no_tlp"=>$this->input->post('no_tlp',true)

            
        ];

        $this->db->where('id_dataawal',$this->input->post('id'));
        $this->db->update('data_awal',$data);
    }

     public function getPasangbaruById($id)
    {
        return $this->db->get_where('pasang_baru',['id_pasangbaru'=> $id])->row_array();
    }



    public function ubahpasangbaru()
    {
        $data = [

            "nama_uker"=>$this->input->post('nama_uker',true),
            "nama_lokasi"=>$this->input->post('nama_lokasi',true),
            "alamat_lokasi"=>$this->input->post('alamat_lokasi',true),
            "tipe_jarkom"=>$this->input->post('tipe_jarkom',true),
            "provider"=>$this->input->post('provider',true),
            "nama_pic"=>$this->input->post('nama_pic',true),
            "no_tlp"=>$this->input->post('no_tlp',true),
            "tanggal"=>$this->input->post('tanggal',true),
            "gambar"=>$this->input->post('gambar',true)

            
        ];

        $this->db->where('id_pasangbaru',$this->input->post('id'));
        $this->db->update('pasang_baru',$data);
    }

        public function cariDataUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);

        
        return $this->db->get('user')->result_array();
    }



}

/* End of file model_pengajuan.php */
/* Location: ./application/models/model_pengajuan.php */