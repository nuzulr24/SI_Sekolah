<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}

	function get_all_wali(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}

	function simpan_siswa($nis,$pass2,$nama,$jenkel,$kelas,$kelass,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_pass,siswa_nama,siswa_jenkel,siswa_kelas_id,wali_kelas_id,siswa_photo) VALUES ('$nis',md5($pass2),'$nama','$jenkel','$kelas','$kelass','$photo')");
		return $hsl;
	}

	function simpan_kelas($kelas){
		$hsl=$this->db->query("INSERT INTO tbl_kelas (kelas_nama) VALUES ('$kelas')");
		return $hsl;
	}

	function simpan_siswa_tanpa_img($nis,$pass2,$nama,$jenkel,$kelas,$kela1){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_pass,siswa_nama,siswa_jenkel,siswa_kelas_id,wali_kelas_id) VALUES ('$nis',md5($pass2),'$nama','$jenkel','$kelas','$kela1')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$pass,$nama,$jenkel,$kelas,$photo){
		if(empty($pass)) {
			$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas', siswa_photo = '$photo' WHERE siswa_id='$kode'");
			return $hsl;
			} else {
			$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_pass = md5('$pass'), siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas', siswa_photo = '$photo' WHERE siswa_id='$kode'");
			return $hsl;
			}
		
	}

	function update_kelas($kode,$kelas){
		$hsl=$this->db->query("UPDATE tbl_kelas SET kelas_nama='$kelas' WHERE kelas_id='$kode'");
		return $hsl;		
	}

	function update_siswa_tanpa_img($kode,$nis,$pass,$nama,$jenkel,$kelas){
		if(empty($pass)) {
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
		} else {
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_pass = md5('$pass'), siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
		}
		
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kelas WHERE kelas_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

}