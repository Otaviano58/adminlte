<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentica extends CI_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->model('model_usuario');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
                
    }

    function index() {        
        $this->form_validation->set_message('required','Campo %s obrigatório');
        $this->form_validation->set_rules('login','Usuário','trim|required');
        $this->form_validation->set_message('required','Campo %s obrigatório');
        $this->form_validation->set_rules('password','Senha','trim|required|callback_database');
        
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('view_login');
    }
        else {
            redirect('home/dashboard'. 'refresh');
        }
    }
    function database($senha) {
        $login = $this->input->post('login');
        var_dump('$login');
        var_dump('senha');
        $result = $this->model_usuario->login($login, $senha);
        $usuarioid='';
        $usuarionome = '';
        if($result) {
             return true;
        }
        else {
            return false;
        }
    }
}