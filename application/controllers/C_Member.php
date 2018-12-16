`<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
        $autoload['libraries'] = array('database', 'session', 'xmlrpc');
        $autoload['helper'] = array('url', 'file');   
    } 
     public function index() {
            $data['judul']="Member";
            $data['content']="Member/home_member";
            $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();	
            $this->load->view('Member/home_member',$data); 
    }
     public function lihatdetailresep($id_resep){
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data['resep'] = $this->E_Barang->pilih_resep($id_resep)->row();
        $this->load->view('Member/detailresep',$data);
    } 
         public function view_invoice() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data['pemesanan'] = $this->E_Barang->list_order_member($this->session->userdata('id'));
        $this->load->view('Member/list_pesanan',$data);
    }
         public function view_cart() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/tampilcart',$data);
    } 

     public function filter_kategoriindonesia() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data['resep'] = $this->E_Barang->list_indonesia();
        $this->load->view('Member/kategoriindonesia',$data);
    } 

     public function filter_kategoricina() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data['resep'] = $this->E_Barang->list_cina();
        $this->load->view('Member/kategoricina',$data);
    }

     public function filter_kategoriwestern() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data['resep'] = $this->E_Barang->list_western();
        $this->load->view('Member/kategoriwestern',$data);
    }

     public function lihatprofile() {
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/profilemember',$data);
      }

     public function editprofileM() {
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/editprofil',$data);
      }
           public function view_form_alamat() {
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $this->load->view('Member/alamat_pengiriman',$data);
      }

     public function editprofile(){
        $id=$this->session->userdata('id');
        $firstnamebr =$this->input->post('firstnamebr');
        $lastnamebr =$this->input->post('lastnamebr');
        $mobilenumberbr =$this->input->post('mobilenumberbr');
        $usernamebr =$this->input->post('usernamebr');
        $emailbr =$this->input->post('emailbr');
        $alamat =$this->input->post('alamat');
        $kecamatan=$this->input->post('kecamatan');

        $pisah = explode(' ',$usernamebr);
        if(count($pisah)==0){   
        }else{
            $namabaru = implode('_',$pisah);
        }
       
            $this->E_User->update_user('user',array("username" => $usernamebr,"first_name" => $firstnamebr, "last_name" => $lastnamebr, "alamat" => $alamat, "kecamatan" => $kecamatan, "email" => $emailbr, "mobile_number" => $mobilenumberbr),$id);
        
        ?><script language="JavaScript">alert('Update Profile Success');
        document.location='<?php echo site_url('C_Member/lihatprofile');?>'</script><?php
    }

    public function delete_resep_cart($rowid){
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $data=array('rowid' => $rowid, 'qty' =>0);
        $this->cart->update($data);
        redirect('C_Member/view_cart');
    }

    public function update_cart(){
        $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $i=1;
        foreach ($this->cart->contents() as $cart_resep) {
            $this->cart->update(array('rowid'=>$cart_resep['rowid'],'qty'=>$_POST['qty'.$i]));
            $i++;}
            redirect('C_Member/view_cart');


        }

    public function add_to_cart($id_resep){

        if ($this->session->userdata('id') == FALSE){
            redirect('main_user/index');
        }

        else {
            $this->load->model('E_barang');
            $getresep = $this->E_Barang->get_resep($id_resep);
            if($getresep->stock != 0){
            $data = array(
                'id'=>$getresep->id_resep,
                'name'=>$getresep->namaresep,
                'price' =>$getresep->harga,
                'qty'=> 1
                );
            $this->cart->insert($data);
            redirect('C_Member/view_cart');
        }
     else {
        ?><script language="JavaScript">alert('Stock telah habis');
        document.location='<?php echo site_url('C_Member/index');?>'</script><?php
    }
    }
}
    function check_out(){
        $data['datauser'] = $this->E_User->pilih_user($this->session->userdata('id'))->row();
        $is_processed = $this->E_Cart->checkout();
        if($is_processed){
            $this->cart->destroy();
            redirect('C_Member/view_cart');
        } else {
            $this->session->set_flashdata('error','Failed to processed your order, please try again!');
            redirect('C_Member/view_cart');
        } 
    }

    }
?>