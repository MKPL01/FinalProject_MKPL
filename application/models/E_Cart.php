<?php
class E_Cart extends CI_Model{


        function checkout(){
        $this->load->library('cart');
        
        // put ordered items in orders table
        foreach($this->cart->contents() as $items){
            $data = array(
            	'id_resep'        => $items['id'],
                'id_user'        => $this->get_id_user(),
                'nama'        => $this->get_name(),
                'alamat'        => $this->get_alamat(),
                'namaresep' => $this->get_namaresep($items['id']),
                'harga'             => ($items['price'] * $items['qty'])+$this->get_ongkir(),
                'ongkir' => $this->get_ongkir(),
                'qty'               => $items['qty'],
                'tanggal_pesan'      => date('Y-m-d H:i:s'),
                'status'    => 'belum dibayar'
 
            );
            $this->db->insert('pemesanan', $data);
    }
    return true;
}
    function input_invoice($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res; 
    }


    public function get_id_user()
    {
        $hasil = $this->db
                        ->select('id')
                        ->where('id',$this->session->userdata('id'))
                        ->limit(1)
                        ->get('user');
        if($hasil->num_rows() > 0){
            return $hasil->row()->id;
        } else {
            return 0;
        }
    }
        public function get_name()
    {
        $hasil = $this->db
                        ->select('first_name')
                        ->where('id',$this->session->userdata('id'))
                        ->limit(1)
                        ->get('user');
        if($hasil->num_rows() > 0){
            return $hasil->row()->first_name;
        } else {
            return 0;
        }
    }
            public function get_namaresep($id_resep)
    {
        $hasil = $this->db
                        ->select('namaresep')
                        ->where('id_resep',$id_resep)
                        ->limit(1)
                        ->get('resep');
        if($hasil->num_rows() > 0){
            return $hasil->row()->namaresep;
        } else {
            return 0;
        }
    }
    public function get_alamat(){
        $id = $this->session->userdata('id');
         $hasil = $this->db
                        ->select('alamat')
                        ->where('id',$id)
                        ->limit(1)
                        ->get('user');
        if($hasil->num_rows() > 0){
            return $hasil->row()->alamat;
        } else {
            return 0;
        }
    }
    public function get_kecamatan($id){
         $hasil = $this->db
                        ->select('kecamatan')
                        ->where('id',$id)
                        ->limit(1)
                        ->get('user');
        if($hasil->num_rows() > 0){
            return $hasil->row()->kecamatan;
        } else {
            return 0;
        }
    }
        function get_ongkir()
      { 
        $id = $this->session->userdata('id');
        $getkecamatan = $this->get_kecamatan($id);
        $hasil = $this->db
                        ->select('biaya')
                        ->where('kecamatan',$getkecamatan)
                        ->limit(1)
                        ->get('ongkir');
        if($hasil->num_rows() > 0){
            return $hasil->row()->biaya;
        } else {
            return 0;
        }
    }


       


}