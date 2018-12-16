<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Kurir extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $autoload['libraries'] = array('database', 'session', 'xmlrpc');
        $autoload['helper'] = array('url', 'file');  
    }
     public function index() {
            $data['judul']="Kurir";
            $data['content']="Kurir/home_kurir";	
            $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'));
            $this->load->view('Kurir/home_kurir',$data);
    }

    public function list_order() {
        $data['pemesanan'] = $this->E_Barang->list_pesananbelumbayar();
        $this->load->view('Kurir/list_pemesanan', $data);
    }
    public function konfirmasi($id_pemesanan){

        if ($this->session->userdata('id') == FALSE){
            redirect('main_user/index');
        }

        else {
            $this->load->model('E_Barang');
            $getresep = $this->E_Barang->list_pesananbelumbayar();
            $this->E_Barang->update_status('pemesanan',array("status" => "sudah dibayar"),$id_pemesanan);
            redirect('C_Kurir/list_order');
        }
    }
}