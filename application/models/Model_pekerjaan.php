<?php
class model_pekerjaan extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_pekerjaan');
}

function tambah(){
    $data=array(
    'nama_pekerjaan'=>$this->input->post('nama_pekerjaan'),
);
    $this->db->insert('tb_pekerjaan',$data);
}

function edit(){
    $id= $this->input->post('id_pekerjaan');
    $data=array(
        'nama_pekerjaan' => $this->input->post('nama_pekerjaan'),
    );
    $this->db->where('id_pekerjaan',$id);
    $this->db->update('tb_pekerjaan',$data);   
}

function get_one($id){
    $indeks= array('id_pekerjaan'=>$id);
    return $this->db->get_where('tb_pekerjaan',$indeks);
}

function delete($id){
    $this->db->where('id_pekerjaan',$id);
    $this->db->delete('tb_pekerjaan');
}

}