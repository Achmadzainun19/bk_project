<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class P extends CI_Controller {



	function __construct(){

		parent::__construct();

		if(!$this->ion_auth->logged_in()){

			redirect('auth/login');

		}

	}





	public function index(){

		$this->load->view('header');

		$this->load->view('home');

		$this->load->view('footer');

	}



	public function kelola_siswa(){

		$data['kelas'] = $this->m_data->semua('kelas')->result();

		$data['siswa'] = $this->m_data->list_siswa()->result();

		$this->load->view('header',$data);

		$this->load->view('kelola_data_siswa');

		$this->load->view('footer');

	}



	function delete_siswa($id_u,$id_s){

		$this->ion_auth->delete_user($id_u);

		$this->m_data->hapus_data(array('id_siswa' => $id_s),'siswa');

		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil hapus Siswa!</strong>

	</div>');

		redirect('p/kelola_siswa');

	}



	function update_siswa(){

		if(empty($this->input->post('password'))){

			$data = array(

					'first_name' => $this->input->post('nama_siswa'),

					'username' => $this->input->post('username'),

					 );

			$data2 = array(

				'nama_siswa' => $this->input->post('nama_siswa'),

				'nis' => $this->input->post('nis'),

				'alamat_siswa' => $this->input->post('alamat_siswa'),

				'tempat_lahir' => $this->input->post('tempat_lahir'),

				'tanggal_lahir' => $this->input->post('tgl_lahir'),

				'jenis_kelamin' => $this->input->post('jenis_kelamin'),

				'kelas' => $this->input->post('kelas'),

				'no_hp' => $this->input->post('no_hp'),

				'nama_ayah' => $this->input->post('ayah_siswa'),

				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),

				'no_hp_ortu' => $this->input->post('hp_ortu'),

				'nama_ibu' => $this->input->post('ibu_siswa'),

				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),

			);

		}else{

			$data = array(

				'first_name' => $this->input->post('nama_siswa'),

				'username' => $this->input->post('username'),

					'password' => $this->input->post('password'),

					 );

			 $data2 = array(

				 'nama_siswa' => $this->input->post('nama_siswa'),

				 'nis' => $this->input->post('nis'),

				 'alamat_siswa' => $this->input->post('alamat_siswa'),

				 'tempat_lahir' => $this->input->post('tempat_lahir'),

				 'tanggal_lahir' => $this->input->post('tgl_lahir'),

				 'jenis_kelamin' => $this->input->post('jenis_kelamin'),

				 'kelas' => $this->input->post('kelas'),

				 'no_hp' => $this->input->post('no_hp'),

				 'nama_ayah' => $this->input->post('ayah_siswa'),

				 'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),

				 'no_hp_ortu' => $this->input->post('hp_ortu'),

				 'nama_ibu' => $this->input->post('ibu_siswa'),

				 'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),

 			);

		}



	$this->ion_auth->update($this->input->post('id_user'), $data);

	$this->m_data->update_data(array('id_siswa' => $this->input->post('id_siswa')),$data2,'siswa');

	$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	<strong>Berhasil update Siswa!</strong>

