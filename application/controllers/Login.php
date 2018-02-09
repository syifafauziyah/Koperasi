<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kopustika');
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('status') === 'login') {
			redirect(base_url('index.php/login/home'));
			return;
		}
		$this->load->view('login');
	}

	public function home(){
		$this->load->view('home');
	}

	public function user_login() 
	{
		$users_user = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$result = $this->Kopustika->login($users_user);
		if( $result->row() == null ) {
			redirect(base_url('index.php/login'));
			return;
		}
		$sess_user = array(
			'email' => $result->row('email'),
			'level' => $result->row('level'),
			'status' => 'login'
		);
		
		$this->session->set_userdata($sess_user);
		redirect(base_url('index.php/login/home'));		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

	public function tambahAnggota(){
		$this->load->view('tambahAnggota');
	}

	public function tambahData() {
		$identitas = array(
			'nama_anggota' => $this->input->post('nama_anggota'),
			'no_hp' => $this->input->post('no_hp'),
			'bank' => $this->input->post('bank'),
			'no_rek' => $this->input->post('no_rek'),
			'alamat' => $this->input->post('alamat')
			);
		// $this->session->set_userdata($identitas);
		if( $this->Kopustika->input($identitas)==TRUE)
		{
			redirect(base_url('index.php/login/data'));
		} else {
			$this->load->view('tambahAnggota');
		}
	}

	public function info() {
		$this->load->view('info');
	}

	public function info_data() {
		$no_anggota = $this->uri->segment(3);
		$pinjam = array(
			'no_anggota' => $no_anggota
			);
		// $result = $this->Kopustika->cariNoPinjaman($no_anggota);
		// if( $result->row() == null ) {
		// 	$this->Kopustika->inputPinjam($pinjam);
		// }
		// $hasil = $this->Kopustika->cariNoTagihan($no_anggota);
		// if( $hasil->row() == null ) {
		// 	$this->Kopustika->inputTagihan($pinjam);
		// }
		$data["anggota"] = $this->Kopustika->pilih($no_anggota);
		// var_dump($data);
		// die();
		$this->load->view('info', $data);
	}

	public function info_cari() {
		$no_anggota = $this->input->get('no_anggota');
		$pinjam = array(
			'no_anggota' => $no_anggota
			);
		$data["anggota"] = $this->Kopustika->pilih($no_anggota);
		// var_dump($data);
		// die();
		$this->load->view('info', $data);
	}


	public function cari() {
		$no_anggota = $this->input->post('no_anggota');
		redirect(base_url('index.php/login/info_cari?no_anggota=' . $no_anggota));
	}

	public function data() {
		// $this->load->view('data');
		if($this->session->userdata('status') !== 'login') {
			redirect(base_url('index.php/login/'));
			return;
		}
		$data["koperasi"] = $this->Kopustika->tampilAll();
		$this->load->view('data', $data);
	}

	public function peminjaman(){
		$no_anggota = $this->uri->segment(3);
		$data["anggota"] = $this->Kopustika->pilih($no_anggota);
			// var_dump($no_anggota);
			// die();
		$this->load->view('peminjaman', $data);
		//redirect(base_url('index.php/login/peminjaman?no_anggota=' . $no_anggota));
	}

	public function tagihan() {
		// $no_anggota = $this->uri->segment(3);
		$no_anggota = $this->input->get('no_anggota');
		$pinjam = array(
			'no_anggota' => $no_anggota
			);
		$hasil = $this->Kopustika->cariNoTagihan($no_anggota);
			if( $hasil->row() == null ) {
				// redirect(base_url('index.php/login/info_data'));
				$this->load->view('tagihanKosong');
			}
			else {
				$data["tagihan"] = $this->Kopustika->ambilData_tagihan($no_anggota);
				// var_dump($data);
				// die();
				$this->load->view('tagihan', $data);
			}
	}

	public function tagihanButton() {
		$no_anggota = $this->uri->segment(3);
		$pinjam = array(
			'no_anggota' => $no_anggota
			);
		$hasil = $this->Kopustika->cariNoTagihan($no_anggota);
			if( $hasil->row() == null ) {
				$this->load->view('tagihanKosong');
			}
			else {
				$data["tagihan"] = $this->Kopustika->ambilData_tagihan($no_anggota);
				// var_dump($data);
				// die();
				$this->load->view('tagihan', $data);
			}
	}

	public function data_pinjam() {
		$no_anggota = $this->uri->segment(3);
		$jenis = $this->input->post('jenis');
		$bulan = $this->input->post('bulan');
		$jml_pinjaman = $this->input->post('jml_pinjaman');
		$hasil = $this->Kopustika->cariNoTagihan($no_anggota);
		if( $hasil->row() == null ) {
			$jml_sisa=0;
		} else {
			$jml_sisa = $this->Kopustika->ambil_JumlahSisa($no_anggota)->jml_sisa;
		}
		$asuransi = 0.01*$jml_pinjaman;
		$provisi = 0.01*$jml_pinjaman;
		$jml_terima = $jml_pinjaman - $jml_sisa - $asuransi - $provisi;
		$pinjam = array(
			'no_anggota' => $no_anggota,
			'jenis' => $jenis,
			'bulan' => $bulan,
			'jml_pinjaman' => $jml_pinjaman,
			'jml_terima' => $jml_terima
			);
		$angsuransipinjaman = $jml_pinjaman/$bulan;
		$jasa_pinjaman = 0.01*$jml_pinjaman;
		$jml_potongan = $jasa_pinjaman + $angsuransipinjaman;
		$startTime = date("Y-m-d");
		$cenvertedTime = date('Y-m-d',strtotime('+1 month',strtotime($startTime)));
		$tagihan = array(
			'no_anggota' => $no_anggota,
			'jml_sisa' => $jml_sisa,
			'bulan' => $startTime,
			'angsuransipinjaman' => $angsuransipinjaman,
			'jasa_pinjaman' => $jasa_pinjaman,
			'jml_potongan' => $jml_potongan,
			'tgl_pembayaran' => $this->input->post('tgl_pembayaran')
			);
		// for ($x = 1; $x <= $bulan; $x++) {
  // 			$stmt->execute();
  //  			sleep(1);
		// }
		 // var_dump($tagihan);
		 // die();
		$result = $this->Kopustika->cariNoPinjaman($no_anggota);
		if( $result->row() == null ) {
			if( $this->Kopustika->inputDataPeminjaman($pinjam) && $this->Kopustika->inputDataTagihan($tagihan) == TRUE)
			{
				redirect(base_url('index.php/login/tagihan?no_anggota=' . $no_anggota));
			} else {
				$this->load->view('peminjaman');
			};
		} else {
			$this->Kopustika->updateDataPeminjaman($no_anggota,$pinjam);
			$this->Kopustika->updateDataTagihan($no_anggota,$tagihan);
			redirect(base_url('index.php/login/tagihan?no_anggota=' . $no_anggota));
			// $this->load->view('tagihan');
		}
	}

	public function hasil(){
		$this->load->view('hasil');
	}

	public function hasil_data() {
		$no_anggota = $this->uri->segment(3);
		$data["anggota"] = $this->Kopustika->pilih($no_anggota);
		// $data["pinjaman"] =$this->Kopustika->ambilDataPinjaman($no_anggota);
		 // var_dump($data);
		 // die();
		$this->load->view('hasil', $data);
		// $this->load->view('info');
		
	}



}