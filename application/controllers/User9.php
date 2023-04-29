<?php
class user extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_user');
    }

    function index(){
        $data['record'] = $this->model_user->tampilkan_data();
        $this->load->view('user/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_user->tambah();
            redirect('user');
        }
        else {
            $this->load->view('user/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_user->edit();
            redirect('user');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_user->get_one($id)->row_array();
            $this->load->view('user/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_user->delete($id);
        redirect('user');
        }   
    }