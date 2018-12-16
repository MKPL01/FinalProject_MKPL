<?php
class E_User extends CI_Model{

	function add_user($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
    function add_alamat($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
    function cek_user($username,$password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        return $this->db->get();
    }
    function cek_username(){
        $this->db->select('*');
        $this->db->from('user');

        return $this->db->get();
    }
    function pilih_user($id){
        $this->db->where('id',$id);
        $query = $this->db->get('user');
        return $query;
    }

     public function update_user($namatabel,$dataprofil,$id){
        $this->db->where('id',$id);
        $res = $this->db->update($namatabel,$dataprofil);
        return $res;
    }
        function list_user(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level','member');
        $query = $this->db->get();
        return $query->result_array();
    }

}
?>