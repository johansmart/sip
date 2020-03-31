<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	function __construct(){
		parent:: __construct();
		ceklogin();
		$this->load->library('form_validation','session','pagination');
		$this->load->Model(array('Model_pelanggan','Model_kategori','Model_barang','Model_penjualan','Model_sales','Model_surat'));
	}
	function cekbarang(){
		$user = $this->session->userdata('username');
		$cek 			= $this->db->query("SELECT * FROM tb_detail_b_barangp WHERE user = '$user'")->num_rows();
		echo $cek;

	}
	function view_penjualan(){
	//redirect('Penjualan/lihat_penjualan');
		$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
		$data['penjualan'] = $this->Model_penjualan->view_penjualan();
		$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
		$this->template->load('template','Penjualan/view_penjualan',$data);

	}
	function view_retur(){
	//redirect('Penjualan/lihat_retur');
		$data['retur'] = $this->Model_penjualan->view_retur();

		$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
		$this->template->load('template','Penjualan/view_retur',$data);
	}
	function input_penjualan(){

		if(isset($_POST['submit'])){
			
			$this->Model_penjualan->insert_penjualan();
			
		}if(isset($_POST['submit2'])){
			$this->Model_penjualan->insert_penjualan_cetak();
			
		}if(isset($_POST['submit3'])){
			$this->Model_penjualan->insert_penjualan_cetakk();
			
		}else{
			$a = $this->Model_penjualan->getNomorterakhir()->row_array();
                            //Mengambil Tahun di Sistem
			$tahun    = date('y');
			$id       = ('SO');
			$id1       = ('-');
			$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			$bln		= $c[date('n')];
			$format   = $tahun.$id.$id1.$bln;
			$b = $this->Model_penjualan->getNomorterakhir1()->row_array();
                            //Mengambil Tahun di Sistem
			$tahun    = date('y');
			$id       = ('SJ');
			$id1       = ('-');
			$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			$bln		= $c[date('n')];
			$format2   = $tahun.$id.$id1.$bln;
			$data['autonumber'] 	= buatkode($a['no_jual'],$format,4);
			$data['autonumber1'] 	= buatkode($b['no_sj'],$format2,4);
			$data['listsales'] 		= $this->Model_sales->view_sales();
			$data['listkategori']   = $this->Model_kategori->view_kategori();
			$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
			$data['list_barang'] 	= $this->Model_barang->view_barang();
			$data['list_barang']	= $this->Model_barang->view_barang();
			$data['list_tmp'] 		= $this->Model_penjualan->view_detail_barang();
			$data['pel'] 			= $this->Model_pelanggan->get()->row_array();
			$this->template->load('template','Penjualan/input_penjualan',$data);
		}
	}
	
	function looping_cetak(){
		
		$id = $this->input->post('no_jual');
		$data['cetak'] = $this->Model_penjualan->looping_cetak($id);
		$data['cetak1'] = $this->Model_penjualan->view_cetak($id);
		$data['cetak2'] = $this->Model_penjualan->view_cetak_a5($id);
		$this->load->view('Penjualan/print',$data);
		
	}
	function looping_cetak_retur(){
		
		$id = $this->input->post('no_retur');
		$data['cetak_retur'] = $this->Model_penjualan->looping_cetak_retur($id);
		$data['cetak1'] = $this->Model_penjualan->view_cetak_retur($id);
		$data['cetak2'] = $this->Model_penjualan->view_cetak_retur_a5($id);
		$this->load->view('Penjualan/print_retur',$data);
		
	}
	
	function update_cetak1(){
		if(isset($_POST['submit'])){	
			$no_jual = $this->input->post('no_jual');
			$alasan_cetak = $this->input->post('alasan_cetak');
			$cetak = $this->input->post('cetak');
			$looping_cetak = $this->db->get_where('tb_penjualan',array('no_jual'=>$no_jual))->row_array();
			$cetakan = $looping_cetak['cetak'];
			if($cetakan > 5){
				$this->session->set_flashdata("message","<script> alert('Oops.. Gak Bisa Ngeprint Lagi')</script>");
				redirect('Penjualan/view_penjualan');
			}else{
				$data = array(
					'no_jual'      => $no_jual,
					'alasan_cetak' => $alasan_cetak,
					'cetak' 	   => $cetak,
				);
				$this->db->insert('cetak',$data);
				$this->db->query("UPDATE tb_penjualan SET cetak = cetak + '$cetak', alasan_cetak = '$alasan_cetak' WHERE no_jual = '$no_jual'");
			}
			redirect('Penjualan/cetak_struk/'.$no_jual);
		}
		if(isset($_POST['submit2'])){
			$no_jual = $this->input->post('no_jual');
			$alasan_cetak = $this->input->post('alasan_cetak');
			$cetak = $this->input->post('cetak');
			$loop_cetak = $this->db->get_where('tb_penjualan',array('no_jual'=>$no_jual))->row_array();
			$cetakann = $loop_cetak['cetak'];
			if($cetakann > 5){
				$this->session->set_flashdata("message","<script> alert('Oops.. Gak Bisa Ngeprint Lagi')</script>");
				redirect('Penjualan/view_penjualan');
			}else{
				$data = array(
					'no_jual'      => $no_jual,
					'alasan_cetak' => $alasan_cetak,
					'cetak' 	   => $cetak,
				);
				$this->db->insert('cetak_a5',$data);
				$this->db->query("UPDATE tb_penjualan SET cetak = cetak + '$cetak', alasan_cetak = '$alasan_cetak' WHERE no_jual = '$no_jual'");
			}
			redirect('Penjualan/cetak_nota/'.$no_jual);
			
		}
		
	}
	function update_cetak_retur(){
		if(isset($_POST['submit'])){
			$no_retur = $this->input->post('no_retur');
			$alasan_cetak = $this->input->post('alasan_cetak');
			$cetak = $this->input->post('cetak');
			$loop_cetak = $this->db->get_where('tb_retur',array('no_retur'=>$no_retur))->row_array();
			$cetakann = $loop_cetak['cetak'];
			if($cetakann > 5){
				$this->session->set_flashdata("message","<script> alert('Oops.. Gak Bisa Ngeprint Lagi')</script>");
				redirect('Penjualan/view_retur');
			}else{
				$data = array(
					'no_retur'     => $no_retur,
					'alasan_cetak' => $alasan_cetak,
					'cetak' 	   => $cetak,
				);
				$this->db->insert('cetak_retura5',$data);
				$this->db->query("UPDATE tb_retur SET cetak = cetak + '$cetak', alasan_cetak = '$alasan_cetak' WHERE no_retur = '$no_retur'");
				redirect('Penjualan/cetak_a4_retur/'.$no_retur);

			}
		}
	}
	function input_retur_noju(){

		if(isset($_POST['submit'])){
			
			$this->Model_penjualan->insert_retur_noju();
			
		}if(isset($_POST['submit2'])){
			$this->Model_penjualan->insert_retur_noju_cetak();
			
		}if(isset($_POST['submit3'])){
			$this->Model_penjualan->insert_retur_noju_cetak_a4();
			
		}else{
			$a = $this->Model_penjualan->getNomorterakhir2()->row_array();
                            //Mengambil Tahun di Sistem
			$tahun    = date('y');
			$id       = ('RO');
			$id1       = ('-');
			$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			$bln		= $c[date('n')];
			$format   = $tahun.$id.$id1.$bln;			
			$data['autonumber'] 	= buatkode($a['no_retur'],$format,4);
			$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
			$data['p'] 				= $this->Model_penjualan->get_retur()->row_array();
			$this->template->load('template','Penjualan/input_retur_noju',$data);
		}
	}
	
	function input_po(){

		if(isset($_POST['submit'])){
			
			//$this->Model_penjualan->insert_retur_noju();
			
		}else{

			//$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
			$this->template->load('template','Penjualan/input_po');
		}
	}
	function input_retur2(){

		if(isset($_POST['submit'])){
			
			//$this->Model_penjualan->insert_retur_noju();
			
		}if(isset($_POST['submit2'])){
			//$this->Model_penjualan->insert_retur_cetak();
			
		}else{
			$a = $this->Model_penjualan->getNomorterakhir2()->row_array();
                            //Mengambil Tahun di Sistem
			$tahun    = date('y');
			$id       = ('R');
			$id1       = ('-');
			$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			$bln		= $c[date('n')];
			$format   = $tahun.$id.$id1.$bln;			
			$data['autonumber'] 	= buatkode($a['no_retur'],$format,4);
			//$data['autonumber1'] 	= buatkode($b['no_sj'],$format2,4);
			//$data['listsales'] 	= $this->Model_sales->view_sales();
			//$data['listkategori']  = $this->Model_kategori->view_kategori();
			$data['listpelanggan']  = $this->Model_penjualan->view_penjualan();
			$data['p'] 				= $this->Model_penjualan->get_re()->row_array();
			//$data['list_barang'] 	= $this->Model_barang->view_barang();
			//$data['list_barang']	= $this->Model_barang->view_barang();
			//$data['list_tmp'] 	= $this->Model_penjualan->view_detail_barang();
			//$data['pel'] 			= $this->Model_pelanggan->get()->row_array();
			$this->template->load('template','Penjualan/input_retur1',$data);
		}
	}
	function edit_penjualan(){
		if(isset($_POST['submit'])){
			
			//$this->Model_penjualan->insert_retur_noju();
			
		}else{
			$data['d'] 	= $this->Model_penjualan->get_edit_penjualan()->row_array();
			$this->template->load('template','Penjualan/edit_penjualan',$data);
		}
	}
	
	function input_retur(){

		if(isset($_POST['submit'])){
			
			$this->Model_penjualan->insert_retur();
			
		}if(isset($_POST['submit2'])){
			$this->Model_penjualan->insert_retur_cetak();
			
		}else{
			$a = $this->Model_penjualan->getNomorterakhir2()->row_array();
                            //Mengambil Tahun di Sistem
			$tahun    = date('y');
			$id       = ('R');
			$id1       = ('-');
			$c = array('','I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			$bln		= $c[date('n')];
			$format   = $tahun.$id.$id1.$bln;			
			$data['autonumber'] 	= buatkode($a['no_retur'],$format,4);
			//$data['autonumber1'] 	= buatkode($b['no_sj'],$format2,4);
			//$data['listsales'] 		= $this->Model_sales->view_sales();
			//$data['listkategori']   = $this->Model_kategori->view_kategori();
			$data['listpelanggan']  = $this->Model_pelanggan->view_pelanggan();
			//$data['list_barang'] 	= $this->Model_barang->view_barang();
			//$data['list_barang']	= $this->Model_barang->view_barang();
			//$data['list_tmp'] 		= $this->Model_penjualan->view_detail_barang();
			//$data['pel'] 			= $this->Model_pelanggan->get()->row_array();
			$this->template->load('template','Penjualan/input_retur',$data);
		}
	}
	function riset(){	
		$query = "truncate tb_detail_b_barangP";
		$this->db->query($query);
		$query1 = "truncate tb_retur_tmp";
		$this->db->query($query1);
		redirect('Penjualan/input_penjualan');

	}
	function riset_retur(){	
		$query = "truncate retur_tmp";
		$this->db->query($query);
		redirect('Penjualan/view_penjualan');

	}
	function cetak_struk(){	
		$data['d'] = $this->Model_penjualan->get()->row_array();
			//$data['b'] = $this->Model_penjualan->get3()->row_array();	
		$this->load->view('Penjualan/cetak',$data);

	}
	function display_printer(){	
		$this->load->view('Penjualan/display_printer');

	}
	function cetak_langsung(){	
		$this->load->view('Penjualan/cetak_langsung');

	}
	function cetak_langsungan(){	
		$this->load->view('Penjualan/cetak_langsungan');

	}
	function versi(){	
		$this->load->view('Penjualan/versi');

	}
	function cetak_nota(){	
		$data['d'] = $this->Model_penjualan->get1()->row_array();
		$this->load->view('Penjualan/cetak_a4',$data);

	}
	public function destroy($user,$id_barang)
	{
		$data=$this->Model_penjualan->delete($user,$id_barang);
		$data = ['success'=>200];

		echo json_encode($data);
	}
	public function destroy2($id_brg,$user)
	{
		$data=$this->Model_penjualan->delete_retur($user,$id_brg);
		$data = ['success'=>200];

		echo json_encode($data);
	}
	public function destroy3($user,$idbarang)
	{
		$data=$this->Model_penjualan->delete_kirim($user,$idbarang);
		$data = ['success'=>200];

		echo json_encode($data);
	}
	public function destroy4($user,$idbarang)
	{
		$data=$this->Model_penjualan->d_retur_tmp($user,$idbarang);
		$data = ['success'=>200];

		echo json_encode($data);
	}
	function data_barang(){
		$data=$this->Model_penjualan->barang_list();
		echo json_encode($data);
	}
	function hapus_barang(){
		$id_barang=$this->input->post('kode');
		$data=$this->Model_penjualan->hapus_barang($id_barang);
		echo json_encode($data);
	}
	public function get_data_retur_nojul() {    
		$keyword = $this->uri->segment(3);
		$nono = $this->uri->segment(4);
		$data = $this->db->query("SELECT * FROM tb_detail_penjualan INNER JOIN tb_barang ON tb_detail_penjualan.id_barang = tb_barang.id_barang 
			WHERE nama_barang LIKE '%$nono%' AND no_jual = '$keyword' AND jual = 'Y' "); 

		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword.$nono;
			$arr['suggestions'][] = array(
				'value'    		  =>$row->nama_barang,
				'id_barang'    	  =>$row->id_barang,
				'stok'    	  	  =>$row->stok,
				'satuan_besar'    =>$row->satuan_besar,
				'qty_b'   		  =>$row->qty_b,
				'qtyb'   		  =>$row->qtyb,
				'satuan_kecil'    =>$row->satuan_kecil,
				'qty_k'    		  =>$row->qty_k,
				'komisi'    	  =>$row->komisi,
				'modal'    		  =>$row->modal,
				'pricelist' 	  =>$row->pricelist,
				'harga_jual'      =>$row->harga_jual,
				'harga_beli'      =>$row->harga_beli,
				'walk'    		  =>$row->walk,
				'tk'    		  =>$row->tk,
				'tb'    		  =>$row->tb,
				'sls'    		  =>$row->sls,
				'agn'    		  =>$row->agn,
				'disc'    		  =>$row->disc,
				'disc1'    		  =>$row->disc1,
			);
		}
		echo json_encode($arr);
	}

	public function get_data() {    
		//$this->load->model('Model_barang');
		$keyword = $this->uri->segment(3);
		//$id_k_pelanggan = $this->input->post('id_k_pelanggan');
		$data = $this->db->from('tb_barang')->like('nama_barang',rawurldecode($keyword),$keyword)->where('jual = "Y"')->get();            
		
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'    		  =>$row->nama_barang,
				'id_barang'    	  =>$row->id_barang,
				'stok'    	  	  =>$row->stok - $row->so,
				'satuan_besar'    =>$row->satuan_besar,
				'qty_b'   		  =>$row->qty_b,
				'satuan_kecil'    =>$row->satuan_kecil,
				'qty_k'    		  =>$row->qty_k,
				'komisi'    	  =>$row->komisi,
				'modal'    		  =>$row->modal,
				'pricelist' 	  =>$row->pricelist,
				'harga_jual'      =>$row->harga_jual,
				'walk'    		  =>$row->walk,
				'tk'    		  =>$row->tk,
				'tb'    		  =>$row->tb,
				'sls'    		  =>$row->sls,
				'agn'    		  =>$row->agn,
			);
		}
		echo json_encode($arr);
	}
	public function get() {    
		$this->load->model('Model_penjualan');
		$no_jual = $this->uri->segment(3);
		//$id_k_pelanggan = $this->input->post('id_k_pelanggan');
		$data = $this->db->from('tb_penjualan')->like('no_jual',$no_jual)->get();            

		foreach($data->result() as $row)
		{
			$arr['query'] = $no_jual;
			$arr['suggestions'][] = array(
				'value'    		  =>$row->no_jual,
				'no_jual'    	  =>$row->no_jual,
				'id_pelanggan' 	  =>$row->id_pelanggan,
				'no_reff' 		  =>$row->no_reff,

			);
		}
		echo json_encode($arr);
	}
	
	function input_detail_barang(){

			$data=$this->Model_penjualan->input_detail_barang($idbarang,$qtybes,$satuanbes,$modal,$hargabeli,$disc,$disc1,$jam); //dihapus ,$disc2
			$data=$this->Model_penjualan->input_detail_barangs($idbarang,$qtybes,$satuanbes,$modal,$hargabeli,$disc,$disc1,$jam); //dihapus ,$disc2
			echo json_encode($data);

		}
		function input_detail_retur(){

			$data=$this->Model_penjualan->input_detail_retur($idplg,$idbrg,$qty,$satuan,$hargajual,$diskon1,$diskon2,$jam); //dihapus ,$disc2
			echo json_encode($data);

		}
		function input_detail_retur1(){

			$data=$this->Model_penjualan->input_detail_retur1($noju,$idbarang,$qtybes,$satuanbes,$modal,$hargabeli,$disc,$disc1); //dihapus ,$disc2
			echo json_encode($data);

		}
		function input_detail_retur2(){

			$data=$this->Model_penjualan->input_detail_retur2($idpelanggan,$idbarang,$qtybes,$satuanbes,$modal,$hargabeli,$disc,$disc1); //dihapus ,$disc2
			echo json_encode($data);

		}
		function input_detail(){

			$data=$this->Model_penjualan->input_detail($idbarang,$hargasatuan,$satuanbesar,$jmlkrm,$noju); //dihapus ,$disc2
			echo json_encode($data);

		}

		function view_detail(){
			$data['list_tmp'] = $this->Model_penjualan->view_detail();
			$this->load->view('Surat_jalan/data_tmp',$data);
		}
		function retur_tmp(){
			$data['retur_tmp'] = $this->Model_penjualan->retur_tmp();
			$this->load->view('Penjualan/retur_tmp',$data);
		}
		function edit_detail(){
			$this->load->view('Penjualan/detail_edit');
		}
		
		
		function view_cash(){
			$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
			$data['listpenjualan'] = $this->Model_penjualan->view_cash();
			$this->template->load('template','Penjualan/view_cash',$data);

		}


		function cetak_retur(){	
			$data['d'] = $this->Model_penjualan->get2()->row_array();
			$this->load->view('Penjualan/cetak_retur',$data);
			
		}
		function cetak_list(){	
			$data['d'] = $this->Model_penjualan->get3()->row_array();	
			$this->load->view('Penjualan/cetak_list',$data);
			
		}
		function cetak_a4_retur(){	
			$data['d'] = $this->Model_penjualan->get2()->row_array();	
			$this->load->view('Penjualan/cetak_a4_retur',$data);
			
		}
		function retur_detail(){
			$id = $this->input->post('id_barang');
			$data['listretur'] = $this->Model_penjualan->view_detail_retur1($id);
			$this->load->view('Penjualan/retur_detail',$data);

		}

		function detail_data(){
			$id = $this->input->post('id_barang');
			$data['listdetail'] = $this->Model_penjualan->detail_penjualan($id);
			$data['listretur'] = $this->Model_penjualan->detail_retur($id);
			$this->load->view('Penjualan/data_detail',$data);

		}
		function penjualan_data(){
			$id = $this->input->post('no_jual');
			$data['penjualan_data'] = $this->Model_penjualan->penjualan_data($id);
			$this->load->view('Penjualan/penjualan_data',$data);

		}
		function detail_retur(){
			$id = $this->input->post('id_barang');
			$data['listdetail'] = $this->Model_penjualan->detail_penjualan($id);
			$data['listretur'] = $this->Model_penjualan->detail_retur($id);
			$this->load->view('Penjualan/detail_retur',$data);

		}
		function view_detail_retur(){

			$data['list_tmp'] = $this->Model_penjualan->view_detail_retur();
			$this->load->view('Penjualan/data_retur_tmp',$data);
			
		}
		function view_detail_barang(){
			
			$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
			$this->load->view('Penjualan/data_tmp',$data);
			
		}
		
		function view_detail_barang2(){
			$data['list_retur'] = $this->Model_penjualan->view_detail_retur();
			$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
			$this->load->view('Penjualan/data_tmp_tt',$data);
			
		}
		function view_total_retur(){
			$data['list_retur'] = $this->Model_penjualan->retur_tmp();
			$this->load->view('Penjualan/data_tmp_rr',$data);
			
		}
		
		function view_retur_total(){
			$data['list_retur'] = $this->Model_penjualan->retur_tmp();
			$this->load->view('Penjualan/retur_tmp_tt',$data);
		}
		function view_detail_barang3(){
			$data['list_retur'] = $this->Model_penjualan->view_detail_retur();
			$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
			$this->load->view('Penjualan/p_walk1',$data);
			
		}
		function view_detail_barang4(){
			$data['retur_tmp'] = $this->Model_penjualan->retur_tmp();
			$data['list_tmp'] = $this->Model_penjualan->view_detail_barang();
			$this->load->view('Penjualan/p_walk2',$data);
			
		}
		function looping_batal(){
			$id = $this->input->post('no_jual');
			$data['batal'] = $this->Model_penjualan->looping_batal($id);
			$this->load->view('Penjualan/pembatalan',$data);
		}
		function pembatalan(){
			if(isset($_POST['submit'])){	
				$no_jual = $this->input->post('no_jual');
				$batal = $this->input->post('batal');


				$data = array(
					'no_jual'      => $no_jual,
					'batal' 	   => $batal,
				);
				$this->db->where('no_jual',$no_jual);
				$this->db->update('tb_penjualan',$data);
				$this->db->query("UPDATE tb_penjualan SET total = 0, sisa2 = 0, sisa = 0, potongan = 0, nominal1 = 0, nominal2 = 0,cash = 0,debet = 0, transfer = 0, dp = 0, giro = 0 WHERE no_jual = '$no_jual'");
				$this->db->query("UPDATE tb_detail_penjualan SET qtyb = 0, harga_beli = 0,disc = 0,disc1 = 0, disc2 = 0, total = 0 WHERE no_jual = '$no_jual'");
				$this->db->query("UPDATE transaksi_day SET total = 0, potongan = 0, beban = 0, grand_total = 0, cash = 0, debet = 0, transfer = 0, giro = 0, kembali = 0, sisa_tagihan = 0 WHERE no_transaksi = '$no_jual'");
				$this->db->query("UPDATE saldo SET total = 0, potongan = 0, cash = 0, debet = 0, transfer = 0, giro = 0, kembali = 0, tagihan = 0, sisa = 0 WHERE id_transaksi = '$no_jual'");
				$this->db->query("UPDATE tb_sj SET stok = 0 WHERE no_jl = '$no_jual'");
				$this->db->query("UPDATE surat_jalan SET qtyb = 0, harga_satuan = 0, sisa_kirim = 0 WHERE no_jl = '$no_jual'");
				redirect('Penjualan/view_penjualan/');

			}
		}
		function hapusitem()
		{
			$id_barang = $this->input->get('id');
			$result = $this->Model_penjualan->hapusitem($id_barang);
		}
		function cek_stok(){
			$data=$this->Model_penjualan->stok($kode);
			echo json_encode($data);
		}
		
		
		
	}
	?>