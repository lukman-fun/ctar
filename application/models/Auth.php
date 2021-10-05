<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model{

    function login($data){
        return $this->db->get_where('users', $data);
    }

    function daftar($data){
        $this->db->insert('users', $data);
    }

}