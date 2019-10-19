<?php
class UserModel extends CI_Model{
    public function getUser(){

        $this->load->database();
        // $q = $this->db->query("SELECT * from user_account");
        $q = $this->db->get("user_account");
        return $q->result_array(); 
    }
}