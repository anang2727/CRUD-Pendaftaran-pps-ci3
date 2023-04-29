<?php
class model_biodata extends CI_Model
{
    // td = tabel desa (tb_desa)
    // tk = tabel kec (tb_kec)
    // tbk = tabel kab (tb_kab)
    // tker = tabel pekerjaan (tb_pekerjaan)
    //  tpen = tabel pendidikan (tb_pendidikan)
    //  tcl = tabel calon (tb_calon)

    function getDataBiodata()
    {
        $query = "SELECT * FROM tb_biodata as tbb, tb_calon as tcl, tb_kec as tk, tb_kab as tbk, tb_desa as td, tb_pendidikan as tpen
        WHERE tbb.id_calon = tcl.id_calon 
        AND tbb.id_pendidikan = tpen.id_pendidikan
        AND tbb.id_kec = tk.id_kec 
        AND tbb.id_kab = tbk.id_kab 
        AND tbb.id_desa = td.id_desa
        ";
        return $this->db->query($query);
    }


    function getOneBiodata($id)
    {
        $query = "SELECT * FROM tb_biodata as tbb, tb_calon as tcl, tb_kec as tk, tb_kab as tbk, tb_desa as td, tb_pendidikan as tpen
        WHERE tbb.id_calon = tcl.id_calon 
        AND tbb.id_pendidikan = tpen.id_pendidikan
        AND tbb.id_kec = tk.id_kec 
        AND tbb.id_kab = tbk.id_kab 
        AND tbb.id_desa = td.id_desa
             AND tbb.id_biodata='" . $id . "'";
        return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('id_biodata' => $id);
        return $this->db->get_where('tb_biodata', $indeks);
    }

    function delete($id)
    {
        $this->db->where('id_biodata', $id);
        $this->db->delete('tb_biodata');
    }

}
