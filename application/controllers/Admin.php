<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        // Models
            // $this->load->model('M_App');
        // Helper URL
            // $this->load->helper('url');
        // Data login
            $this->session->userdata();

            if($this->session->userdata('id_admin') == ""){
                redirect(base_url("Login"));
            }
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/sidebar');
        $this->load->view('Admin/Layout/navbar');
    }

    public function beranda()
	{
        redirect('/Admin/dataadmindesa');
    }

    // Create =======================================================================================================
        public function tambahdatadesa(){
            $this->load->view('Admin/Page/Desa/tambah');
            $this->load->view('Admin/Layout/footer');
        }
        public function tambahdataadmindesa(){
            $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();

            $this->load->view('Admin/Page/AdminDesa/tambah', $data);
            $this->load->view('Admin/Layout/footer');
        }
        // Proses Insert Database
        public function prosestambahdatadesa(){
            $nama_desa = $this->input->post('nama_desa');
            $nama_kepala_desa = $this->input->post('nama_kepala_desa');
            $alamat_desa = $this->input->post('alamat_desa');
            $kecamatan_desa = $this->input->post('kecamatan_desa');
            $kabupaten_desa = $this->input->post('kabupaten_desa');
            $email_desa = $this->input->post('email_desa');
            $telepon_desa = $this->input->post('telepon_desa');

            $data = array(
                'nama_desa' => $nama_desa,
                'nama_kepala_desa' => $nama_kepala_desa,
                'alamat_desa' => $alamat_desa,
                'kecamatan_desa' =>$kecamatan_desa,
                'kabupaten_desa' => $kabupaten_desa,
                'email_desa' => $email_desa,
                'telepon_desa' => $telepon_desa,
            );
            $this->M_App->simpan_data('tb_desa', $data);
            redirect('Admin/datadesa/');
        }
        
        public function prosestambahdataadmindesa(){
            $nip = $this->input->post('nip');
            $id_desa = $this->input->post('id_desa');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password_md5 = md5($password);

            $data = array(
                'nip' => $nip,
                'id_desa' => $id_desa,
                'username' => $username,
                'password' => $password_md5,
                'password_desk' => $password,
            );
            $this->M_App->simpan_data('tb_admindesa', $data);
            redirect('Admin/dataadmindesa/');
        }
    // Read =========================================================================================================
        public function datadesa()
        {
            $data['tb_desa'] = $this->M_App->tampil_data('tb_desa','id_desa','ASC')->result();

            $this->load->view('Admin/Page/Desa/data', $data);
            $this->load->view('Admin/Layout/footer');
        }
        public function dataadmindesa()
        {
            $data['tb_admindesa'] = $this->M_App->tampil_data_join('tb_admindesa', 'tb_desa', 'tb_desa.id_desa = tb_admindesa.id_desa', 'id_admin','ASC')->result();

            $this->load->view('Admin/Page/AdminDesa/data', $data);
            $this->load->view('Admin/Layout/footer');
        }
    // Update =======================================================================================================
        // Desa
        function edit_desa($id_desa){
            $where = array('id_desa' => $id_desa);
            $data['tb_desa'] = $this->M_App->edit_data('tb_desa',$where)->result();
            $this->load->view('Admin/Page/Desa/edit',$data);
            $this->load->view('Admin/Layout/footer');
        }
        function prosesubahdatadesa(){
            $id_desa = $this->input->post('id_desa');
            $nama_desa = $this->input->post('nama_desa');
            $nama_kepala_desa = $this->input->post('nama_kepala_desa');
            $alamat_desa = $this->input->post('alamat_desa');
            $kecamatan_desa = $this->input->post('kecamatan_desa');
            $kabupaten_desa = $this->input->post('kabupaten_desa');
            $email_desa = $this->input->post('email_desa');
            $telepon_desa = $this->input->post('telepon_desa');

            $data = array(
                'nama_desa' => $nama_desa,
                'nama_kepala_desa' => $nama_kepala_desa,
                'alamat_desa' => $alamat_desa,
                'kecamatan_desa' =>$kecamatan_desa,
                'kabupaten_desa' => $kabupaten_desa,
                'email_desa' => $email_desa,
                'telepon_desa' => $telepon_desa,
            );
            $where = array('id_desa' => $id_desa);
            $this->M_App->proses_update($where, $data, 'tb_desa');
            redirect('Admin/datadesa');   
        }

    // Delete =======================================================================================================
        function hapus_desa($id_desa){
            $where = array('id_desa' => $id_desa);
            $this->M_App->hapus_data('tb_desa', $where);     
            $this->M_App->hapus_data('tb_admindesa', $where);
            // $this->M_App->hapus_data('tb_penduduk', $where);
            redirect('Admin/datadesa/');
        }
        function hapus_admindesa($id_admin){
            $where = array('id_admin' => $id_admin);
            $this->M_App->hapus_data('tb_admindesa', $where);
            redirect('Admin/dataadmindesa/');
        }
    // Upload data ==================================================================================================
        // Berkas Penduduk
            // Upload Logo Desa
            function upload_logo_desa(){
                $id_desa = $this->input->post('id_desa');
                // Upload Gambar
                $config['upload_path']      = 'asset/img/logo';
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 999999999;
                $config['max_width']        = 999999999;
                $config['max_height']       = 999999999;
            
                $this->load->library('upload',$config);
        
                if (!$this->upload->do_upload('upload_logo_desa')) {
                    $pesan = $this->upload->display_errors();
                }
                $berkas = $this->upload->data('file_name');
        
                $data = array(
                    'logo_desa' => $berkas,
                );
                $where = array('id_desa' => $id_desa);
                $this->M_App->proses_update($where, $data, 'tb_desa');
                redirect('Admin/datadesa');
            }

            function hapus_file_logo($id){
                $where = array('id_desa' => $id);
                $data = array(
                    'logo_desa' => null,
                );

                
                $data2 = $this->M_App->getDataByID($where, 'tb_desa')->row();
                $nama = 'asset/img/logo/'.$data2->logo_desa;
                
                if (is_readable($nama) && unlink($nama)) { 
                    $delete = $this->M_App->hapus_file($where, $data, 'tb_desa');
                    echo "Berhasil";
                    redirect('Admin/datadesa');
                }else {
                    echo "Gagal";
                }
            }

}
