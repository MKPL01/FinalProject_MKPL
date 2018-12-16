<?php
class E_Barang extends CI_Model{

    function addresep($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res; 
    }
 function pilih_resep($id_resep){
        $this->db->where('id_resep',$id_resep);
        $query = $this->db->get('resep');
        return $query;
    }  
    function list_resepall(){
        $this->db->select('*');
        $this->db->from('resep');
        $query = $this->db->get();
        return $query->result_array();
    }
    function list_pesananall(){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $query = $this->db->get();
        return $query->result_array();
    }
    function list_pesananbelumbayar(){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->where('status','belum dibayar');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    function list_order_member($id){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->where('id_user',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function deleteresep($id_resep){
        $this->db->select('*');
        $this->db->where('id_resep', $id_resep);
        $this->db->delete('resep');
    }

    //filter berdasarkan kategori

        function list_indonesia(){
        $this->db->select('*');
        $this->db->where('kategori','Indonesia');
        $query = $this->db->get('resep'); 
        return $query->result_array();
    }
        function list_cina(){
        $this->db->select('*');
        $this->db->where('kategori','Cina');
        $query = $this->db->get('resep'); 
        return $query->result_array();
    }
        function list_western(){
        $this->db->select('*');
        $this->db->where('kategori','Western');
        $query = $this->db->get('resep'); 
        return $query->result_array();
    }

    

    function list_idBarang($id_barang){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang',$id_barang);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_resep($id_resep)
      {
          $query=$this->db->query("SELECT * FROM resep where id_resep='$id_resep'");
          return $query->row();
      }
     public function update_stock($namatabel,$new_stock,$id_resep){
        $this->db->where('id_resep',$id_resep);
        $res = $this->db->update($namatabel,$new_stock);
        return $res;
    }
     public function update_status($namatabel,$status,$id_pemesanan){
        $this->db->where('id_pemesanan',$id_pemesanan);
        $res = $this->db->update($namatabel,$status);
       
       }

    function list_order($id_user){
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();
        return $query->result_array();
    }



}
?>