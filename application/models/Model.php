<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Model extends CI_model
{

// fungnsi "Hapus" pada tabel

    public function hapusMenu($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function hapusSubMenu($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }

    public function hapuspasang_baru($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('pasang_baru', ['id_pasangbaru' => $id]);
    }

    public function hapusrelokasi($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('relokasi', ['id_relokasi' => $id]);
    }

    public function hapusrelayout($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('relayout', ['id_relayout' => $id]);
    }

    public function  hapusupdown_bandwidth($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('ug_dg', ['id_bandwidth' => $id]);
    }

    public function hapusupgrade_link($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('upgrade_link', ['id_link' => $id]);
    }

    public function hapusdismantle($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('dismantle', ['id_dismantle' => $id]);
    }

    public function hapusdataawal($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('data_awal', ['id_dataawal' => $id]);
    }

    public function hapusRole($id)
    {
        //$this->db->where('id',$id);
        $this->db->delete('user_role', ['id' => $id]);
    }



    
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
                FROM `user_sub_menu` JOIN `user_menu` 
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu',['id'=> $id])->row_array();
    }

    public function ubah()
    {
        $data = [

            "title"=>$this->input->post('title',true),
            "menu_id"=>$this->input->post('menu_id',true),
            "url"=>$this->input->post('url',true),
            "icon"=>$this->input->post('icon',true),
            "is_active"=>$this->input->post('is_active',true)
            
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_sub_menu',$data);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu',['id'=> $id])->row_array();
    }

    public function edit()
    {
        $data = [

            "menu"=>$this->input->post('menu',true),
           
            
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_menu',$data);
    }

    
}
