<?php
class biodata extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('model_biodata');
        $this->load->model('model_calon');
        $this->load->model('model_desa');
        $this->load->model('model_kec');
        $this->load->model('model_kab');
        $this->load->model('model_pendidikan');
    }

    function index(){
        $data['record'] = $this->model_biodata->getDataBiodata();
        $this->load->view('biodata/lihat_data',$data);
    }


    // fitur autonumber
    function auto() {
        $thn=date("Ym");
        $this->db->select('RIGHT(tb_biodata.no_pendaftaran,4) as no_pendaftaran', FALSE);
        $this->db->order_by('no_pendaftaran','DESC');
        $this->db->limit(1);
        $sql=$this->db->get('tb_biodata');

        if ($sql->num_rows() <> 0 ) {
            $data = $sql->row();
            $auto=intval($data->no_pendaftaran) + 1;

        } else {
            $auto = 1;
        }
        $limit = str_pad($auto,4,"0",STR_PAD_LEFT);
        $no_pendaftaran = $thn.$limit;
        return $no_pendaftaran;

    }




    function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'no_pendaftaran' => $this->auto(),
                'id_calon' => $this->input->post('id_calon'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
                'id_kab' => $this->input->post('id_kab'),
                'id_kec' => $this->input->post('id_kec'),
                'id_desa' => $this->input->post('id_desa'),
            );

            $this->db->insert('tb_biodata', $data);
            redirect('biodata');
        } else {
            $this->load->model('model_biodata');
            $this->load->model('model_calon');
            $this->load->model('model_kec');
            $this->load->model('model_kab');
            $this->load->model('model_desa');
            $this->load->model('model_pendidikan');
            $data['rec_biodata'] = $this->model_biodata->getDataBiodata();
            $data['rec_calon'] = $this->model_calon->getDataCalon();
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->getDataDesa();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();
            $this->load->view('biodata/form_input', $data);

        }
    }



    function edit()
    {
        if (isset($_POST['submit'])) {
            $key = $this->input->post('id');
            $data = array(
                // 'no_pendaftaran' => $this->input->post('no_pendaftaran'),
                'no_pendaftaran' => $this->auto(),

                'id_calon' => $this->input->post('id_calon'),
                'id_desa' => $this->input->post('id_desa'),
                'id_kec' => $this->input->post('id_kec'),
                'id_kab' => $this->input->post('id_kab'),
                'id_pendidikan' => $this->input->post('id_pendidikan'),
            );
            $this->db->where('id_biodata', $key);
            $this->db->update('tb_biodata', $data);
            redirect('biodata');
        } else {
            $data['rec_calon'] = $this->model_calon->getDataCalon();
            $data['rec_kab'] = $this->model_kab->tampilkan_data();
            $data['rec_kec'] = $this->model_kec->tampilkan_data();
            $data['rec_desa'] = $this->model_desa->getDataDesa();
            $data['rec_pendidikan'] = $this->model_pendidikan->tampilkan_data();

            $id = $this->uri->segment(3);
            $data['rec_biodata'] = $this->model_biodata->getOneBiodata($id)->row_array();
            $this->load->view('biodata/form_edit', $data);
        }
    }


    function delete() {
        $id = $this->uri->segment(3);
        $this->model_biodata->delete($id); 
        redirect('biodata');
    }

}
