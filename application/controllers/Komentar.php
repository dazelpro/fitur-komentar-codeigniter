<?php
class Komentar extends CI_Controller {

    public function index() {
        $this->load->view('view_komentar');
    }

    public function kirimKomen() {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$isi_komentar = $this->input->post('isi_komentar');
		$this->db->query("INSERT INTO tbl_komen VALUES('','0','$nama','$email','$isi_komentar')");
		redirect('','refresh');
	}

	public function balasKomen() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$isi_komentar = $this->input->post('isi_komentar');
		$this->db->query("INSERT INTO tbl_komen VALUES('','$id','$nama','$email','$isi_komentar')");
		redirect('','refresh');
	}

}