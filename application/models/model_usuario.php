<?php
defined('BASEPATH') OR exit('No direct scrip acess allowed');

class Model_usuario extends CI_Model {
    function login($email, $senha) {
        $this->load->database('adminlte');
        $this->db->select('id', 'login');
        $this->db->from('adminlte');
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $this->db->where('status', '1');
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