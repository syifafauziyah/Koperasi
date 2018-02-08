<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kopustika extends CI_Model {
	public function login($userdata)
	{
		$result = $this->db->get_where('users',
			array( 
				'email'=> $userdata['email'],
				'password' => $userdata['password'] 
			) 
		);
		return $result;
	}

	
	public function input($identitas)
	{

		if( $this->db->insert('anggota', $identitas))
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tampilAll()
	{
		$query = $this->db->get('anggota');
		return $query;
	}

	public function ambilNama($no_anggota) {
		$nama_anggota = $this->db->select('nama_anggota')
								 ->where('no_anggota',$no_anggota)
								 ->get('anggota');
		return $nama_anggota->row();
	}

	public function tampilByUser($no_anggota){
		$query = $this->db->get_where('anggota', array('no_anggota' => $no_anggota));
		return $query;
	}

	public function pilih($no_anggota)
	{
		$query = $this->db->get_where('anggota', array('no_anggota' => $no_anggota))->row();
		return $query;
	}

	public function cariNoPinjaman($no_anggota) {
		$result = $this->db->get_where('pinjaman',
			array( 
				'no_anggota'=> $no_anggota 
			) 
		);
		return $result;
	}

	public function cariNoTagihan($no_anggota) {
		$hasil = $this->db->get_where('tagihan',
			array( 
				'no_anggota'=> $no_anggota 
			) 
		);
		return $hasil;
	}

	public function inputPinjam($no_anggota) {
		$query = $this->db->insert('pinjaman', $no_anggota);
		return $query;
	}

	public function inputTagihan($no_anggota) {
		$query = $this->db->insert('tagihan', $no_anggota);
		return $query;
	}

	public function ambil_JumlahSisa($no_anggota){
		$jml_sisa = $this->db->select('jml_sisa')->where('no_anggota',$no_anggota)->get('tagihan');
		return $jml_sisa->row();
	}

	public function inputDataPeminjaman($pinjam) {
		if( $this->db->insert('pinjaman', $pinjam))
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function updateDataPeminjaman($no_anggota,$pinjam) {
		$this->db->where('no_anggota',$no_anggota);
		$this->db->update('pinjaman', $pinjam);
	}

	public function inputDataTagihan($tagihan) {
		if( $this->db->insert('tagihan', $tagihan))
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function updateDataTagihan($no_anggota,$tagihan) {
		$this->db->where('no_anggota',$no_anggota);
		$this->db->update('tagihan', $tagihan);
	}


	public function ambilDataPinjaman($no_anggota)
	{
		$query = $this->db->get_where('pinjaman', array('no_anggota' => $no_anggota))->row();
		return $query;
	}

	public function ambilNo_anggota($no) {
		return $this->db->get_where('anggota', array('no_anggota' => $no));
	}

	public function ambilData_tagihan($no_anggota)
	{
		$query = $this->db->get_where('tagihan', array('no_anggota' => $no_anggota))->row();
		return $query;
	}
}