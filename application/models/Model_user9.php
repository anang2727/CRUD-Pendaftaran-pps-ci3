<?php
class model_user extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_user');
}

function tambah(){
    $data=array(
    'username'=>$this->input->post('username'),
    'password'=>$this->input->post('password'),
);
    $this->db->insert('tb_user',$data);
}

function edit(){
    $id= $this->input->post('id_user');
    $data=array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
    );
    $this->db->where('id_user',$id);
    $this->db->update('tb_user',$data);   
}

function get_one($id){
    $indeks= array('id_user'=>$id);
    return $this->db->get_where('tb_user',$indeks);
}

function delete($id){
    $this->db->where('id_user',$id);
    $this->db->delete('tb_user');
}

}