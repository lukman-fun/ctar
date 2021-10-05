<?php
class MMain extends CI_Model{

    function get(){
        return $this->db->select('users.id as usersId, users.*, posting.*, posting.id as postingId')->join('users', 'users.id=posting.users_id', 'inner')->get('posting');
    }

    function get_komen($posting_id){
        return $this->db->join('users', 'users.id=komentar.users_id', 'inner')->get_where('komentar', ['posting_id' => $posting_id]);
    }

    function add_artikel($data){
        $this->db->insert('posting', $data);
    }

    function add_komentar($data){
        $this->db->insert('komentar', $data);
    }

    function get_user($id){
        return $this->db->get_where('users', ['id' => $id]);
    }

    function up_user($data, $id){
        $this->db->update('users', $data, ['id' => $id]);
    }

    function get_user_by($data){
        return $this->db->get_where('users', $data);
    }

    //Dashboard
    function get_dashboard(){
        return $this->db->select('users.nama, posting.*')->join('users', 'posting.users_id=users.id', 'inner')->get('posting');
    }

    function get_feedback($where){
        return $this->db->select('posting.id as postingId, users.*, posting.*')->join('users', 'posting.users_id=users.id', 'inner')->get_where('posting', $where);
    }

    function valid_feedback($posting_id){
        return $this->db->get_where('komentar', ['users_id' => $this->session->id_admin, 'posting_id' => $posting_id])->num_rows();
    }
}