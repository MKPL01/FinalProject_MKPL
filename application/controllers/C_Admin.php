<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class C_Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $autoload['libraries'] = array('database', 'session', 'xmlrpc');
        $autoload['helper'] = array('url', 'file');  
    }
     public function index() {
            $data['judul']="Admin";
            $data['content']="Admin/home_admin";	
            $data['user'] = $this->E_User->pilih_user($this->session->userdata('id'));
            $this->load->view('Admin/home_admin',$data);
    }

    public function inputbarang() {
        $this->load->view('Admin/home_admin_input_barang');
    }
    public function listresep() {
        $data['resep'] = $this->E_Barang->list_resepall();
        $this->load->view('Admin/list_resep', $data);
    }
    public function list_order() {
        $data['pemesanan'] = $this->E_Barang->list_pesananall();
        $this->load->view('Admin/list_pemesanan', $data);
    }
    public function delete_barang() {
        $data['barang'] = $this->E_Barang->list_barangjadi();
        $this->load->view('admin/v_deletebarang', $data);
    }
     public function edit_stock($id_resep){
        $stock =$this->input->post('stock');
       
            $this->E_Barang->update_stock('resep',array("stock" => $stock),$id_resep);
        
        ?><script language="JavaScript">alert('Update Stock Success');
        document.location='<?php echo site_url('C_Admin/listresep');?>'</script><?php
        //redirect('C_Member/listuserview');
    }
     public function update_stock($id_resep){
        $data['resep'] = $this->E_Barang->pilih_resep($id_resep)->row();
        $this->load->view('Admin/detailresep',$data);
    } 

       public function posting($id){
            $id_user = $id;
            $namaresep =$this->input->post('namaresep');
            $harga =$this->input->post('harga');
            $kategori =$this->input->post('kategori');
            $stock =$this->input->post('stock');
			$detailbahan =$this->input->post('detailbahan');
            $deskripsi =$this->input->post('deskripsi');
            
            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\rpl2\assets\images\resep';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'resep_'.$namaresep;
            $this->upload->overwrite= true;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userfile')){

                ?><script language="JavaScript">alert('Harap mengisi semua data.');
                document.location='<?php echo site_url('C_Admin/inputbarang') ?>'</script><?php

            }
            else{
                $tipe='';
                $upload_data = $this->upload->data();
                if($upload_data['image_type']=='jpeg'|| $upload_data['image_type']=='JPG'){
                    $tipe='jpg';
                }else if($upload_data['image_type']=='png'|| $upload_data['image_type']=='PNG'){
                    $tipe='png';
                }
             }
                //masukkan ke database
                $gambar = 'assets/images/resep/resep_'.$namaresep.'.'.$tipe;
               $cek = $this->E_Barang->addresep('resep',array ("id_user"=>$id_user,"namaresep" => $namaresep, "harga" => $harga,"kategori" => $kategori, "stock" => $stock, "detailbahan" => $detailbahan, "deskripsi" => $deskripsi, "gambar" => $gambar));
                if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Berhasil menambahkan resep!');
                        document.location='<?php echo site_url('C_Admin/index') ?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Gagal Ditambahkan');
                        document.location='<?php echo site_url('C_Admin/inputbarang') ?>'</script><?php
                }
            }
    }
    
?>