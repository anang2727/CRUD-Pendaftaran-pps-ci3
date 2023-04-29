<?php
class model_desa extends CI_Model
{

    function getDataDesa()
    {
        $query = "SELECT * FROM tb_desa as td, tb_kec as tk, tb_kab as tbk
        WHERE tk.id_kec = td.id_kec 
        AND tbk.id_kab = td.id_kab";
        return $this->db->query($query);
    }

    // function tambah()
    // {
    //     $data = array(
    //         'nama_desa' => $this->input->post('nama_desa'),
    //         'id_kec' => $this->input->post('id_kec'),
    //         'id_kab' => $this->input->post('id_kab')
    //     );
    //     $this->db->insert('tb_desa', $data);
    // }

    // function edit()
    // {
    //     $id = $this->input->post('id_desa');
    //     $data = array(
    //         'nama_desa' => $this->input->post('nama_desa'),
    //         'id_kec' => $this->input->post('id_kec'),
    //         'id_kab' => $this->input->post('id_kab'),
    //     );
    //     $this->db->where('id_desa', $id);
    //     $this->db->update('tb_desa', $data);
    // }

    // function getOneDesa($id)
    // {
    //         $query = "SELECT * FROM tb_desa as td, tb_kec as tk, tb_kab as tbk
    //         WHERE tk.id_kec = td.id_kec AND tbk.id_kab = td.id_kab'" . $id . "'";
    //         return $this->db->query($query);
    // }

    function getOneDesa($id)
    {
            $query = "SELECT * FROM tb_desa as tpet, tb_kec as tk, tb_kab as tkb
            WHERE tpet.id_kec = tk.id_kec AND tpet.id_kab = tkb.id_kab AND tpet.id_desa='" . $id . "'";
            return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('id_desa' => $id);
        return $this->db->get_where('tb_desa', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_desa', $id);
        $this->db->delete('tb_desa');
    }

    // function ambilDataRekap($t_tahun)
    // {

    //     $query = "SELECT nama_desa, id_kec FROM tb_desa WHERE nama_desa LIKE '$t_tahun'";
    //     return $this->db->query($query);
    // }

    // function tampilkan_data_paging($halaman, $batas)
    // {
    //     $query = " SELECT *
    //             FROM tb_desa AS td,tb_kec AS tk
    //             WHERE td.id_kec=tk.id_kec limit $halaman,$batas";
    //     return $this->db->query($query);
    // }

    // function cari()
    // {
    //     $keyword=$this->input->post('keyword',true);
    //     $this->db->like('nama_desa','$keyword');
    //     return $this->db->get('tb_desa')->result_array();
    // }
}
