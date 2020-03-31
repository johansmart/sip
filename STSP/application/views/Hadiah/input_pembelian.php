 <html>
 <head>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">  <!-- Ionicons -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">  <!-- DataTables -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">  
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
 		}
 		th, {
 			text-align: center;
 			padding: 8px;
 		}


 	</style>
 </head>
 <body class = "tampildata3" onLoad="startTime()">	

 	<div class = "row " >
 		<section class="col-lg-12 connectedSortable">
 			<div class="box box-primary" > 
 				<h3 class="box-title" style="margin-top:4px;margin-bottom:-19px;padding-bottom:4px;">Input Pembelian Hadiah</h3>
 			</div>
 			<div class="box-body">
 				<div class="col-md-7">
 					<form class="form-horizontal"  method="POST" id="form" action="" enctype = "multipart/form-data">
 						<div class="form-group">
 							<label class="col-sm-40 control-label">No Beli</label>
 							<div class="col-sm-37" style="margin-left: -6%">
 								<input type="text" name="no_beli" id="no_beli" value="<?php echo $autonumber;?>" autocomplete="off" readonly  class="form-control" placeholder = " No Beli" >
 							</div>
 							<label class="col-sm-40 control-label">Tgl Beli</label>
 							<div class="col-sm-37" style="margin-left: -6%">
 								<input type="text" name="tgl"  value="<?php echo date('d-m-Y') ;?>"" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Beli">
 							</div>
 							<label class="col-sm-40 control-label">Nama Toko</label>
 							<div class="col-sm-37" style="margin-left: -4%;width: 16%;">
 								<input type="text" name="nama_toko" onkeyup="this.value=this.value.toUpperCase();" tabindex = "1" autofocus autocomplete="off" required class="form-control" placeholder = " NAMA TOKO">
 							</div>
 							<label class="col-sm-40 control-label">No Telp</label>
 							<div class="col-sm-37"style="margin-left: -6%;width: 16%;">
 								<input type="text" name="no_telp" required autocomplete="off"  class="form-control" placeholder = "NO TELP" tabindex = "2" >
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
 					<br>
 					<br>
 					<br>
 					<br>
 					<br>
 					<hr>
 					<div class="col-md-9"  style="margin-top: -76px;">
 						<div class="col-sm-30" style="width:487px" >
 							<input type="text"  name="namabarang" id="nama_barang" class="form-control" placeholder = "NAMA BARANG (<-)" tabindex = "4" >
 						</div>
 						<div class="col-sm-30" style="width:230px" >
 							<input type="hidden"  name="idbarang" id="id_barang" class="form-control" placeholder = "Barang" tabindex = "5">
 						</div>
 						<div class="col-sm-35" style="width:70px">
 							<input type="text"  name="qtyb" id="stok"  readonly autocomplete="off" class="form-control" placeholder = "STOK "  >

 						</div>
 						<div class="col-sm-35" style="width:87px">
 							<input type="text"  name="qtybes" id="Q_B"   autocomplete="off" class="form-control" placeholder = "QTY "  tabindex = "6">

 						</div>
 						<div class="col-sm-30"  style="width:135px">

 							<input type="text" name="hargabeli" id="modal1"  autocomplete="off" class="form-control" placeholder = "HARGA " tabindex = "8">

 						</div>
 						<div class="col-sm-35" style="width:50px"  >
 							<input type="text"  name="disc" id="disc"  autocomplete="off" class="form-control" placeholder = "%" tabindex = "9">

 						</div>
 						<div class="col-sm-30" style="width:120px" >
 							<input type="text" name="modal" id="modal" readonly autocomplete="off" class="form-control" placeholder = "HARGA DULU">
 						</div>
 						<div class="col-sm-35" style="width:50px"  >
 							<textarea rows="1" style="display:none;" class="form-control" name="jam" id="txt" style="height: 34px;"readonly></textarea>

 						</div>
 						<div class="col-sm-31">
 							<button   type="submit" class="btn btn-sm btn-primary" name="btn_simpan" id="btn_simpan"  tabindex = "11">OK</button>

 						</div>

 						<table id = "#" class="table table-condensed">
 							<thead bgcolor="#99FF99">
 								<tr>
 									<th width = "5px" >No</th>
 									<th width = "390px" >Nama Barang</th>
 									<th width = "65px">Qty</th>
 									<th width = "100px">Harga </th>
 									<th width = "25px">%</th>
 									<th width = "100px">Sub Total</th>
 									<th width = "50px">A</th>
 								</tr>
 							</thead>
 							<tbody id = "tampiltmp">

 							</tbody>
 						</table>
 						<div class="form-group">
 							<label class="col-sm-29 control-label" style="margin-top: 8px;">Keterangan</label>
 							<div class="col-sm-33" style="width:750px">
 								<input type="text"  name="keterangan" id="ket" autocomplete="off" autofocus class="form-control" placeholder = "KETERANGAN (F2)" onkeyup=" this.value=this.value.toUpperCase();"tabindex = "11">
 							</div>
 						</div>
 					</div>
 					<div class="col-md-3" style="margin-top: -9px;">
 						<div class="col-sm-41 tampildata1">
 						</div>

 						<textarea style="display:none;" rows="1"class="form-control" name="total" 		  id="tot" style="height: 34px;"readonly requered></textarea>
 						<input type="hidden" id="cash2" 	name = "cash"     autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="deb" 		name = "debet"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="ban1" 		name = "bank1"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="trans" 	name = "transfer" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="ban2" 		name = "bank2"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="gr"	    name = "giro"     autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="keg" 		name = "ket_giro" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<div class="form-group">
 							<table style = "width:1000px; margin-left:164px" class = "table1">
 								<tr>
 									<td>
 										<input  type="submit" name = "submit" id="btn_simpan1" value = "SIMPAN" class="btn btn-sm btn-primary" tabindex="30">
 										<a href = "<?php echo base_url();?>Hadiah/reset_pembelian" class = "btn btn-sm btn-danger"  tabindex="31">Cancel</a>

 									</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 				</div>
 			</form>
 		</div>
 	</section>
 	<?php echo $this->session->flashdata('message');
 	?>
 </div>
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>		
<script src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/number.js"></script>

