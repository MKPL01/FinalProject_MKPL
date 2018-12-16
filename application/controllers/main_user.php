<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
         // $data['barang'] = $this->E_Barang->list_barangjadi();
		 $this->load->view('home');
	}
	
	public function daftar(){
			$this->load->view('register');
	}
     public function filter_kategoriindonesia() {
        $data['resep'] = $this->E_Barang->list_indonesia();
        $this->load->view('kategoriindonesia',$data);
    } 

     public function filter_kategoricina() {
        $data['resep'] = $this->E_Barang->list_cina();
        $this->load->view('kategoricina',$data);
    }

     public function filter_kategoriwestern() {
        $data['resep'] = $this->E_Barang->list_western();
        $this->load->view('kategoriwestern',$data);
    }

	public function adduser(){
		$username =$this->input->post('username'); 
        $first_name =$this->input->post('first_name'); 
       	$last_name =$this->input->post('last_name');
       	$email =$this->input->post('email');
        $password =md5($this->input->post('password'));
        $mobile_number =$this->input->post('mobile_number');
        $level =$this->input->post('level');
        $alamat =$this->input->post('alamat');
        $kecamatan=$this->input->post('kecamatan');
                //masukkan ke database
                 $cek = $this->E_User->add_user('user',array ( "username" => $username,"first_name" => $first_name, "last_name" => $last_name, "alamat" => $alamat, "kecamatan" => $kecamatan, "email" => $email, "password" => $password, "mobile_number" => $mobile_number, "level" => $level));
                  if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Berhasil signup');
                        document.location='<?php echo site_url('C_Login/masuk');?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Gagal Ditambah');
                        document.location='<?php echo site_url();?>'</script><?php
                }
            }
    public function lihatdetailresep($id_resep){
        $data['resep'] = $this->E_Barang->pilih_resep($id_resep)->row();
        $this->load->view('detailresep',$data);
    } 
        
        }
?>
             