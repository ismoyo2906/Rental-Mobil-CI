<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
//Cek Login
function login(){
		if($this->session->set_userdata('login') != "login")
			redirect(base_url().'welcome?pesan=belumlogin');
	}
}
	
function index(){
	$data['rental'] = $this->db->query("select * from rental order by no_transaksi desc limit 10")->result();
	$data['pelanggan'] = $this->db->query("select * from pelanggan order by no_pelanggan desc limit 10")->result();
	$data['mobil'] = $this->db->query("select * from mobil order by kode_mobil desc limit 10")->result();
	
$this->load->view("admin/header");
$this->load->view("admin/index",$data);
$this->load->view("admin/footer");
}
	
function mobil(){
	$data['mobil'] = $this->m_rental->get_data('mobil')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/mobil",$data);
	$this->load->view("admin/footer");
}
	
function tambah_mobil(){
	$data['kategori'] = $this->m_rental->get_data('kategori')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_mobil",$data);
	$this->load->view("admin/footer");
}

function tambah_mobil_act(){
	
}

function ganti_password(){
	$this->load->view("admin/header");
	$this->load->view("admin/ganti_password");
	$this->load->view("admin/footer");
}

function ganti_password_act(){
	$pass_baru = $this->input->post('pass_baru');
	$ulang_pass = $this->input->post('ualng_pass');
	
	$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
	$this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');
	if($this->form_validation->run() !=FALSE){
		$data = array('password' => md5($pass_baru));
		$w = array('id_admin' => $this->session->userdata('id'));
		$this->m_rental->update_data($w,$data,'admin');
		redirect(base_url().'admin/ganti_password?pesan=berhasil');
		
	}else{	$this->load->view("admin/header");
			$this->load->view("admin/ganti_password");
			$this->load->view("admin/footer");
}

}
	
function logout(){
	$this->session->sess_destroy();
	redirect(base_url().'welcome?pesan=logout');
}
}
?>