 <html>
 <head>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">  <!-- Ionicons -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">  <!-- DataTables -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.autocomplete.css">
 	<style>
 		table {
 			border-collapse: collapse;
 			border-spacing: 0;
 			width: 100%;
 			border: 1px solid #ddd;
 		}
 		.table1 {
 			border-collapse: collapse;
 			border-spacing: 0;
 			width: 100%;
 			border: 0px solid #ddd;
 			margin-left : 18px;
 		}
 		th, {
 			text-align: center;
 			padding: 8px;
 		}


 	</style>
 </head>
 <body onLoad="startTime()">	

 	<div class = "row">
 		<section class="col-lg-12 connectedSortable" style = "margin-left:-3px;width:100%;">
 			<div class="box box-primary" > 
 				<h3 class="box-title" style="margin-top: 4px;margin-bottom: -19px;padding-bottom: 4PX;" >Input Pembayaran</h3>
 			</div>
 			<div class="box-body">
 				<div class="col-md-7">
 					<form class="form-horizontal"  method="POST" action="" id = "form" enctype = "multipart/form-data">
 						<div class="form-group">
 							<label class="col-sm-40 control-label"  style="width: 179px;">No Bukti</label>
 							<div class="col-sm-37" style="margin-left: -77px;">
 								<input type="text" name="" id="" value="<?php echo $autonumber;?>" autocomplete="off" readonly  class="form-control" placeholder = " No Jual">

 							</div>
 							<div class="form-group">
 								<label class="col-sm-40 control-label"  style="margin-left: 6px;width: 179px;">Tanggal </label>
 								<div class="col-sm-37" style="margin-left: -81px;">
 									<input type="hidden" name="tgl" id = "" value="<?php echo date('Y-m-d') ;?>"onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 									<input type="text" name="tgl_bayar" id = "tgl_bayar" value="<?php echo date('d-m-Y') ;?>"onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 									<input type="hidden" name="bulan" id = "bulan" value="<?php echo date('m') ;?>"onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 									<textarea rows="1" style = "display:none;" class="form-control" name="jam" id="txt" style="height: 34px;"readonly></textarea>
 									<input type="hidden" name="no_urut" id = "" value="1" onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 								</div>
 								<label class="col-sm-40 control-label"  style="margin-left: 6px;width: 179px;">Nama Supplier</label>
 								<div class="col-sm-37" style="margin-left: -81px;">
 									<input type="text" name="" id="" value="<?php echo $p['nama_supplier'];?>" autocomplete="off" readonly  class="form-control" placeholder = " No Jual">
 									<input type="hidden" name = "id_supplier" id="id" value="<?php echo $p['id_supplier'];?>" autocomplete="off" readonly  class="form-control" placeholder = " No Jual">
 								</div>
 							</div>
 						</div>
 					</div>		
 					<div class="col-md-4">
 						<div class="col-md-11  tampildata">
 							<div class="info-box bg-aqua" style="min-height:105px">
 								<span class="info-box-icon" style="height:105px; padding:4px 0; width:50px"><i class="fa fa-shopping-cart"></i></span>
 								<div class="info-box-content">
 									<span class="info-box-number"  style=" font-size:23px; padding:36px 0"><div id="grandtotal"></div></span>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-9" style="width: 81%;margin-left: -20px;margin-top: -61px;">
 						<div class="col-sm-30" style="width:490px" >
 							<input type="text"  name="no_beli" id="no_beli" class="form-control" autofocus placeholder = "NO BELI" tabindex = "1"  >
 							<input type="hidden"  name="nobeli" id="nobeli" class="form-control" placeholder = "No Jual" >
 							<input type="hidden"  name="noreff" id="noreff" class="form-control" placeholder = "No Jual" >
 						</div>
 						<div class="col-sm-30" style="width:150px" >
 							<input type="hidden"  name="idsupplier" id="idsupplier"readonly class="form-control" placeholder = "ID Supplier" >
 						</div>

 						<div class="col-sm-35" style="width:150px">
 							<input type="text"  name="tot" id="totalan2"  readonly autocomplete="off" class="form-control" placeholder = "TOTAL" >
 							<input type="hidden"  name="total" id="totalan"  readonly autocomplete="off" class="form-control" placeholder = "TOTAL" >
 							
 						</div>
 						
 						<div class="col-sm-35" style="width:150px">
 							<input type="text"  name="b" id="by2"  autocomplete="off" class="form-control" placeholder = "BAYAR" tabindex = "2">
 							<input type="hidden"  name="bayar" id="by"  autocomplete="off" class="form-control"  placeholder = "BAYAR" tabindex = "2">
 							
 						</div>
 						<div class="col-sm-35" style="width:150px">
 							<input type="text"  name="s" id="sisaan2" readonly autocomplete="off" class="form-control" placeholder = "SISA">
 							<input type="hidden"  name="sisabayar" id="sisaan" readonly autocomplete="off" class="form-control" placeholder = "SISA">
 							
 						</div>
 						<div class="col-sm-31">
 							<button   type="submit" class="btn btn-sm btn-primary" name="btn_simpan" id="btn_simpan"  tabindex = "3">OK</button>
 							
 						</div>
 						
 						<div class="col-sm-31">
 							<br>
 							<br> 							
 							<br>
 						</div>
 						<table id = "#" class="table table-condensed">
 							<thead bgcolor="#99FF99">
 								<tr>
 									<th width = "505px">No Beli</th>
 									<th width = "150px"> Total</th>
 									<th width = "150px"> Bayar</th>
 									<th width = "150px">Sisa</th>
 									<th> A</th>
 								</tr>
 							</thead>
 							<tbody id = "tampilan">
 								
 							</tbody>
 						</table>
 						<hr>
 						<div class="form-group">
 							<label class="col-sm-29 control-label">Keterangan</label>
 							<div class="col-sm-33" style="width:750px">
 								<input type="text"  name="keterangan" id="ket" onkeyup=" this.value=this.value.toUpperCase();" autocomplete="off" class="form-control" placeholder = "KETERANGAN (F2)">
 							</div>
 						</div>
 						
 						<div class="col-sm-31">
 							<br>
 							<br>
 							<br>
 							<br>
 							<br>
 							<br>
 						</div>
 						<?php		
 						$id_supplier = $this->uri->segment(3);
 						$query = "SELECT tb_pembelian.no_beli,tb_pembelian.id_supplier,tb_pembelian.no_reff,tb_pembelian.total,tb_pembelian.sisa,tb_supplier.nama_supplier 
 						from tb_pembelian INNER JOIN tb_supplier ON tb_pembelian.id_supplier=tb_supplier.id_supplier  WHERE tb_pembelian.id_supplier='$id_supplier' AND sisa > 0 
 						order by no_beli desc ";
 						$cari = $this->db->query($query);
 						$cari->num_rows();
 						
 						?>
 						<table id = "example" class="table table-condensed" style="width:700px">
 							<thead bgcolor="#66CCFF">
 								<tr>
 									<td width = "10px" ><b>No</b></td>
 									<td width = "100px" ><b>No Beli</b></td>
 									<td  width = "300px"><b>Supplier</b></td>
 									<td  align="right" width = "100px"><b>Total</b></td>
 									<td  align="right" width = "100px"><b>Sisa Tagihan</b></td>	
 								</tr>
 							</thead> 
 							<tbody>
 								<?php 
 								$no=1;
 								if(isset($cari)){
 									foreach ($cari->result_array() as $f){
 										?>
 										
 										<tr>
 											<td><?php echo $no;?></td>
 											<td><?php echo $f['no_beli'];?>/<?php echo $f['id_supplier'];?>/<?php echo $f['no_reff'];?></td>
 											<td><?php echo $f['nama_supplier'];?></td>
 											<td  align="right"><?php echo number_format($f['total'],2);?></td>
 											<td  align="right"><?php echo number_format($f['sisa'],2);?></td>
 										</tr>
 										<?php $no++;}}?>
 									</tbody>
 								</table>
 								<hr>
 							</div>
 							<div class="col-md-3" style="margin-top: -9px;margin-left: -15px">
 								<div class="col-sm-41 tampildata1" style = "margin-left: -13px;margin-top: 8px;">
 								</div>
 								<textarea style="display:none;" rows="1"class="form-control" name="bayaran" id="bayar" style="height: 34px;"readonly></textarea>
 								<textarea style="display:none;" rows="1"class="form-control" name="totalan" id="tot" style="height: 34px;"readonly></textarea>
 								<textarea  style="display:none;" rows="1"class="form-control" name="kembali" id="kem" style="height: 34px;"readonly></textarea>
 								<textarea  style="display:none;" rows="1"class="form-control" name="kurang_bayar" id="sis" style="height: 34px;"readonly></textarea>
 								<textarea style="display:none;" rows="1"class="form-control" name="" id="kurs_tukar1" style="height: 34px;"readonly><?php echo $p['kurs_tukar'];?></textarea>
 								<textarea style="display:none;" rows="1"class="form-control" name="kode_mu" id="kode_mu1" style="height: 34px;"readonly><?php echo $p['kode_mu'];?></textarea>
 								<textarea style="display:none;" rows="1"class="form-control" name="kurs_tukar" id="hasil_kurs_tukar1" style="height: 34px;"readonly></textarea>
 								<input type="hidden" id="potongan2" name = "potongan" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="cash2" name = "cash" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="deb" name = "debet" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="ban1" name = "bank1" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="trans" name = "transfer" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="ban2" name = "bank2" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="gr" name = "giro" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="keg" name = "ket_giro" autocomplete="off"  class="form-control" placeholder = "Potongan Harga">
 								<input type="hidden" id="ka_pot" name = "ka_pot" >

 								<table class = "table1">
 									<tr>
 										<td align = "right">
 											<input type="submit" name = "submit" id="btn_simpan1" value = "SIMPAN" class="btn btn-sm btn-primary">
 											<?php if($this->session->userdata('level') === 'Administrator'  OR $this->session->userdata('level') === 'KasirThermal' OR $this->session->userdata('level') === 'Manager'): ?>
 											<input type="submit" name = "submit2" id="simpan2" value = "SIMPAN & CETAK" class="btn btn-sm btn-info" >
 										<?php endif;?>
 										<a href = "<?php echo base_url();?>Pembayaran/view_pembayaran" class = "btn btn-sm btn-danger">Cancel</a>
 									</td>
 								</tr>
 							</table>
 						</div>

 					</div>
 				</div>
 			</section>

 			<?php echo $this->session->flashdata('message');
 			?>
 			<?php echo $this->session->flashdata('error');
 			?>
 		</div>
 	</body>

 	<div class="modal fade bd-example-modal-lg pelanggan" id="pwalk1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<br>
 		<br>
 		<div class="modal-dialog modal-lg" role="document" style="width:300px;align-content: center;">
 			<div class="modal-content" >
 				<br>
 				<div class="modal-header">
 					<h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
 				</div>
 				<br>
 				<div class="row">
 					<div class="col-sm-12 tampildata1">
 					</div>
 				</div>
 				<div class="modal-footer">
 					<div class="col-sm-12">
 						<div class="form-group">
 							<table class = "table1">
 								<tr>
 									<td align = "right">
 										<input type="submit" name = "submit" id="btn_simpan1" value = "SIMPAN" class="btn btn-sm btn-primary">
 										<?php if($this->session->userdata('level') === 'Administrator'  OR $this->session->userdata('level') === 'KasirThermal' OR $this->session->userdata('level') === 'Manager'): ?>
 										<input type="submit" name = "submit2" id="simpan2" value = "SIMPAN & CETAK" class="btn btn-sm btn-info" >
 									<?php endif;?>
 									<a href = "#" data-dismiss="modal" aria-label="Close" class = "btn btn-sm btn-danger">Cancel</a>
 								</td>
 							</tr>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="modal fade bd-example-modal-lg pelanggan" id="akun" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-lg" role="document">
 		<div class="modal-content" style="width:429px; margin-left:250px">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Data Akun</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<br>
 			<div class="modal-body" style = "width:300px;">
 				<table  class="table table-condensed" id = "example2" style = "width:390px;">
 					<thead bgcolor="#99FF99">
 						<tr>

 							<th><b>Kode akun</b> </th>
 							<th><b>Nama Akun</b> </th>
 							<th><b>A</b> </th>
 						</tr>
 					</thead>

 					<tbody >
 						<tr>
 							<?php
 							$query1 = "SELECT * FROM daftar_subakun";
 							$cari1 = $this->db->query($query1);

 							?>
 							<?php
 							foreach ($cari1->result_array() as $p){
 								?>
 								<td><?php echo $p['kode_subakun']?></td>
 								<td><?php echo $p['nama']?></td>
 								<td><a href="#" class="btn btn-xs btn-primary akuns" data-kodes="<?php echo $p['kode_subakun'];?>" data-nama="<?php echo $p['nama'];?>" data-nama1="Potongan" data-nama2="Pembayaran"><i class="fa fa-plus"></i></a></td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>

 			<div class="modal-footer">

 			</div>
 		</div>
 	</div>
 </div>
</form>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>		
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/number.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.autocomplete.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.maskMoney.js" type="text/javascript"></script>


<script type="text/javascript">
	$(".demo2").maskMoney({thousands:',', decimal:'.', allowZero: true, suffix: '$'});
</script>

<script>

	$(function(){
		$('#btn_pwalk').click(function(){
			$('#pwalk1').modal('show');
		});
		$('.akuns').on('click',function(){
			var kode_akun= $(this).attr('data-kodes');
			var nama 	 = $(this).attr('data-nama');
			var nama1 	 = $(this).attr('data-nama1');
			var nama2 	 = $(this).attr('data-nama2');
			$("#kode_akun").val(kode_akun);
			$("#nama_akun").val(nama);
			$('#akun').modal('hide');
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url()?>Pembayaran/input_bebas",
				data : {
					kode_akun 		: kode_akun,
					nama1 			: nama1,
					nama2 			: nama2,
				}, 
				success: function(data){
				}
			});

		});

	});

	$("#form").submit(function(){
		var kurang   = parseInt($("#sis").val());
		var total    = $("#tot").val();
		if((kurang * 1) > 0){

			alert("Oops.. Pembayaran Kurang");
			document.getElementById("cash").focus();
			return false;

		}else if(total == 0){

			alert("Oops.. Total Tidak Boleh Kosong");
			document.getElementById("no_beli").focus();
			return false;

		}else{

			window.location.reload(true);
			return true;
		}
	});
	var site = "<?php echo site_url();?>";
	$(function(){
		var id        = $("#id").val();
		$('#no_beli').autocomplete({
			serviceUrl: site+'Pembayaran/get_data/'+id,
			onSelect: function (suggestion) {
				$('#nobeli').val(''+suggestion.no_beli); 
				$('#idsupplier').val(''+suggestion.id_supplier);  
				$('#totalan2').val(''+suggestion.total); 
				$('#totalan').val(''+suggestion.totalan2); 
				$('#noreff').val(''+suggestion.no_reff); 
				$('#sisaan').val(''+suggestion.sisaan2); 
				$('#sisaan2').val(''+suggestion.sisa); 
				$('#by').val(''+suggestion.sisaan2); 
				$('#by2').val(''+suggestion.sisa); 
			}
		});
	});