</div>');

	redirect('p/kelola_siswa');

	}



	function add_siswa(){

		$username = $this->input->post('nis');

		 $password = $this->input->post('nis');

		 $email = ''.$this->input->post('nis').'@example.com';

		 $additional_data = array(

								 'first_name' => $this->input->post('nama_siswa'),

								 );

		 $group = array('3');

		 $this->ion_auth->register($username, $password, $email, $additional_data, $group);

		 $cek_akhir = $this->m_data->cek_akhir('id','desc','users')->row();

		 $data = array(

			 'id_user' => $cek_akhir->id,

			 'nama_siswa' => $this->input->post('nama_siswa'),

			 'nis' => $this->input->post('nis'),

			 'alamat_siswa' => $this->input->post('alamat_siswa'),

			 'tempat_lahir' => $this->input->post('tempat_lahir'),

			 'tanggal_lahir' => $this->input->post('tgl_lahir'),

			 'jenis_kelamin' => $this->input->post('jenis_kelamin'),

			 'kelas' => $this->input->post('kelas'),

			 'no_hp' => $this->input->post('no_hp'),

			 'nama_ayah' => $this->input->post('ayah_siswa'),

			 'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),

			 'no_hp_ortu' => $this->input->post('hp_ortu'),

			 'nama_ibu' => $this->input->post('ibu_siswa'),

			 'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),

			 'created' => date('Y-m-d H:i:s'),

		 );

		 $this->db->insert('siswa',$data);

		 $this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		 <strong>Berhasil menambahkan Siswa!</strong>

	 </div>');

		 redirect('p/kelola_siswa');

	}



	public function kelola_guru(){

		$data['list_guru'] = $this->m_data->list_guru()->result();

		$this->load->view('header',$data);

		$this->load->view('data_guru');

		$this->load->view('footer');

	}



	function add_guru(){

	$username = $this->input->post('username');

	 $password = $this->input->post('password');

	 $email = ''.$this->input->post('username').'@example.com';

	 $additional_data = array(

							 'first_name' => $this->input->post('nama_guru'),

							 );

	 $group = array('2'); // Sets user to admin.

	 $this->ion_auth->register($username, $password, $email, $additional_data, $group);

	 $cek_akhir = $this->m_data->cek_akhir('id','desc','users')->row();

	 $data = array(

		 'id_user' => $cek_akhir->id,

		 'nip' => $this->input->post('nip'),

	 );

	 $this->db->insert('guru',$data);

	 $this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	 <strong>Berhasil menambahkan Guru!</strong>

 </div>');

	 redirect('p/kelola_guru');

	}



	function update_guru(){

		if(empty($this->input->post('password'))){

			$data = array(

					'first_name' => $this->input->post('nama_guru'),

					 );

			$data2 = array(

				'nip' => $this->input->post('nip'),

			);

		}else{

			$data = array(

					'first_name' => $this->input->post('nama_guru'),

					'password' => $this->input->post('password'),

					 );

			 $data2 = array(

 				'nip' => $this->input->post('nip'),

 			);

		}



	$this->ion_auth->update($this->input->post('id_user'), $data);

	$this->m_data->update_data(array('id_guru' => $this->input->post('id_guru')),$data2,'guru');

	$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	<strong>Berhasil update Guru!</strong>

</div>');

	redirect('p/kelola_guru');

	}



	function delete_guru($id_u,$id_g){

		$this->ion_auth->delete_user($id_u);

		$this->m_data->hapus_data(array('id_guru' => $id_g),'guru');

		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil hapus Guru!</strong>

	</div>');

		redirect('p/kelola_guru');

	}



	public function jenis_pelanggaran(){

		$data['title'] = 'Kategori Pelanggaran';

		$data['kategori'] = $this->m_data->semua('kategori_pelanggaran')->result();

		$this->load->view('header',$data);

		$this->load->view('jenis_pelanggaran');

		$this->load->view('footer');

	}



	public function pelanggaran(){

		$data['title'] = 'Pelanggaran';

		$data['kategori'] = $this->m_data->semua('kategori_pelanggaran')->result();

		$data['pelanggaran'] = $this->m_data->semua('pelanggaran')->result();

		$this->load->view('header',$data);

		$this->load->view('pelanggaran');

		$this->load->view('footer');

	}



	public function akumulasi_pelanggaran(){

		$data['title'] = 'Akumulasi Pelanggaran Siswa';

		$data['kelas'] = $this->m_data->semua('kelas')->result();

		$this->load->view('header',$data);

		$this->load->view('akumulasi_pelanggaran_siswa');

		$this->load->view('footer');

	}



	public function tambah_pelanggaran(){

		$data['title'] = 'Tambah Pelanggaran Siswa';

		$data['kelas'] = $this->m_data->semua('kelas')->result();

		$this->load->view('header',$data);

		$this->load->view('tambah_pelanggaran_siswa');

		$this->load->view('footer');

	}



	public function begin_pelanggaran($id_siswa){

		$data['title'] = 'Tambah Pelanggaran Siswa';

		$data['user_ion'] = $this->ion_auth->user()->row();

		$data['siswa'] = $this->m_data->siswa_kelas($id_siswa)->row();

		$data['kelas'] = $this->m_data->semua('kelas')->result();

		$data['pelanggaran'] = $this->m_data->semua('pelanggaran')->result();

		$this->load->view('header',$data);

		$this->load->view('input_pelanggaran');

		$this->load->view('footer');

	}



	function pelanggaran_sys(){

		$nm = $this->input->post('pelanggaran');

		$poin_all=0;

		$array_pelanggaran=array();

		foreach($nm as $k => $v){

			$cek_poin = $this->m_data->where('pelanggaran',array('id_pelanggaran' => $_POST['pelanggaran'][$k]))->row();

			$poin_all+=$cek_poin->poin;

			$data = array(

				'id_pelanggaran' => $_POST['pelanggaran'][$k],

				'id_siswa' => $this->input->post('id_siswa'),

				'id_pelapor' => $this->input->post('id_user'),

				'tanggal_pelaporan' => date('Y-m-d H:i:s'),

				'poin' => $cek_poin->poin

			);

			$this->db->insert('pelanggaran_siswa',$data);

			$array_pelanggaran[]=$cek_poin->nama_pelanggaran;

		}

		$sentence = '';
		foreach($array_pelanggaran as $k => $v) {
		   if (count($array_pelanggaran) == 1) {
			  $sentence = $v;
			  break;
		   }
		   else if ($k == count($array_pelanggaran)-1) {
			  $sentence .= 'dan ' . $v;
		   }
		   else {
			  $sentence .= $v . ', ';
		   }
		}
		
		$sentence;

	$data_siswa=$this->m_data->siswa_kelas($this->input->post('id_siswa'))->result();
	foreach($data_siswa as $ds){
		$nama_siswa=$ds->nama_siswa;
		$kelas=$ds->nama_kelas;
	}


	// 	$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	// 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	// 	<strong>Berhasil menambahkan pelanggaran siswa!</strong>

	// </div>');
	echo "https://wa.me/628113711998?text=assalamualaikum pesan ini adalah pesan dari sistem point pelanggaran siswa smpn 4 banyuwangi memberitahukan bahwa ananda $nama_siswa kelas $kelas  telah melakukan pelanggaran sekolah $sentence dengan jumlah poin $poin_all segera tanggapi pesan berikut untuk cek kebenaran";
		// redirect('p/tambah_pelanggaran');

	} 



	function add_pelanggaran(){

		$data = array(

			'nama_pelanggaran' => $this->input->post('nama_pelanggaran'),

			'id_kategori_pelanggaran' => $this->input->post('kategori_pelanggaran'),

			'poin' => $this->input->post('poin'),

			'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),

		);

		$this->db->insert('pelanggaran',$data);

		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil menambahkan pelanggaran!</strong>

	</div>');

		redirect('p/pelanggaran');

	}



	function edit_pelanggaran(){

		$data = array(

			'nama_pelanggaran' => $this->input->post('nama_pelanggaran'),

			'id_kategori_pelanggaran' => $this->input->post('kategori_pelanggaran'),

			'poin' => $this->input->post('poin'),

			'jenis_pelanggaran' => $this->input->post('jenis_pelanggaran'),

		);

		$this->m_data->update_data(array('id_pelanggaran' => $this->input->post('id_pelanggaran')),$data,'pelanggaran');

		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil update pelanggaran!</strong>

	</div>');

		redirect('p/pelanggaran');

	}



	function hapus_pelanggaran($id){

		$this->m_data->hapus_data(array('id_pelanggaran' => $id),'pelanggaran');

			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil hapus pelanggaran!</strong>

	</div>');

		redirect('p/pelanggaran');

	}



	function add_kategori(){

		$data = array(

			'kategori_pelanggaran' => $this->input->post('kategori_pelanggaran')

		);

			$this->db->insert('kategori_pelanggaran',$data);

			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	    <strong>Berhasil menambahkan kategori pelanggaran!</strong>

	  </div>');

		redirect('p/jenis_pelanggaran');

	}



	function update_kategori(){

		$data = array(

			'kategori_pelanggaran' => $this->input->post('kategori_pelanggaran')

		);

		$this->m_data->update_data(array('id_kategori' => $this->input->post('id_kategori')),$data,'kategori_pelanggaran');

			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

	    <strong>Berhasil update kategori pelanggaran!</strong>

	  </div>');

		redirect('p/jenis_pelanggaran');

	}



	function hapus_kategori($id){

		$this->m_data->hapus_data(array('id_kategori' => $id),'kategori_pelanggaran');

			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">

		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

		<strong>Berhasil hapus kategori pelanggaran!</strong>

	</div>');

		redirect('p/jenis_pelanggaran');

	}

	// konseling ( tambahan achmad zainun )

	public function konseling(){
		$data['title'] = 'Konseling Siswa';
		$data['kelas'] = $this->m_data->semua('kelas')->result();
		$this->load->view('header',$data);
		$this->load->view('konseling_siswa');
		$this->load->view('footer');
	}

	public function begin_konseling($id_siswa){
		$data['title'] = 'Tambah Konseling Siswa';
		$data['user_ion'] = $this->ion_auth->user()->row();
		$data['siswa'] = $this->m_data->siswa_kelas($id_siswa)->row();
		$data['kelas'] = $this->m_data->semua('kelas')->result();
		$data['konseling'] = $this->m_data->list_konseling_siswa($id_siswa)->result();
		$this->load->view('header',$data);
		$this->load->view('input_konseling');
		$this->load->view('footer');
	}

	public function tambah_konseling(){
		$data = array(
			'id_konseling' => '',
			'tanggal' => date('Y-m-d H:i:s',strtotime($this->input->post('tanggal'))),
			'keterangan' => $this->input->post('keterangan'),
			'solusi' => $this->input->post('solusi'),
			'data_siswa_id_siswa' => $this->input->post('id_siswa'),
		);
			$this->db->insert('konseling_siswa',$data);
			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    	<strong>Berhasil menambahkan konseling!</strong>
	  		</div>');
		redirect('p/begin_konseling/'.$this->input->post('id_siswa'));
	}

	public function update_konseling(){
		$where=array(
			'id_konseling'=>$this->input->post('id_konseling'),
		);
		$data = array(
			'keterangan' => $this->input->post('keterangan'),
			'solusi' => $this->input->post('solusi'),
		);
			$this->m_data->update_data($where,$data,'konseling_siswa');
			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    	<strong>Berhasil mengedit konseling!</strong>
	  		</div>');
		redirect('p/begin_konseling/'.$this->input->post('id_siswa'));
	}

	function hapus_konseling($id,$siswa){
		$this->m_data->hapus_data(array('id_konseling' => $id),'konseling_siswa');
		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Berhasil hapus konseling siswa!</strong>
			</div>');
		redirect('p/begin_konseling/'.$siswa);
	}

	public function surat_bimbingan(){
		$data['title'] = 'Surat Bimbingan Siswa';
		$data['kelas'] = $this->m_data->semua('kelas')->result();
		$this->load->view('header',$data);
		$this->load->view('surat_bimbingan');
		$this->load->view('footer');
	}

	public function begin_surat_bimbingan($id_siswa){
		$data['title'] = 'Tambah Surat Bimbingan Siswa';
		$data['user_ion'] = $this->ion_auth->user()->row();
		$data['siswa'] = $this->m_data->siswa_kelas($id_siswa)->row();
		$data['kelas'] = $this->m_data->semua('kelas')->result();
		$data['pelanggaran'] = $this->m_data->list_pelanggaran_siswa($id_siswa)->result();
		$this->load->view('header',$data);
		$this->load->view('view_surat_bimbingan');
		$this->load->view('footer');
	}

	public function cetak_surat($id_siswa){
		// rekaman tanggapan
		$tanggapan=$this->uri->segment('4');
		if($tanggapan=='surat_peringatan'){
			$tanggapan='peringatan';
		}elseif($tanggapan=='surat_panggilan_orang_tua'){
			$tanggapan='panggilan orang tua';
		}elseif($tanggapan=='surat_skorsing'){
			$tanggapan='skorsing';
		}
		$value=array(
			'id_tanggapan'=>'',
			'id_siswa'=>$id_siswa,
			'tanggal_tanggapan'=>date('Y-m-d H:i:s'),
			'tanggapan'=>$tanggapan
		);
		$insert=$this->db->insert('tanggapan',$value);
		// rekaman tanggapan
		$data['siswa'] = $this->m_data->siswa_kelas($id_siswa)->row();
		$data['title'] = 'Surat Bimbingan Siswa';
		$this->load->view('cetak_surat',$data);
	}

	public function bentuk_sanksi_diberikan(){
		$data['title'] = 'Bentuk Sanksi Diberikan';
		$data['bentuk_sanksi'] = $this->m_data->semua('bentuk_sanksi')->result();
		$this->load->view('header',$data);
		$this->load->view('bentuk_sanksi_diberikan');
		$this->load->view('footer');
	}

	public function tambah_bentuk_sanksi(){
		$data = array(
			'id_bentuk_sanksi' => '',
			'bentuk_pelanggaran' => $this->input->post('bentuk_pelanggaran'),
			'point_terendah' => $this->input->post('point_terendah'),
			'point_tertinggi' => $this->input->post('point_tertinggi'),
			'sanksi' => $this->input->post('sanksi'),
		);
			$this->db->insert('bentuk_sanksi',$data);
			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    	<strong>Berhasil menambahkan bentuk sanksi!</strong>
	  		</div>');
		redirect('p/bentuk_sanksi_diberikan/'.$this->input->post('id_siswa'));
	}

	public function update_bentuk_sanksi(){
		$where=array(
			'id_bentuk_sanksi'=>$this->input->post('id_bentuk_sanksi'),
		);
		$data = array(
			'bentuk_pelanggaran' => $this->input->post('bentuk_pelanggaran'),
			'point_terendah' => $this->input->post('point_terendah'),
			'point_tertinggi' => $this->input->post('point_tertinggi'),
			'sanksi' => $this->input->post('sanksi'),
		);
			$this->m_data->update_data($where,$data,'bentuk_sanksi');
			$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    	<strong>Berhasil mengedit bentuk sanksi!</strong>
	  		</div>');
		redirect('p/bentuk_sanksi_diberikan/'.$this->input->post('id_bentuk_sanksi'));
	}

	function hapus_bentuk_sanksi($id){
		$this->m_data->hapus_data(array('id_bentuk_sanksi' => $id),'bentuk_sanksi');
		$this->session->set_flashdata('alert',' <div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Berhasil hapus bentuk sanksi!</strong>
			</div>');
		redirect('p/bentuk_sanksi_diberikan/');
	}

	public function pengelompokan_pelanggar(){
		$data['title'] = 'Bentuk Sanksi Diberikan';
		$data['bentuk_sanksi'] = $this->m_data->semua('bentuk_sanksi')->result();
		$this->load->view('header',$data);
		$this->load->view('pengelompokan_pelanggar');
		$this->load->view('footer');
	}

	public function begin_detail_siswa($id_siswa){
		$data['title'] = 'Tambah Surat Bimbingan Siswa';
		$data['user_ion'] = $this->ion_auth->user()->row();
		$data['siswa'] = $this->m_data->siswa_kelas($id_siswa)->row();
		$data['kelas'] = $this->m_data->semua('kelas')->result();
		$where=array(
			'id_siswa'=>$id_siswa
		);
		$data['tanggapan'] = $this->m_data->where('tanggapan',$where)->result();
		$data['jum_konseling'] = $this->m_data->where('konseling_siswa',array('data_siswa_id_siswa'=>$id_siswa))->num_rows();
		$data['pelanggaran'] = $this->m_data->list_pelanggaran_siswa($id_siswa)->result();
		$data['jum_pelanggaran'] = $this->m_data->list_pelanggaran_siswa($id_siswa)->num_rows();
		$this->load->view('header',$data);
		$this->load->view('view_detail_siswa');
		$this->load->view('footer');
	}

}

