<?php 

function template($view, $title, $data=null){
	get_instance()->load->view('admin/template/header', ['title'=>$title]);
	get_instance()->load->view($view, $data);
	get_instance()->load->view('admin/template/footer');
}

?>