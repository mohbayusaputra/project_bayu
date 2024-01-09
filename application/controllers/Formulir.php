<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aliyah_model');
        $this->load->model('Wustha_model');
    }
    public function index()
    {
        $this->load->view("layout/header");
        $this->load->view("formulir/vw_formulir");
        $this->load->view("layout/footer");

    }
    // $this->form_validation->set_rules('nik', 'NIK', 'required', [
    //     'required' => 'NIK Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
    //     'required' => 'Nama Lengkap Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tempats', 'Tempat Lahir', 'required', [
    //     'required' => 'Tempat Lahir Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tanggals', 'Tanggal Lahir', 'required', [
    //     'required' => 'Prodi Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('jenis_kelamin', 'Alamat', 'required', [
    //     'required' => 'Alamat Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nohps', 'Asal Sekolah', 'required', [
    //     'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nisn', 'No HP', 'required', [
    //     'required' => 'No HP Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('npsm', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nsm', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nama_sekolah', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tingkat', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nokk', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nik_ayah', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nama_ayah', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tempatA', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tanggalA', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('statusA', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pendidikanA', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pekerjaanA', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nik_ibu', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nama_ibu', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tempatI', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tanggalI', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('statusI', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pendidikanI', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pekerjaanI', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nik_wali', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('nama_wali', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tempatW', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('tanggalW', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('statusW', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pendidikanW', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('pekerjaanW', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('jalan', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('rt_rw', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('kel_desa', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('kecamatan', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('kabupaten', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('provinsi', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);
    // $this->form_validation->set_rules('negara', 'Jenis Kelamin', 'required', [
    //     'required' => 'Jenis Kelamin Mahasiswa Wajib di isi'
    // ]);

    public function aliyah()
    {
        $this->load->view("layout/header");
        $this->load->view("formulir/vw_formulir_aliyah");
        $this->load->view("layout/footer");
    }
    public function process_form()
    {
        // Check if the form is submitted
        if ($this->input->post('submitForm')) {
            // Handle form submission
            $this->handleFormSubmission();
        } else {
            // Redirect to the aliyah method--------------------------------------------------------------------------------------------- if the form is accessed directly
            redirect('aliyah'); 
        }
    }
    public function handleFormSubmission()
    {
        // Form validation rules can be added here if needed


        $data = [
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempats' => $this->input->post('tempats'),
            'tanggals' => $this->input->post('tanggals'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nohps' => $this->input->post('nohps'),
            'nisn' => $this->input->post('nisn'),
            'npsm' => $this->input->post('npsm'),
            'nsm' => $this->input->post('nsm'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'tingkat' => $this->input->post('tingkat'),
            'nokk' => $this->input->post('nokk'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'tempatA' => $this->input->post('tempatA'),
            'tanggalA' => $this->input->post('tanggalA'),
            'statusA' => $this->input->post('statusA'),
            'pendidikanA' => $this->input->post('pendidikanA'),
            'pekerjaanA' => $this->input->post('pekerjaanA'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tempatI' => $this->input->post('tempatI'),
            'tanggalI' => $this->input->post('tanggalI'),
            'statusI' => $this->input->post('statusI'),
            'pendidikanI' => $this->input->post('pendidikanI'),
            'pekerjaanI' => $this->input->post('pekerjaanI'),
            'nik_wali' => $this->input->post('nik_wali'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tempatW' => $this->input->post('tempatW'),
            'tanggalW' => $this->input->post('tanggalW'),
            'statusW' => $this->input->post('statusW'),
            'pendidikanW' => $this->input->post('pendidikanW'),
            'pekerjaanW' => $this->input->post('pekerjaanW'),
            'jalan' => $this->input->post('jalan'),
            'rt_rw' => $this->input->post('rt_rw'),
            'kel_desa' => $this->input->post('kel_desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
            'provinsi' => $this->input->post('provinsi'),
            'negara' => $this->input->post('negara'),
        ]; // Insert the data into the database using your model
        $insertId = $this->Aliyah_model->insert($data);

        if ($insertId) {
            // Data successfully inserted
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Home');
        } else {
            // Error handling, if needed
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menambahkan data!</div>');
            redirect('Home');
        }

    }
    public function wustha()
    {
        $this->load->view("layout/header");
        $this->load->view("formulir/vw_formulir_wustha");
        $this->load->view("layout/footer");
    }
       
    public function process_formW()
    {
        // Check if the form is submitted
        if ($this->input->post('submitForm')) {
            // Handle form submission
            $this->handleFormSubmissionW();
        } else {
            // Redirect to the aliyah method if the form is accessed directly
            redirect('wustha');
        }
    }
    public function handleFormSubmissionW()
    {
        // Form validation rules can be added here if needed


        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempats' => $this->input->post('tempats'),
            'tanggals' => $this->input->post('tanggals'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nohps' => $this->input->post('nohps'),
            'nisn' => $this->input->post('nisn'),
            'npsm' => $this->input->post('npsm'),
            'nsm' => $this->input->post('nsm'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'tingkat' => $this->input->post('tingkat'),
            'nokk' => $this->input->post('nokk'),
            'nik_ayah' => $this->input->post('nik_ayah'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'tempatA' => $this->input->post('tempatA'),
            'tanggalA' => $this->input->post('tanggalA'),
            'statusA' => $this->input->post('statusA'),
            'pendidikanA' => $this->input->post('pendidikanA'),
            'pekerjaanA' => $this->input->post('pekerjaanA'),
            'nik_ibu' => $this->input->post('nik_ibu'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'tempatI' => $this->input->post('tempatI'),
            'tanggalI' => $this->input->post('tanggalI'),
            'statusI' => $this->input->post('statusI'),
            'pendidikanI' => $this->input->post('pendidikanI'),
            'pekerjaanI' => $this->input->post('pekerjaanI'),
            'nik_wali' => $this->input->post('nik_wali'),
            'nama_wali' => $this->input->post('nama_wali'),
            'tempatW' => $this->input->post('tempatW'),
            'tanggalW' => $this->input->post('tanggalW'),
            'statusW' => $this->input->post('statusW'),
            'pendidikanW' => $this->input->post('pendidikanW'),
            'pekerjaanW' => $this->input->post('pekerjaanW'),
            'jalan' => $this->input->post('jalan'),
            'rt_rw' => $this->input->post('rt_rw'),
            'kel_desa' => $this->input->post('kel_desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
            'provinsi' => $this->input->post('provinsi'),
            'negara' => $this->input->post('negara'),
        ); // Insert the data into the database using your model
        var_dump($data);
        $insertId = $this->Wustha_model->insert($data);

        if ($insertId) {
            // Data successfully inserted
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('Home');
        } else {
            // Error handling, if needed
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menambahkan data!</div>');
            redirect('Home');
        }

    }
}