<?php
class Main extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('MMain', 'main');
        $config = [
            'upload_path' => 'files/posting',
            'allowed_types' => 'png|jpg|jpeg'
        ];
        $this->load->library('upload', $config);
    }

    public function index(){
        $datas = [];
        foreach($this->main->get()->result() as $item){
            $item->komentar = $this->main->get_komen($item->postingId)->result();
            array_push($datas, $item);
        }
        $v['data'] = $datas;
        $this->load->view('users/main', $v);
    }

    public function add_artikel(){
        if($_FILES['img_post']['name'] != ''){
            if($this->upload->do_upload('img_post')){
                $img = $this->upload->data('file_name');
            }else{
                $img = json_encode($this->upload->display_errors());
            }
        }else{
            $img = '';
        }

        $data = array_merge($this->input->post(), ['img_post' => $img, 'users_id' => $this->session->id, 'create_at' => date('Y-m-d')]);
        $this->main->add_artikel($data);
       
        redirect(base_url());
    }

    public function add_komentar(){
        $data = $this->input->post();
        $this->main->add_komentar($data);
        redirect(base_url());
    }

    public function hapus($id){
        $imgPost = $this->db->get_where('posting', ['id' => $id])->row()->img_post;
        if($imgPost != null || $imgPost != ''){
            unlink('files/posting/' . $imgPost);
        }
        $this->db->delete('posting', ['id' => $id]);
        $this->db->delete('komentar', ['posting_id' => $id]);
        redirect(base_url());
    }
}