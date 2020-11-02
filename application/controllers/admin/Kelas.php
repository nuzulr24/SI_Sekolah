<?php
class Kelas extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('admin/v_kelas',$x);
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nis=strip_tags($this->input->post('xnis'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$kelas=strip_tags($this->input->post('xkelas'));

							$this->m_siswa->simpan_siswa($nis,$nama,$jenkel,$kelas,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }
	                 
	            }else{
	            	$nis=strip_tags($this->input->post('xnis'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$kelas=strip_tags($this->input->post('xkelas'));

					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
				}
				
	}

	function kelas() {
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$this->load->view('admin/v_kelas',$x);
	}

	function simpan_kelas(){
		$kelas=strip_tags($this->input->post('xnis'));

		$query = $this->db->query("SELECT * FROM tbl_kelas WHERE kelas_nama = '$kelas'");
		if($query->row() > 0) {
			echo $this->session->set_flashdata('msg','error');
			redirect('admin/kelas');	
		} else {
			$this->m_siswa->simpan_kelas($kelas);
			echo $this->session->set_flashdata('msg','success');
			redirect('admin/kelas');
		}				
}
	
	function update_kelas(){
		
		$kelas=strip_tags($this->input->post('xnis'));
		$kode=$this->input->post('kode');

		$query = $this->db->query("SELECT * FROM tbl_kelas WHERE kelas_nama = '$kelas'");
		if($query->row() > 0) {
			echo $this->session->set_flashdata('msg','error');
			redirect('admin/kelas');	
		} else {
			$this->m_siswa->update_kelas($kode,$kelas);
			echo $this->session->set_flashdata('msg','success');
			redirect('admin/kelas');
		}
	}

	function hapus_kelas(){
		$kode=$this->input->post('kode');
		$this->m_siswa->hapus_kelas($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kelas');
	}

}