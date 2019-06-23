<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesan extends CI_Model {

	  public function getUserById($id)
    {
        return $this->db->get_where('user',['id'=> $id])->row_array();
    }

    public function ubah()
    {
        $data = [

            "name"=>$this->input->post('name',true),
            "kode_uker"=>$this->input->post('kode_uker',true),
            "nama_uker"=>$this->input->post('nama_uker',true),
            "no_hp"=>$this->input->post('no_hp',true),
            "jabatan"=>$this->input->post('jabatan',true),
            "pn"=>$this->input->post('pn',true),
            "email"=>$this->input->post('email',true),
            "role_id"=>$this->input->post('role_id',true),
            "is_active"=>$this->input->post('is_active',true)

        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user',$data);
    }

	  public function getRoleById($id)
    {
        return $this->db->get_where('user_role',['id'=> $id])->row_array();
    }

    public function editrole()
    {
        $data = [

            "role"=>$this->input->post('role',true),

        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user_role',$data);
    }


    public function listing()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('email' => $this->session->userdata('email')));
        // $this->db->where('email' ,$this->session->userdata('email'),0,FALSE);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

		public function listingOther()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email != ', "'".$this->session->userdata('email')."' and role_id = 3",false);
        // $this->db->where('email' ,$this->session->userdata('email'),0,FALSE);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }


    public function pesan($email)
    {
        $this->db->select('dismantle.*,
                            user.email,
                            user.name'

                            );
        $this->db->from('dismantle');
				if($this->session->userdata('role_id') == 1){
				}else{
					$this->db->where(array('id_penerima' => $email));
				}
        //Join
        // $this->db->join('user', 'user.email = dismantle.id_pengirim', 'user.id = dismantle.id_penerima','left');
        $this->db->join('user', 'user.id = dismantle.id_penerima', 'left');
        //End join
        // $this->db->group_by('dismantle.id_dismantle');
        $this->db->order_by('id_dismantle', 'desc');
        $query = $this->db->get();
        return $query->result();
    }




}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */
