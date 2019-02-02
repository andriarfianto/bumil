<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Bahan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bahan_model');
    }

    public function index()
    {
        $data['bahans'] = $this->bahan_model->getAll();
        $this->load->view('admin/bahan/list_bahan', $data);
    }

    public function detail($id = null)
    {
        $data['bahan'] = $this->bahan_model->getById($id);
        if (!$data['bahan']) show_404();

        $this->load->view('admin/bahan/detail_bahan', $data);
    }

    public function add()
    {
        $data = array(
            'nama_bahan' => $this->input->post('nama_bahan'),
            'berat_takaran' => $this->input->post('berat_takaran'),
            'golongan' => $this->input->post('golongan'),
            'energi_bahan' => $this->input->post('energi_bahan'),
            'karbohidrat_bahan' => $this->input->post('karbohidrat_bahan'),
            'protein_bahan' => $this->input->post('protein_bahan'),
            'lemak_bahan' => $this->input->post('lemak_bahan'),
        );

        $this->form_validation->set_rules('nama_bahan', 'Nama Bahan', 'required');
        $this->form_validation->set_rules('berat_takaran', 'Berat Takaran', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('energi_bahan', 'Energi Bahan', 'required');
        $this->form_validation->set_rules('karbohidrat_bahan','Karbohidrat Bahan','required');
        $this->form_validation->set_rules('protein_bahan', 'Protein Bahan', 'required');
        $this->form_validation->set_rules('lemak_bahan', 'Lemak Bahan', 'required');

        if ($this->form_validation->run()) {
            $this->bahan_model->save($data);

            $this->session->set_flashdata('success', 'Data bahan berhasil ditambah');

            redirect(base_url('admin/bahan'));
        }

        $this->load->view('admin/bahan/new_bahan', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/bahan/');

        $data['bahan'] = $this->bahan_model->getById($id);
        if (!$data['bahan']) show_404();

        $this->form_validation->set_rules('nama_bahan', 'Nama Bahan', 'required');
        $this->form_validation->set_rules('berat_takaran', 'Berat Takaran', 'required');
        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('energi_bahan', 'Energi Bahan', 'required');
        $this->form_validation->set_rules('karbohidrat_bahan','Karbohidrat Bahan','required');
        $this->form_validation->set_rules('protein_bahan', 'Protein Bahan', 'required');
        $this->form_validation->set_rules('lemak_bahan', 'Lemak Bahan', 'required');

        if ($this->form_validation->run()) {
            $post_data = array(
                'nama_bahan' => $this->input->post('nama_bahan'),
                'berat_takaran' => $this->input->post('berat_takaran'),
                'golongan' => $this->input->post('golongan'),
                'energi_bahan' => $this->input->post('energi_bahan'),
                'karbohidrat_bahan' => $this->input->post('karbohidrat_bahan'),
                'protein_bahan' => $this->input->post('protein_bahan'),
                'lemak_bahan' => $this->input->post('lemak_bahan'),
            );

            $this->bahan_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data bahan berhasil diubah');

            redirect(base_url('admin/bahan'));
        }

        $this->load->view('admin/bahan/edit_bahan', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        $this->bahan_model->delete($id);
        $this->session->set_flashdata('success', 'Bahan berhasil dihapus');
        redirect('admin/bahan/', 'refresh');
    }
}
