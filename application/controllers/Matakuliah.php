<?php

class Matakuliah extends CI_Controller
{

    public function index()

    {


        $this->load->view('View-form-matakuliah');
    
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
        ];

        $this->load->view('View-data-matakuliah', $data);
    }
}
?>