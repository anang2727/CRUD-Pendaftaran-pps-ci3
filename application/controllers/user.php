<?php
class user extends ci_controller{
    
   function __construct() {
        parent::__construct();
        $this->load->model('model_user');
        chek_session();
    }
    
    function index()
    {
        $data['record']=  $this->model_user->tampildata();
        $this->load->view('user/lihat_data',$data);
        // $this->template->load('template','user/lihat_data',$data);
    }
    
    function tambah()
    {
        if(isset($_POST['submit'])){
            // proses data
            // $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            $data       =  array(   
                // 'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            $this->db->insert('tb_user',$data);
            redirect('user');
        }
        else{
            $this->load->view('user/form_input');
            // $this->template->load('template','user/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            // $nama       =  $this->input->post('nama',true);
            $username   =  $this->input->post('username',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(
                    //    'nama_lengkap'=>$nama,
                                    'username'=>$username);
            }
            else{
                  $data =  array(
                    //    'nama_lengkap'=>$nama,
                                    'username'=>$username,
                                    'password'=>md5($password));
            }
             $this->db->where('id_user',$id);
             $this->db->update('tb_user',$data);
             redirect('user');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_user->get_one($id)->row_array();
            $this->load->view('user/form_edit',$data);
            // $this->template->load('template','user/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->db->where('id_user',$id);
        $this->db->delete('tb_user');
        redirect('user');
    }
}