<script>
	var site = "<?php echo site_url();?>";
	$(function(){
		$('#nama_barang').autocomplete({
			serviceUrl: site+'Hadiah/get_data',
			onSelect: function (suggestion) {
				$('#id_barang').val(''+suggestion.id_barang); 
				$('#stok').val(''+suggestion.stok); 
				$('#modal').val(''+suggestion.harga_jual);
				$('#modal1').val(''+suggestion.harga_jual);
			}
		});
	});
</script>
<script type="text/javascript">
	tampiltmp();

	$('select').select2();
	function tampiltmp(){			
		
		$("#tampiltmp").load("<?php echo base_url();?>Hadiah/view_pembelian_tmp");
		$('.tampildata1').load("<?php echo base_url();?>Hadiah/view_bayarb");			
	}
	$('#btn_simpan').on('click',function(){
		var namabarang		=$('#nama_barang').val();
		var idbarang		=$('#id_barang').val();
		var qtybes			=$('#Q_B').val();
		var hargabeli		=$('#modal1').val();
		var modal			=$('#modal').val();
		var disc			=$('#disc').val();
		var jam				=$('#txt').val();
		if(namabarang == 0){
			alert("Oops.. Nama Barang Masih Kosong");
			document.getElementById("nama_barang").focus();
		}else if(qtybes == 0){
			alert("Oops.. Qty Masih Kosong");
			document.getElementById("Q_B").focus();
		}else if(hargabeli == 0){
			alert("Oops.. Harga Masih Kosong");
			document.getElementById("modal1").focus();
		}else{
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url()?>Hadiah/input_pembelian_hadiah",
                data : {idbarang:idbarang,qtybes:qtybes,hargabeli:hargabeli,disc:disc,jam:jam}, //dihapus,disc2:disc2
                success: function(data){
                	$('[name="idbarang"]').val("");
                	$('[name="namabarang"]').val("");
                	$('[name="qtybes"]').val("");
                	$('[name="hargabeli"]').val("");
                	$('[name="modal"]').val("");
                	$('[name="disc"]').val("");
                	$('[name="qtyb"]').val("");

                	tampiltmp();
                	$('.tampildata').load("<?php echo base_url();?>Hadiah/view_detail_harga");

                }
            });
			
			$('.tampildata1').load("<?php echo base_url();?>Hadiah/view_bayarb");
		}
		return false;

	});
	

