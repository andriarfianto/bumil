<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products"; //nama tabel

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        // $this->form_validation->set_message('required', '{field} tidak boleh kosong');

        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'description' => 'required|numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'description' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post['name'];
        $this->price = $post['price'];
        /**
         * upload foto
         * memanggil method _uploadImage dari Product_model
         * tanpa harus menggunakan Controller Product
         */        
        $this->image = $this->_uploadImage();
        $this->description = $post['description'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post['id'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        /**
         * upload foto
         * memanggil method _uploadImage dari Product_model
         * tanpa harus menggunakan Controller Product
         * image adalah nama field name - coloumn input
         * files name dipakai untuk mengubah name file baru yang diupload
         * kalau tidak ada pakai nama file yang lama
         */                 
        if (!empty($_FILES['image']['name'])) { 
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post['old_image'];
        }

        // $data = array('image' => $this->input->post('image'));

        $this->description = $post['description'];
        $this->db->update($this->_table, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        /**
         * delete file foto dari direktori file
         * memanggil method _deleteImage dari Product_model
         * tanpa harus menggunakan Controller Product
         */
        $this->_deleteImage($id);
        $this->db->delete($this->_table, array('product_id' => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/product/';
        $config['allowed_types'] = 'gif|jpg|png';
        // Ini nanti, ngak usah dipakai
        // $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1 MB
        // $config['max_height'] = 1024; // maksimal tinggi
        // $config['max_width'] = 768; // maksimal lebar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name'); // untuk menentukan nama file

            // $image_file = $this->upload->data('file_name');
            // return $image_file;

            // kalau diterapkan di controller
            // if ($_POST) {
            //     $data = array('image' => $image_file);

            //     // update data file baru
            //     // $this->product_model->update($data);
            // }            
        }

        return "default.jpg";
        
        /**
         * Implementasi Sistem
         */
        // if (!$this->upload->do_upload('image')){
        //     $error = array('error' => $this->upload->display_errors());
        //     // kalau gagal - diarahkan ke view hasil upload
        //     $this->load->view('v_upload', $error);
        // }else{
        //     $data = array('upload_data' => $this->upload->data());
        //     // kalau berhasil - diarahkan ke view hasil upload
        //     $this->load->view('v_upload_sukses', $data);
        // }
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }
}