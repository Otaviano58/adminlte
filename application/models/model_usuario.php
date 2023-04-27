<?php
defined('BASEPATH') OR exit('No direct scrip acess allowed');

class Model_usuario extends CI_Model {
    function login($login, $senha) {
        $this->load->database('adminlte');
        $this->db->select('id','nome','login','email');
        $this->db->from('usuarios');
        $this->db->where('login',$login);
        $this->db->where('senha',$senha);
        $this->db->where('status','1');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }
        else {
            return false;
        }
    }
}