<?php
class model_kab extends CI_Model{

function tampilkan_data(){
    return $this->db->get('tb_kab');
}

function tambah(){
    $data=array(
    'nama_kab'=>$this->input->post('nama_kab'),
);
    $this->db->insert('tb_kab',$data);
}

function edit(){
    $id= $this->input->post('id_kab');
    $data=array(
        'nama_kab' => $this->input->post('nama_kab'),
    );
    $this->db->where('id_kab',$id);
    $this->db->update('tb_kab',$data);   
}

function get_one($id){
    $indeks= array('id_kab'=>$id);
    return $this->db->get_where('tb_kab',$indeks);
}

function delete($id){
    $this->db->where('id_kab',$id);
    $this->db->delete('tb_kab');
}

}