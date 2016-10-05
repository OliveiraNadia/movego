<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        
        $this->load->view('includes/header');
        $this->load->view('includes/menu');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }
     public function login(){
            $this->load->view('includes/header');
            $this->load->view('includes/menuHome');
            $this->load->view('login');
            $this->load->view('includes/footer');
        }
        
        public function logar(){
            
            $email = $this->input->post('emailUsuarios');
            $senha = $this->input->post('senhaUsuarios');
            
            $this->db->where('emailUsuarios',$email);
            $this->db->where('senhaUsuarios',$senha);
            $this->db->where('statusUsuarios',1);
            $data['usuarios'] = $this->db->get('usuarios')->result();
            
            
            if(count($data['usuarios'])==1){
                $dados['nomeUsuarios'] =$data['nomeUsuarios'][0]->nomeUsuarios;
                $dados['idUsuarios'] =$data['idUsuarios'][0]->idUsuarios;
                $dados['tipoPerfil']=$data['tipoPerfil'][0]->tipoPerfil;
                $dados['logado']= true;
                $this->session->set_userdata($dados);
                
                if($this->tipoPerfil){
                    
                }
                redirect('inicial/areaAdministrador');
                
            }else{
                redirect('inicial');
            }
                
            }

    public function logout() {

        $this->session->sess_destroy();
        redirect('login');
    }

}
