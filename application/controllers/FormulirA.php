<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormulirA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aliyah_model');
        $this->load->model('Wustha_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Formulir Aliyah";
        $data['forma'] = $this->Aliyah_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/formulir/vw_formulir_aliyah", $data);
        $this->load->view("admin/layout/footer", $data);

    }
    public function indexW()
    {
        $data['judul'] = "Halaman Formulir Wustha";
        $data['formw'] = $this->Wustha_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("admin/formulir/vw_formulir_wustha", $data);
        $this->load->view("admin/layout/footer", $data);

    }
    // public function tambah()
    // {
    //     $data['judul'] = "Halaman Tambah Berita";
    //     $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
    //         'required' => 'Judul Berita Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi Berita', 'required', [
    //         'required' => 'Deskripsi Berita Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('file', 'File', 'required', [
    //         'required' => 'File Berita Wajib di isi'
    //     ]);
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view("admin/layout/header", $data);
    //         $this->load->view("admin/berita/vw_tambah_berita", $data);
    //         $this->load->view("admin/layout/footer");
    //     } else {
    //         $data = [
    //             'judul' => $this->input->post('judul'),
    //             'deskripsi' => $this->input->post('deskripsi'),
    //             'file' => $this->input->post('file'),
    //         ];
    //         $this->Berita_model->insert($data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success"
    //         role="alert">Data Berita Berhasil Ditambah!</div>');
    //         redirect('BeritaA');
    //     }

    // }
    public function hapusA($id)
    {
        $this->Aliyah_model->delete($id);
        $this->session->set_flashdata('message', '<div class = "alert alert-success" role = "alert" > Data
        Aliyah Berhasil Di hapus!</div>');
        redirect('FormulirA');
    }
    public function hapusW($id)
    {
        $this->Wustha_model->delete($id);
        $this->session->set_flashdata('message', '<div class = "alert alert-success" role = "alert" > Data
        Wustha Berhasil Di hapus!</div>');
        redirect('FormulirA');
    }
    // function edit($id)
    // {
    //     $data['judul'] = "Halaman Edit Berita";
    //     $data['forma'] = $this->Aliyah_model->getById($id);

    //     $this->form_validation->set_rules('judul', 'Judul Berita', 'required', [
    //         'required' => 'Judul Berita Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi Berita', 'required', [
    //         'required' => 'Deskripsi Berita Wajib di isi'
    //     ]);
    //     $this->form_validation->set_rules('file', 'File Berita', 'required', [
    //         'required' => 'File Berita Wajib di isi'
    //     ]);
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view("admin/layout/header", $data);
    //         $this->load->view("admin/berita/vw_edit_berita", $data);
    //         $this->load->view("admin/layout/footer");
    //     } else {
    //         $data = [
    //             'judul' => $this->input->post('judul'),
    //             'deskripsi' => $this->input->post('deskripsi'),
    //             'file' => $this->input->post('file'),
    //         ];
    //         $id = $this->input->post('id');
    //         $this->Berita_model->update(['id' => $id], $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success"
    //         role="alert">Data Berita Berhasil DiUbah!</div>');
    //         redirect('BeritaA');
    //     }
    // }
}
?>