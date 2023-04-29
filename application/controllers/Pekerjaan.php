<?php
class pekerjaan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_pekerjaan');
    }

    function index(){
        $data['record'] = $this->model_pekerjaan->tampilkan_data();
        $this->load->view('pekerjaan/lihat_data',$data);
    }

    function tambah() {
        if(isset($_POST['submit'])){
            $this->model_pekerjaan->tambah();
            redirect('pekerjaan');
        }
        else {
            $this->load->view('pekerjaan/form_input');
        }
    }

    function edit() {
        if(isset($_POST['submit'])){
            $this->model_pekerjaan->edit();
            redirect('pekerjaan');
        }
        else {
            $id = $this->uri->segment(3);
            $data['record']=$this->model_pekerjaan->get_one($id)->row_array();
            $this->load->view('pekerjaan/form_edit',$data);
        }
    }

    function delete() {
        $id = $this->uri->segment(3);
        $this->model_pekerjaan->delete($id);
        redirect('pekerjaan');
        }   
    }