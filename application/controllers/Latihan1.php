<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
 echo "HAYOOO LOHHHH"; 
 }
 public function penjumlahan($n1, $n2)
 {
    $this->load->model('Latihan_model1');
    $hasil = $this->Latihan_model1->jumlah($n1, $n2);
    echo "<h1>HASIL NYA NIH PUHHH</h1>";
    echo "Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = ".$hasil;
 }
 public function jmlh($n1, $n2)
 {
    $this->load->model('Latihan_model1');
    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $this->Latihan_model1->jumlah($n1, $n2);
    $this->load->view('Latihan_views1', $data);
 }

}
?>