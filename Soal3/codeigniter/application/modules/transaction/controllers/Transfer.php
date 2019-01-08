<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('transfer/M_transfer');
		
	}
	
	public function index(){

		$this->session->userdata('bank');

		if($this->input->post('submit')){
			$rekper = $this->input->post('rekening_pengirim');
			$rekter = $this->input->post('rekening_penerima');
			$status = array();
			$total_transfer = $this->input->post('total_transfer');
			$pesan_pengirim = $this->input->post('pesan_pengirim');
			$cek_pengirim = $this->M_transfer->cek_pengirim($rekper);
			$cek_penerima = $this->M_transfer->cek_pengirim($rekter);
			$cek_saldo = $this->M_transfer->cek_saldo($saldo);

			// !$cek_pengirim) ? $status['pengirim'] = "Rekening Pengirim Tidak ditemukan"; return false : return true;
			// $S = (!$cek_penerima) ? $status['pengirim'] = "Rekening Penerima Tidak ditemukan"; return false : return true;
			// $S = (!$cek_saldo) ? $status['pengirim'] = "Saldo Tidak mencukupi untuk transfer"; return false : return true;
			if(count($status) > 0){

				for ($i=0; $i < count($status); $i++) { 
					if($i === 0){
						$list .= "<ul>";
					}
					$list .= "<li>".$status[$i]."</i>";

					if($i === count($status)-1)){
					$list .= "</ul>";
					}
				};

				$this->session->set_flashdata('
					<div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Gagal  Melakukan Transfer!</strong Karena terdapat hal berikut.
                     <p>
						{$list}
                      </p>
                  </div>
					');
			}

		}
		else{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('transfer/V_transfer');
		$this->load->view('footer');
		}
	}

	public function authaccount(){
		// $new = new authentication_helper();
		$this->input->post('data');
		$convert = json_decode($data);
		// authenticate($data);
		return $convert;
		// $this->M_transfer->checkAuth();
	}

	public function checkaccount(){
		// $new = new authentication_helper();
		$data = $this->input->post('data');
		// $convert = json_decode($data);
		// authenticate($data);
		// $arry = array('test','oke');
		$js = json_encode($data);
		echo $js;
		// $this->M_transfer->checkAuth();
	}
}
