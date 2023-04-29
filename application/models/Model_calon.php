<?php
class model_calon extends CI_Model
{
    // td = tabel desa (tb_desa)
    // tk = tabel kecamatan (tb_kec)
    // tbk = tabel kabupaten (tb_kab)
    // tker = tabel pekerjaan (tb_pekerjaan)
    //  tpen = tabel pendidikan (tb_pendidikan)
    //  tcl = tabel calon (tb_calon)

    function getDataCalon()
    {
        $query = "SELECT * FROM tb_calon as tcl, tb_kec as tk, tb_kab as tbk, tb_desa as td, tb_pendidikan as tpen, tb_pekerjaan as tker
        WHERE tcl.id_kec = tk.id_kec
        AND tcl.id_kab = tbk.id_kab
        AND tcl.id_desa = td.id_desa
        AND tcl.id_pekerjaan = tker.id_pekerjaan
        AND tcl.id_pendidikan = tpen.id_pendidikan";
        return $this->db->query($query);
    }


    function getOneCalon($id)
    {
        $query = "SELECT * FROM tb_calon as tcl, tb_kec as tk, tb_kab as tbk, tb_desa as td, tb_pendidikan as tpen, tb_pekerjaan as tker
        WHERE tcl.id_kec = tk.id_kec 
        AND tcl.id_kab = tbk.id_kab
        AND tcl.id_desa = td.id_desa
        AND tcl.id_pekerjaan = tker.id_pekerjaan
        AND tcl.id_pendidikan = tpen.id_pendidikan
             AND tcl.id_calon='" . $id . "'";
        return $this->db->query($query);
    }

    function get_one($id)
    {
        $indeks = array('id_calon' => $id);
        return $this->db->get_where('tb_calon', $indeks);
    }



    function delete($id)
    {
        $this->db->where('id_calon', $id);
        $this->db->delete('tb_calon');
    }
}
