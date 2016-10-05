<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	
	public function index()
	{
            $this->load->view('includes/header');
            $this->load->view('includes/menu');
            $this->load->view('listarUsuarios');
            $this->load->view('includes/footer');
                
	}
        public function cadastro()
	{
            $this->load->view('includes/header');
            $this->load->view('includes/menu');
            $this->load->view('cadastrarUsuarios');
            $this->load->view('includes/footer');
                
	}
         public function cadastrar()
	{
           $data['nomeUsuario'] = $this->input->post('nomeUsuario');
           $data['userName'] = $this->input->post('userName');
           $data['email'] = $this->input->post('email');
           $data['empresa'] =$this->input->post('empresa');
           $data['status'] = $this->input->post('status');
           $data['nivel'] = $this->input->post('nivel');
           $data['senha'] = $this->input->post('senha');
           
            if($this->db->insert('Usuarios',$data)){
                redirect('usuario');
            }
                
        }	
}
