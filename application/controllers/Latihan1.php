<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat belajar Web Programming";
        //$this->load->view('View-Latihan1');
    }
    
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_Latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2']= $n2;
        $data['hasil'] = $this->Model_Latihan1->jumlah($n1 , $n2);

        $this->load->view('View_Latihan1', $data);
    }
}
?>