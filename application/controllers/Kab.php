<?php
class kab extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_kab');
    }

    function index(){
        $data['record'] = $this->model_kab->tampilkan_data();
        $this->load->view('kab/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_kab->tambah();
            redirect('kab');
        }
        else {
            $this->load->view('kab/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_kab->edit();
            redirect('kab');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_kab->get_one($id)->row_array();
            $this->load->view('kab/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_kab->delete($id);
        redirect('kab');
        }   
    }