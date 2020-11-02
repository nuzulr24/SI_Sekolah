<?php
class Cetak extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_agenda');
		$this->load->library('upload');
	}

    public function index()
    {
        echo 'Bisa';
    }

    public function kunjung_bulans()
    {

        $a['bulan'] = str_pad($this->uri->segment(4), 2, '0', STR_PAD_LEFT);
        $this->load->view('cetak/absensi_bulan', $a);
    }

    public function hariini()
    {
        $this->load->view('cetak/absensi_hariini');
    }

    public function bulanini()
    {
        $a['bulan'] = str_pad($this->uri->segment(4), 2, '0', STR_PAD_LEFT);
        $this->load->view('cetak/absensi_bulanini', $a);
    }
}