</script>
<script type="text/javascript">
	function formatUang(angka) {
		if (typeof(angka) != 'string') angka = angka.toString();
		var reg = new RegExp('([0-9]+)([0-9]{3})');
		while(reg.test(angka)) angka = angka.replace(reg, '$1,$2');
		return angka;
	}
	$(function(){
		$('#no_beli').change(function(){

			$('#by2,#no_beli').keyup(function(){

				var tot         = $("#totalan2").val();
				var by 			= $('#by2').val();
				var sisa 		= $('#sisaan').val();

				var tot        = tot.replace(/\,/g, '');
				var by         = by.replace(/\,/g, '');
				var sisa       = sisa.replace(/\,/g, '');

				$('#totalan2').val(formatUang(tot*1));
				$('#by2').val(formatUang(by*1));
				$('#by').val(by);
				$('#sisaan2').val(formatUang(sisa*1));


			});
		});
	});

</script>

<script type="text/javascript">
	$('#id_supplier').change(function(){
		var
		value 			= $(this).val(),
		$obj 			= $('#id_supplier option[value="'+value+'"]'),
		no_ref			= $obj.attr('data-noref');

		$('#no_reff').val(no_ref);


	});
</script>
<script type="text/javascript">		
	tampilan();

	function tampilan(){	
		$("#tampilan").load("<?php echo base_url();?>Pembayaran/view_detail_pembayaran");
		$('.tampildata1').load("<?php echo base_url();?>Pembayaran/view_detail_pembayaran3");
		$('.tampildata').load("<?php echo base_url();?>pembayaran/view_detail_pembayaran2");
	}
	$('#btn_simpan').on('click',function(){
		var nobeli			=$('#nobeli').val();
		var idsupplier		=$('#idsupplier').val();
		var id				=$('#id').val();
		var noreff			=$('#noreff').val();
		var total			=$('#totalan').val();
		var sisabayar		=parseInt($('#sisaan').val());
		var sisa			=$('#sisaan2').val();
		var bayar			=parseInt($('#by').val());
		var by				=$('#by2').val();

		if(nobeli == 0 ){
			alert("Oops.. No Inv Masih Kosong");
			document.getElementById("nobeli").focus();
		}else if(by == 0){
			alert("Oops.. Jumlah Bayar Masih Kosong");
			document.getElementById("by2").focus();
		}else if(bayar > sisabayar){
			alert("Oops.. Jumlah Bayar Lebih");
			document.getElementById("by2").focus();
		}else{
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url()?>pembayaran/input_detail_pembayaran",
				data : {nobeli:nobeli,idsupplier:idsupplier,id:id,noreff:noreff,total:total,sisabayar:sisabayar,bayar:bayar},
				success: function(data){
					$('[name="nobeli"]').val("");
					$('[name="no_beli"]').val("");
					$('[name="idsupplier"]').val("");
					$('[name="noreff"]').val("");
					$('[name="total"]').val("");
					$('[name="sisabayar"]').val("");
					$('[name="bayar"]').val("");
					$('[name="tot"]').val("");
					$('[name="b"]').val("");
					$('[name="s"]').val("");

					tampilan();
					document.getElementById("no_beli").focus();

				}
			});
			$('.tampildata1').load("<?php echo base_url();?>pembayaran/view_detail_pembayaran3");
		}
		return false;
	});
