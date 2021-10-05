<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Auth');
    }

    public function login(){
        $this->load->view('users/auth');
    }

    public function do_login(){
        $req=$this->input;
        $login=$this->Auth->login(['email'=>$req->post('email'), 'role' => 'member']);
        if($login->num_rows()>0){
            $rows=$login->row();
            if(password_verify($req->post('password'), $rows->password)){
                $this->session->set_userdata('id', $rows->id);
                $this->session->set_userdata('nama', $rows->nama);
                $this->session->set_userdata('foto', $rows->foto);
                redirect(base_url());
            }else{
                echo "<script>
                alert('Password anda salah.');
                window.location.href='" . base_url() . "Auth';
                </script>";
            }
        }else{
            echo "<script>
                alert('Email dan password anda salah.');
                window.location.href='" . base_url() . "Auth';
                </script>";
        }
    }

    public function do_daftar(){
        $req=$this->input;
        if($this->Auth->login(['email'=>$req->post('email')])->num_rows()==0){
            $this->Auth->daftar(array_merge($req->post(), ['password' => password_hash($req->post('password'), PASSWORD_DEFAULT), 'foto' => '', 'role' => 'member']));
            echo "<script>
                alert('Pendaftaran akun berhasil, Silahkan login.');
                window.location.href='" . base_url() . "Auth';
                </script>";
        }else{
            echo "<script>
                alert('Pendaftaran akun gagal, Email sudah di gunakan, Silahkan mencoba kembali.');
                window.location.href='" . base_url() . "Auth';
                </script>";
        }
    }

    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('foto');
        redirect('/Auth');
    }

}