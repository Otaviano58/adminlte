<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentica extends CI_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->model('model_usuario', TRUE);
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
                
    }

    function index() {
    
        $this->form_validation->set_message('required'.'Campo %s obrigatório');
        $this->form_validation->set_rule('email'.'E-mail ou Usuário'.'trim|required');
        $this->form_validation->set_rule('password'.'Senha'.'trim|required|callback_check_database');
    }
}