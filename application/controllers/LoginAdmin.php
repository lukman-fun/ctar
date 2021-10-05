<?php
class LoginAdmin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Auth');
    }

    public function index(){
        $this->load->view('admin/auth/login');
    }

    public function do(){
        $req=$this->input;
        $login=$this->Auth->login(['email'=>$req->post('email'), 'role' => 'admin']);
        if($login->num_rows()>0){
            $rows=$login->row();
            if(password_verify($req->post('password'), $rows->password)){
                $this->session->set_userdata('id_admin', $rows->id);
                $this->session->set_userdata('nama_admin', $rows->nama);
                $this->session->set_userdata('foto_admin', $rows->foto);
                redirect(base_url().'Dashboard');
            }else{
                echo "<script>
                alert('Password anda salah.');
                window.location.href='" . base_url() . "LoginAdmin';
                </script>";
            }
        }else{
            echo "<script>
                alert('Email dan password anda salah.');
                window.location.href='" . base_url() . "LoginAdmin';
                </script>";
        }
    }

    public function logout(){
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('nama_admin');
        $this->session->unset_userdata('foto_admin');
        redirect(base_url() . 'LoginAdmin');
    }
}