</script>

<script>
	$('select').select2();				
	$('body').on('click', '.hapus-barang', function(e){
		e.preventDefault();

		var no_beli = $(this).attr('data-idbeli');
		var user = $(this).attr('data-user');
		var _this = $(this);

		$.ajax({
			type: 'post',
			dataType: 'json',
			url : "<?= site_url('Pembayaran/destroy/');?>"+'/'+no_beli+'/'+user,
			success: function(data){
				tampilan();
				$("#tampilan").load("<?php echo base_url();?>pembayaran/view_detail_pembayaran");
			}
		});
	});	
</script>
<script type="text/javascript">

	$(document).on('keydown', 'body', function(e){
		var charCode = ( e.which ) ? e.which : event.keyCode;

	if(charCode == 118) //F7
	{
		BarisBaru();
		return false;
	}

	if(charCode == 37) //enter
	{
		$('#no_beli').focus();
	}
	if(charCode == 39) //panah atas
	{
		$('#potongan').focus();
	}
	if(charCode == 113) //panah kanan	
	{
		$('#ket').focus();
	}
	if(charCode == 112) //panah bawah
	{
		$('#id_supplier').focus();
	}
	if(charCode == 35) //F9
	{
		$('#simpan').click();
	}
});



</script>
<script>
	document.onkeyup = function (e) {
		var evt = window.event || e;   
		if (evt.keyCode == 13 && evt.ctrlKey) {
			$('#btn_simpan1').click()   
		}
		if (evt.keyCode == 67 && evt.ctrlKey) {
			$('#simpan2').click()   
		}
	}
