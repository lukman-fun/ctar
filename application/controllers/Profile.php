<?php
class Profile extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('MMain', 'main');
        $config = [
            'upload_path' => 'files/profile',
            'allowed_types' => 'png|jpg|jpeg'
        ];
        $this->load->library('upload', $config);
    }

    public function index(){
        $v['data'] = $this->main->get_user($this->session->id)->row();
        $this->load->view('users/profile', $v);
    }

    public function update(){
        if($_FILES['foto']['name'] != ''){
            if($this->upload->do_upload('foto')){
                $img = $this->upload->data('file_name');
            }else{
                $img = $this->upload->display_errors();
            }
            $this->main->up_user(['foto' => $img], $this->session->id);
            $this->session->foto = $img;
        }

        $this->main->up_user($this->input->post(), $this->session->id);
        redirect(base_url().'Profile');
    }

    public function password(){
        $this->load->view('users/password');
    }

    public function updatepassword(){
        $sql = $this->main->get_user($this->session->id)->row();
        if(password_verify($this->input->post('password_lama'), $sql->password)){
            if($this->input->post('password_baru') == $this->input->post('password_konfirmasi')){
                $this->main->up_user(['password' => password_hash($this->input->post('password_konfirmasi'), PASSWORD_DEFAULT)], $this->session->id);
                redirect(base_url().'Profile/password');
            }else{
                echo "<script>
                alert('Password konfirmas tidak sama.');
                window.location.href='" . base_url() . "Profile/password';
                </script>";
            }
        }else{
            echo "<script>
                alert('Password lama tidak terdaftar.');
                window.location.href='" . base_url() . "Profile/password';
                </script>";
        }
    }

}