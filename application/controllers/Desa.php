<?php
class desa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_desa');
        $this->load->model('model_kec');
        $this->load->model('model_kab');
    }

    function index()
    {
        $data['record'] = $this->model_desa->getDatadesa();
        $this->load->view('desa/lihat_data', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_desa' => $this->input->post('nama_desa'),
                'id_kec' => $this->input->post('id_kec'),
                'id_kab' => $this->input->post('id_kab')
            );

            $this->db->insert('tb_desa', $data);
            redirect('desa');
        } else {
            $this->load->model('model_desa');
            $this->load->model('model_kec');
            $this->load->model('model_kab');
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->getDataDesa();
            $this->load->view('desa/form_input', $data);
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $id = $this->input->post('id_desa');
            $data = array(
                'nama_desa' => $this->input->post('nama_desa'),
                'id_kec' => $this->input->post('id_kec'),
                'id_kab' => $this->input->post('id_kab'),
            );

            $this->db->where('id_desa', $id);
            $this->db->update('tb_desa', $data);
            redirect('desa');
        } else {
            $id = $this->uri->segment(3);
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->get_one($id)->row_array();
            $this->load->view('desa/form_edit', $data);
        }
    }

    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_desa', $id);
        $this->db->delete('tb_desa');
        redirect('desa');
    }
}
