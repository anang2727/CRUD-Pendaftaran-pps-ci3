<?php
class calon extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_calon');
        $this->load->model('model_desa');
        $this->load->model('model_kec');
        $this->load->model('model_kab');
        $this->load->model('model_pekerjaan');
        $this->load->model('model_pendidikan');
    }

    function index(){
        $data['record'] = $this->model_calon->getDataCalon();
        $this->load->view('calon/lihat_data',$data);
    }

    // function tambah() {
    //     if(isset($_POST['submit'])){
    //     $this->model_calon->tambah();
    //     redirect('calon');
    // }
    // else {
    //     $this->load->view('calon/form_input');
        
    // }
    // }

    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'tpt_lahir' => $this->input->post('tpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'bpjs_kes' => $this->input->post('bpjs_kes'),
                'bpjs_ket' => $this->input->post('bpjs_ket'),
                'npwp' => $this->input->post('npwp'),
                'no_hp' => $this->input->post('no_hp'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'domisili' => $this->input->post('domisili'),
                'alamat' => $this->input->post('alamat'),
                'provinsi' => $this->input->post('provinsi'),
                'posisi' => $this->input->post('posisi'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'id_kab' => $this->input->post('id_kab'),
                'id_kec' => $this->input->post('id_kec'),
                'id_desa' => $this->input->post('id_desa'),
                'id_pekerjaan' => $this->input->post('id_pekerjaan'),
            );

            $this->db->insert('tb_calon', $data);
            redirect('calon');
        } else {
            $this->load->model('model_calon');
            $this->load->model('model_kec');
            $this->load->model('model_kab');
            $this->load->model('model_desa');
            $this->load->model('model_pekerjaan');
            $this->load->model('model_pendidikan');
            $data['rec_calon'] = $this->model_calon->getDataCalon();
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->getDataDesa();
            $data['rec_pekerjaan'] = $this->model_pekerjaan->tampilkan_data();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();
            $this->load->view('calon/form_input', $data);

        }
    }
    // Foto
    function upload() {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'tpt_lahir' => $this->input->post('tpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'bpjs_kes' => $this->input->post('bpjs_kes'),
                'bpjs_ket' => $this->input->post('bpjs_ket'),
                'npwp' => $this->input->post('npwp'),
                'no_hp' => $this->input->post('no_hp'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'domisili' => $this->input->post('domisili'),
                'alamat' => $this->input->post('alamat'),
                'provinsi' => $this->input->post('provinsi'),
                'posisi' => $this->input->post('posisi'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'id_kab' => $this->input->post('id_kab'),
                'id_kec' => $this->input->post('id_kec'),
                'id_desa' => $this->input->post('id_desa'),
                'id_pekerjaan' => $this->input->post('id_pekerjaan'),
            );
            $this->db->where('id_calon', $key);
            $this->db->update('tb_calon', $data);
            redirect('calon');
        } else {
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->getDataDesa();
            $data['rec_pekerjaan'] = $this->model_pekerjaan->tampilkan_data();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();
            $id = $this->uri->segment(3);
            $data['rec_calon'] = $this->model_calon->getOnecalon($id)->row_array();
            $this->load->view('calon/form_edit', $data);
        }
    }


    function delete() {
        $id = $this->uri->segment(3);
        $this->model_calon->delete($id); 
        redirect('calon');
    }

}