</script>


</script>
<script>
	
// memformat angka ribuan
function formatAngka(angka) {
	if (typeof(angka) != 'string') angka = angka.toString();
	var reg = new RegExp('([0-9]+)([0-9]{3})');
	while(reg.test(angka)) angka = angka.replace(reg, '$1.$2');
	return angka;
}
// tambah event keypress untuk input bayar
$('#').on('keypress', function(e) {
	var c = e.keyCode || e.charCode;
	switch (c) {
		case 8: case 9: case 27: case 13: return;
		case 65:
		if (e.ctrlKey === true) return;
	}
	if (c < 48 || c > 57) e.preventDefault();
}).on('keyup', function() {
	var inp = $(this).val().replace(/\./g, '');
	
	$(this).val(formatAngka(inp));
	
});
</script>
<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			
			return false;
		return true;
	}
	$(this).val(nama);
</script>
<script type="text/javascript">
	function checkForm(){
		
	//mengambil nilai form
	//var qty = document.getElementById("Q_B").value;
	var qtyb = document.getElementById("id_k_pelanggan").value;
	
	if(qtyb == 0){
		alert("Nama Belum Di pilih");
		return false;
	} else  {
		return false;
	}
}
</script>
<script>
	
	$("#example").DataTable({
		
		
		searching   : true,
		bInfo : false,
		bLengthChange : false,
		bPaginate : false,
		ordering	:	false
		
		
	});
	$("#example2").DataTable({
		
		
		searching   : true,
		bInfo : false,
		bLengthChange : false,
		bPaginate : false
		
		
		
	});
	
	
</script> 
<script>
	function startTime()
	{
		var today=new Date();
		var h=today.getHours();
		var m=today.getMinutes();
		var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
	if (i<10)
	{
		i="0" + i;
	}
	return i;
}
</script> 
</html>