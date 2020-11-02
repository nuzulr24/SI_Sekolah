<?php 
class M_guru extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}

	function simpan_guru($nip,$pass,$nama,$kelas,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$pass1 = md5($pass);
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_pass,guru_nama,guru_jenkel,guru_kelas,guru_tmp_lahir,guru_tgl_lahir,guru_mapel,guru_photo) VALUES ('$nip','$pass1','$nama','$jenkel','$kelas','$tmp_lahir','$tgl_lahir','$mapel','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$pass,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$pass1 = md5($pass);
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_pass,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel) VALUES ('$nip','$pass1','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
		return $hsl;
	}

	function update_guru($kode,$nip,$pass,$nama,$kelas,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		if(empty($pass)) {
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_kelas = '$kelas',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;
		} else {
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_pass = md5('$pass'),guru_nama='$nama',guru_jenkel='$jenkel',guru_kelas = '$kelas',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;	
		}
	}
	function update_guru_tanpa_img($kode,$nip,$pass,$nama,$kelas,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		if(empty($pass)) {
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_kelas = '$kelas',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel' WHERE guru_id='$kode'");
		return $hsl;
		} else {
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_pass = md5('$pass'),guru_nama='$nama',guru_kelas = '$kelas',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel' WHERE guru_id='$kode'");
		return $hsl;	
		}
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

}