<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('menu_model');
        $this->load->model('bahan_model');
    }

    public function index()
    {
        $id = $this->session->userdata('id_user');        
        $data['user'] = $this->user_model->getById($id);

        $data['menus'] = $this->menu_model->getAll();
        $this->load->view('ibuhamil/menu/list_menu', $data);
    }

    public function detail($id_menu = null)
    {
        $id = $this->session->userdata('id_user');        
        $data['user'] = $this->user_model->getById($id);

        $data['menu'] = $this->menu_model->getById($id_menu);
        $data['bahans'] = $this->menu_model->detail_bahan($id_menu);

        if (!$data['menu']) show_404();

//         var_dump($data);

        $this->load->view('ibuhamil/menu/detail_menu', $data);
    }

    public function add()
    {
        $data = array(
            'nama_menu' => $this->input->post('nama_menu'),
            'kategori_menu' => $this->input->post('kategori_menu'),
            'energi_menu' => $this->input->post('energi_menu'),
            'karbohidrat_menu' => $this->input->post('karbohidrat_menu'),
            'protein_menu' => $this->input->post('protein_menu'),
            'lemak_menu' => $this->input->post('lemak_menu'),
            'cara_membuat' => $this->input->post('cara_membuat'),
        );

        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('kategori_menu', 'Kategori Menu', 'required');
        $this->form_validation->set_rules('energi_menu', 'Energi Menu', 'required');
        $this->form_validation->set_rules('karbohidrat_menu','Karbohidrat Menu','required');
        $this->form_validation->set_rules('protein_menu', 'Protein Menu', 'required');
        $this->form_validation->set_rules('lemak_menu', 'Lemak Menu', 'required');
        $this->form_validation->set_rules('cara_membuat', 'Cara Membuat', 'required');

        if ($this->form_validation->run()) {
//            print_r($_POST); die();
            $post = $this->input->post();

            // panggil model, fungsi get_id_menu_terakhir(), taruh di variabel
            $id_menu_terbaru = $this->menu_model->get_id_menu_terakhir();

            foreach ($post['id_bahan'] as $key => $val) {
                // inlisasi yg mau disimpan ke tabel detail menu
                $data_detail = array(
                    'id_menu' => $id_menu_terbaru ,
                    'id_bahan' => $post['id_bahan'][$key],
                    'jumlah_bahan' => $post['jumlah_bahan'][$key],
                    'satuan_takaran' => $post['satuan_takaran'][$key],
                );

                // lakukan simpan ke tabel detail
                $this->menu_model->save_detail($data_detail); // simpan ke tb menu
                // print_r($_POST); die();
            }

            $data['id_menu'] = $id_menu_terbaru;

            //var_dump($data);

            $this->menu_model->save_menu($data); // simpan ke tb menu

            $this->session->set_flashdata('success', 'Data menu berhasil ditambah');

            redirect(base_url('admin/menu'));
        }

        $this->load->view('admin/menu/new_menu', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/menu/');

        $data['menu'] = $this->menu_model->getById($id);
        if (!$data['menu']) show_404();

        $this->form_validation->set_rules('nama_menu', 'Nama Menu', 'required');
        $this->form_validation->set_rules('kategori_menu', 'Kategori Menu', 'required');
        $this->form_validation->set_rules('energi_menu', 'Energi Menu', 'required');
        $this->form_validation->set_rules('karbohidrat_menu','Karbohidrat Menu','required');
        $this->form_validation->set_rules('protein_menu', 'Protein Menu', 'required');
        $this->form_validation->set_rules('lemak_menu', 'Lemak Menu', 'required');
        $this->form_validation->set_rules('cara_membuat', 'Cara Membuat', 'required');

        if ($this->form_validation->run()) {
            $post_data = array(
                'nama_menu' => $this->input->post('nama_menu'),
                'kategori_menu' => $this->input->post('kategori_menu'),
                'energi_menu' => $this->input->post('energi_menu'),
                'karbohidrat_menu' => $this->input->post('karbohidrat_menu'),
                'protein_menu' => $this->input->post('protein_menu'),
                'lemak_menu' => $this->input->post('lemak_menu'),
                'cara_membuat' => $this->input->post('cara_membuat'),
            );

            $this->menu_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data menu berhasil diubah');

            redirect(base_url('admin/menu'));
        }

        $this->load->view('admin/menu/edit_menu', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        $this->menu_model->delete($id);
        $this->session->set_flashdata('success', 'Menu berhasil dihapus');
        redirect('admin/menu/', 'refresh');
    }

    public function browse()
    {
        // $data = null;
        $data['no'] = $this->input->get('no');

        // ambil semua bahan dibawa ke view browse
        $data['bahans'] = $this->bahan_model->getAll();
        $this->load->view('admin/menu/browse', $data);
    }
}
