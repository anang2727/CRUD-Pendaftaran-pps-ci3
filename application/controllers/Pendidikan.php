<?php
class pendidikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_pendidikan');
    }

    function index()
    {
        $data['record'] = $this->model_pendidikan->tampilkan_data();
        $this->load->view('pendidikan/lihat_data', $data);
    }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_pendidikan' => $this->input->post('nama_pendidikan'),
                'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan')
            );

            $this->db->insert('tb_pendidikan', $data);
            redirect('pendidikan');
        } else {
            $this->load->model('model_pendidikan');
            $data['record'] = $this->model_pendidikan->tampilkan_data();
            $this->load->view('pendidikan/form_input', $data);
        }
    }
    function edit()
    {
        if (isset($_POST['submit'])) {
            $id = $this->input->post('id');
            $data = array(
                'nama_pendidikan' => $this->input->post('nama_pendidikan'),
                'tingkat_pendidikan' => $this->input->post('tingkat_pendidikan')
            );


            $this->db->where('id_pendidikan', $id);
            $this->db->update('tb_pendidikan', $data);
            redirect('pendidikan');
        } else {
            $id = $this->uri->segment(3);
            $data['record'] = $this->model_pendidikan->get_one($id)->row_array();
            $this->load->view('pendidikan/form_edit', $data);
        }
    }

    function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->db->where('id_pendidikan', $id);
        $this->db->delete('tb_pendidikan');
        redirect('pendidikan');
    }
}
