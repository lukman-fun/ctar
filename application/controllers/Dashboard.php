<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MMain', 'main');
    }

    public function index(){
        $v['data'] = $this->main->get_dashboard()->result();
        $v['feedback'] = $this->main;
        template('admin/dashboard', 'Dashboard', $v);
    }

    public function feedback($id){
        $v['data'] = $this->main->get_feedback(['posting.id' => $id])->row();
        $v['komen'] = $this->main->get_komen($id)->result();
        template('admin/feedback', 'Feedback', $v);
    }

    public function add_feedback(){
        $data = $this->input->post();
        $this->main->add_komentar($data);
        redirect(base_url().'Dashboard/feedback/'.$data['posting_id']);
    }

    public function hapus($id){
        $imgPost = $this->db->get_where('posting', ['id' => $id])->row()->img_post;
        if($imgPost != null || $imgPost != ''){
            unlink('files/posting/' . $imgPost);
        }
        $this->db->delete('posting', ['id' => $id]);
        $this->db->delete('komentar', ['posting_id' => $id]);
        redirect(base_url().'Dashboard');
    }

}