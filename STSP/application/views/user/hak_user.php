<html>
<tbody> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>css/font5.css">
	<tbody>
	<div class = "row">
	<section class = "col-lg-8" connectedSortable id = "select2">
	<div class="box box-primary box-solid">
		<div class="box-header">
			<h3 class="box-title"><i class="fa fa-tag"></i> Hak Akses <?php echo $d['level'];?></h3>
		</div>
					<form class="form-horizontal" class="form-vertical" method="POST" action="" enctype = "multipart/form-data">
						<div class="box-body">
							<div class="form-group">
								
							<div class="col-sm-5">
									<input name="level" value="<?php echo $d['level']; ?>" readonly type="hidden" placeholder="Kode User" class="form-control">
							</div>
							</div>
							
							<div class="form-group">
								<div style = "margin-left:35px;">
								<table border = "0">
								<tr>
								<td><h5><b>MENU</b></h5></td>
								</tr>
								<tr>
								<td><b>Master Data</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="m_data" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['m_data'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td><b>Data Barang</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="d_barang" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['d_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td><b>Pembelian</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="transaksi" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['transaksi'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td><b>Penjualan</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="transaksi2" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['transaksi2'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td><b>Akuntansi</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="akuntansi" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['akuntansi'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td><b>Laporan</b></td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="laporan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['laporan'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Kategori Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="k_barang" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['k_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Stok</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="stok" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['stok'];?>" autocomplete="off" maxlength="1"></td>
								<td>Purchase Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="purchase_order" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['purchase_order'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Sales Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="sales_order" onkeyup=" this.value=this.value.toUpperCase();"  value="<?php echo $d['sales_order'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Kategori Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="kategori_akun" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['kategori_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Lap Saldo Supplier</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="l_saldo_supplier" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['l_saldo_supplier'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Satuan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="satuan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['satuan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Price List</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="price_list" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['price_list'];?>" autocomplete="off" maxlength="1"></td>
								<td>Pembelian</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="pembelian" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['pembelian'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Surat Jalan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="surat_jalan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['surat_jalan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Daftar Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="daftar_akun" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['daftar_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Lap Saldo Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="l_saldo_pelanggan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['l_saldo_pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="barang" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Profit</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="profit" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['profit'];?>" autocomplete="off" maxlength="1"></td>
								<td>Pembayaran</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="pembayaran" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['pembayaran'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Penjualan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="penjualan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['penjualan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Daftar SubAkun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="daftar_subakun" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['daftar_subakun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Lap Purchase Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="lap_po" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['lap_po'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Kategori Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="k_pelanggan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['k_pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> Giro </td>
								<td> &nbsp </td>
								<td> <input type="text" style = "width:20px; padding-left: 5px;" name="giro" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['giro'];?>" autocomplete="off" maxlength="1"> </td>
								<td>&nbsp </td>
								<td>Penerimaan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="penerimaan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['penerimaan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Buku Besar</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="buku_besar" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['buku_besar'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>Lap Transaksi Pembelian</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px ; padding-left: 5px;" name="l_transaksi_pembelian" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['l_transaksi_pembelian'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="pelanggan" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp  </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>Tanda Terima</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="l_tanda_terima" value="<?php echo $d['l_tanda_terima'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>Jurnal Umum</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="jurnal_umum" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['jurnal_umum'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>Lap Sales Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="lap_so" value="<?php echo $d['lap_so'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Supplier</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="supplier" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['supplier'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp  </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>Barang Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="barang_hadiah" value="<?php echo $d['barang_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td>Lap Transaksi Penjualan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="l_transaksi_penjualan" value="<?php echo $d['l_transaksi_penjualan'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Sales</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="sales" onkeyup=" this.value=this.value.toUpperCase();" autocomplete="off" value="<?php echo $d['sales'];?>" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td>Pembelian Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="pembelian_hadiah" value="<?php echo $d['pembelian_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td>Lap Pajak Umum</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="lap_pajak" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['lap_pajak'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>Mata Uang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="mata_uang" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['mata_uang'];?>"autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td>Pemberian Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="pemberian_hadiah" value="<?php echo $d['pemberian_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td>Lap Pajak Khusus</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="pajak_khusus" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['pajak_khusus'];?>" autocomplete="off" maxlength="1"></td>
								</tr>
								<tr>
								<td>&nbsp &nbsp </td>
								<td>&nbsp  </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>Lap Komisi</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" name="lap_komisi" onkeyup=" this.value=this.value.toUpperCase();" value="<?php echo $d['lap_komisi'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td><h5><b>Aksi (I E H R)</b></h5></td>
								</tr>
								<tr>
								<td>I. Kategori Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_kategori_barang" value="<?php echo $d['i_kategori_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>I. Purchase Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_po" value="<?php echo $d['i_po'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Sales Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_so" value="<?php echo $d['i_so'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>I. Kategori Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_kategori_akun" value="<?php echo $d['i_kategori_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>E. Kategori Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_kategori_barang" value="<?php echo $d['e_kategori_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>E. Purchase Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_po" value="<?php echo $d['e_po'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>R. Sales Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="r_so" value="<?php echo $d['r_so'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>E. Kategori Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_kategori_akun" value="<?php echo $d['e_kategori_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>I. Satuan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_satuan" value="<?php echo $d['i_satuan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>R. Purchase Order</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="r_po" value="<?php echo $d['r_po'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Surat Jalan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_surat_jalan" value="<?php echo $d['i_surat_jalan']?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>H. Kategori Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_kategori_akun" value="<?php echo $d['h_kategori_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>E. Satuan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_satuan" value="<?php echo $d['e_satuan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>I. Pembelian</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_pembelian" value="<?php echo $d['i_pembelian'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>R. Surat Jalan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="r_surat_jalan" value="<?php echo $d['r_surat_jalan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>I. Daftar Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_daftar_akun" value="<?php echo $d['i_daftar_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>I. Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_barang" value="<?php echo $d['i_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>E. Pembelian</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_pembelian" value="<?php echo $d['e_pembelian'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Penjualan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_penjualan" value="<?php echo $d['i_penjualan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>E. Daftar Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_daftar_akun" value="<?php echo $d['e_daftar_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>E. Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_barang" value="<?php echo $d['e_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>R. Pembelian</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="r_pembelian" value="<?php echo $d['r_pembelian'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>R. Penjualan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="r_penjualan" value="<?php echo $d['r_penjualan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>H. Daftar Akun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_daftar_akun" value="<?php echo $d['h_daftar_akun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>H. Barang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_barang" value="<?php echo $d['h_barang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>I. Pembayaran</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_pembayaran" value="<?php echo $d['i_pembayaran'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Penerimaan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_penerimaan" value="<?php echo $d['i_penerimaan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>I. Daftar SubAkun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_daftar_subakun" value="<?php echo $d['i_daftar_subakun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>I. Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_pelanggan" value="<?php echo $d['i_pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>I. Giro</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_giro" value="<?php echo $d['i_giro'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Barang Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_barang_hadiah" value="<?php echo $d['i_barang_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>E. Daftar SubAkun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_daftar_subakun" value="<?php echo $d['e_daftar_subakun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>E. Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_pelanggan" value="<?php echo $d['e_pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>E. Giro</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_giro" value="<?php echo $d['e_giro'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>E. Barang Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_barang_hadiah" value="<?php echo $d['e_barang_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								<td>H. Daftar SubAkun</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_daftar_subakun" value="<?php echo $d['h_daftar_subakun'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								</tr>
								<tr>
								<td>H. Pelanggan</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_pelanggan" value="<?php echo $d['h_pelanggan'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>H. Giro</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_giro" value="<?php echo $d['h_giro'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>I. Pembelian Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_pembelian_hadiah" value="<?php echo $d['i_pembelian_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>I. Supplier</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_supplier" value="<?php echo $d['i_supplier'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td>I. Pemberian Hadiah</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_pemberian_hadiah" value="<?php echo $d['i_pemberian_hadiah'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>E. Supplier</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_supplier" value="<?php echo $d['e_supplier'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>H. Supplier</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_supplier" value="<?php echo $d['h_supplier'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>I. Sales</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_sales" value="<?php echo $d['i_sales'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>E. Sales</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_sales" value="<?php echo $d['e_sales'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>Cetak Sales</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="cetak_sales" value="<?php echo $d['cetak_sales'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>Reset Sales</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="reset_sales" value="<?php echo $d['reset_sales'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>I. Mata Uang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="i_mata_uang" value="<?php echo $d['i_mata_uang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>E. Mata Uang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="e_mata_uang" value="<?php echo $d['e_mata_uang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								<tr>
								<td>H. Mata Uang</td>
								<td>&nbsp </td>
								<td><input type="text" style = "width:20px; padding-left: 5px;" onkeyup=" this.value=this.value.toUpperCase();" name="h_mata_uang" value="<?php echo $d['h_mata_uang'];?>" autocomplete="off" maxlength="1"></td>
								<td>&nbsp &nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp &nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								<td> &nbsp </td>
								<td>&nbsp </td>
								
								</tr>
								</table>
								</div>
							</div>
						<br>
						<br>
						<br>
						<div  class="col-sm-12">
						<table align = "right">
						<tr>
						<td>
							<input type="submit" name = "submit" value = "UPDATE" class="btn btn-primary">
						<a href = "<?php echo base_url();?>User/view_user" class="btn btn-sm btn-danger">Cancel</a>
						</td>
						</tr>
						</table>
						</div>
								</table>
						</div>	
					</form>
				</div>
				</section>
				
		  </div>
	</tbody>
</html>