</script>
<script>
	$('#btn_simpan1').on('click',function(){
		$('.tampildata3').load("<?php echo base_url();?>Pembelian/input_penjualan");
	});
</script>


<script>

	$('body').on('click', '.hapus-barang', function(e){
		e.preventDefault();

		var user = $(this).attr('data-user');
		var id_barang = $(this).attr('data-idbarang');
		var _this = $(this);

		$.ajax({
			type: 'post',
			dataType: 'json',
			url : "<?= site_url('Hadiah/destroy/');?>"+'/'+user+'/'+id_barang,
			success: function(data){
				tampiltmp();
				$('.tampildata').load("<?php echo base_url();?>Hadiah/view_detail_harga");
				$('.tampildata1').load("<?php echo base_url();?>Hadiah/view_bayarb");
			}
		});
	});	
</script>

<script>

	$('body').on('click', '.hapus-retur', function(e){
		e.preventDefault();

		var id_brg = $(this).attr('data-idbrg');
		var user = $(this).attr('data-user');
		var _this = $(this);



		$.ajax({
			type: 'post',
			dataType: 'json',
			url : "<?= site_url('Pembelian/destroy2/');?>"+'/'+id_brg+'/'+user,
			success: function(data){
				tampilan();
				$('.tampildata').load("<?php echo base_url();?>Pembelian/view_detail_barang2");
				$('.tampildata1').load("<?php echo base_url();?>Pembelian/view_detail_barang3");
			}
		});
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
		if (evt.keyCode == 88 && evt.ctrlKey) {
			$('#simpan3').click()   
		}
	}
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
		$('#nama_barang').focus();
	}
	if(charCode == 112) //panah atas
	{
		$('#no_beli').focus();
	}
	if(charCode == 39) //panah kanan	
	{
		$('#cash').focus();
	}
	if(charCode == 113) //panah bawah
	{
		$('#ket').focus();
	}
	if(charCode == 35) //F9
	{
		$('#simpan').click();
	}
	if(charCode == 1200) //F9
	{
		$('#simpan2').click();
	}
	if(charCode == 1210) //F9
	{
		$('#simpan3').click();
	}
	if(charCode == 45) //F9
	{
		$('#id_pelanggan').focus();
	}
	if(charCode == 33) //F9
	{
		$('#nm_barang').focus();
	}
	if(charCode == 34) //F9
	{
		$('#ket_retur').focus();
	}
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
document.getElementById('txt1').innerHTML=h+":"+m+":"+s;
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
<script>

// memformat angka ribuan
function formatAngka(angka) {
	if (typeof(angka) != 'string') angka = angka.toString();
	var reg = new RegExp('([0-9]+)([0-9]{3})');
	while(reg.test(angka)) angka = angka.replace(reg, '$1.$2');
	return angka;
}

// tambah event keypress untuk input bayar
$('#modal1').on('keypress', function(e) {
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

// memformat angka ribuan
function formatAngka(angka) {
	if (typeof(angka) != 'string') angka = angka.toString();
	var reg = new RegExp('([0-9]+)([0-9]{3})');
	while(reg.test(angka)) angka = angka.replace(reg, '$1.$2');
	return angka;
}

// tambah event keypress untuk input bayar
$('#harga_jual').on('keypress', function(e) {
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
		var qtyb = document.getElementById("sis").value;

		f(qtyb == 0){
			alert("Nama Belum Di pilih");
			return false;
		} else  {
			return false;
		}
	}
</script>
<script type="text/javascript">
	function confirm() {
		var msg;
		msg= "Apakah Mang Kemed Yakin Akan Menghapus Data ? " ;
		var agree=confirm(msg);
		if (agree)
			return true ;
		else
			return false ;
	}</script>
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

		$("#form").submit(function(){

			var total       = $("#tot").val();
			if (total == 0) {
				alert("Opps.. Total Tidak Boleh Kosong");
				document.getElementById("nama_barang").focus();
				return false;

			}else{

				return true;
			}

		});

	</script>
	</html>