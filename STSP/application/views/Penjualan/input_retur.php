 <html >
 <head>
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" type = "text/css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">  <!-- Ionicons -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">  <!-- DataTables -->
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">  

 </head>
 <body class = "tampildata3" onLoad="startTime()" >	
 	<div class = "row " >
 		<section class="col-lg-12 connectedSortable">
 			<div class="box box-primary">
 				<div class="box-body">
 					<div class="col-md-7">
 						<form class="form-horizontal"  method="POST" action="" id="form" enctype = "multipart/form-data">
 							<div class="form-group">
 								<label class="col-sm-40 control-label">No Retur</label>
 								<div class="col-sm-37">
 									<input type="text" name="no_retur" id="" value = "<?php echo $autonumber; ?>" autocomplete="off" readonly  class="form-control" placeholder = " No Jual" >
 								</div>
 								<label class="col-sm-40 control-label">Tanggal</label>
 								<div class="col-sm-37">
 									<input type="text" name="tanggal" id = "tanggal" value="<?php echo date('Y-m-d') ;?>"onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">

 								</div>
 								<label class="col-sm-40 control-label">Nama Pelanggan</label>
 								<div class="col-sm-37" style = "width:130px;">
 									<select name="id_pelanggan" id="id_pelanggan" class="form-control select2"  style="width: 99%;" autofocus tabindex="1" required > 
 										<option value = "" selected="selected">Pilih Pelanggan</option>
 										<?php foreach ($listpelanggan->result() as $p){ ?>
 											<option value = "<?php echo $p->id_pelanggan;?>" data-kategori = "<?php echo $p->id_k_pelanggan;?>" data-noreff = "<?php echo $p->no_reff_retur;?>"><?php echo $p->nama_pelanggan;?></option>
 										<?php } ?>
 									</select>
 								</div>
 								<label class="col-sm-40 control-label"></label>
 								<div class="col-sm-37">
 									<input type="hidden" name="id_k_pelanggan" id="id_k_pelanggan" autocomplete="off" readonly class="form-control" placeholder = " Kategori" >
 								</div>
 							</div>
 							<div class="form-group">
 								<label class="col-sm-40 control-label"></label>
 								<div class="col-sm-37">
 									<input type="text" name="" id="no_jl" autocomplete="off"  class="form-control" placeholder = " No Jual" >
 									<input type="hidden" name="no_jual" id="no_jual" autocomplete="off"  class="form-control" placeholder = " No Jual" >
 									<input type="hidden" name="no_reff" id="no_reff" autocomplete="off"  class="form-control" placeholder = " No Jual" >
 									<input type="hidden" name="no_reff_inv" id="no_reff_inv" autocomplete="off"  class="form-control" placeholder = " No Jual" >

 								</div>
 								<label class="col-sm-40 control-label"></label>
 								<div class="col-sm-37">
 									<input type="hidden" name="id_pelanggann" id="id_pelanggann" autocomplete="off"  class="form-control" placeholder = " No Jual" >

 								</div>
 							</div>


 						</div>							

 						<div class="col-md-4">
 							<!-- Asli $hasil5 -->

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
 						<div class="col-md-9"  style="margin-top: -41px;">
 							<div class="col-sm-30" style="width:320px" >
 								<input type="text"  name="namabarang" id="nama_barang" class="form-control" placeholder = "Nama Barang (<-)" tabindex = "4" >
 							</div>
 							<div class="col-sm-30" style="width:230px" >
 								<input type="hidden"  name="idbarang" id="id_barang" class="form-control" placeholder = "Barang" tabindex = "5">
 							</div>
 							<div class="col-sm-35" style="width:80px">
 								<input type="text" name="stok" id="stok" readonly  autocomplete="off" class="form-control" placeholder = "Stok ">

 							</div>
 							<div class="col-sm-35" style="width:80px">
 								<input type="text"  name="qtybes" id="Q_B"   autocomplete="off" class="form-control" placeholder = "Qty "  tabindex = "6">

 							</div>
 							<div class="col-sm-35"style="width:80px">
 								<input type="text"  name="satuanbes" id="S_B" readonly autocomplete="off" class="form-control" placeholder = "Satuan">

 							</div>
 							<div class="col-sm-35" >
 								<input type="hidden" name = "qib" id="Q_IB"  readonly autocomplete="off" class="form-control" placeholder = "Q_IB">

 							</div>
 							<div class="col-sm-30"  style="width:120px">

 								<input type="text" name="hargabeli" id="modal1"  autocomplete="off" class="form-control" placeholder = "Harga Jual" tabindex = "8">

 							</div>
 							<div class="col-sm-30" style="width:120px" >
 								<input type="text" name="modal" id="modal" readonly autocomplete="off" class="form-control" placeholder = "Modal">
 							</div>
 							<div class="col-sm-35" style="width:80px"  >
 								<input type="text"  name="disc" id="disc"  autocomplete="off" class="form-control" placeholder = "Disc 1" tabindex = "9">

 							</div>
 							<div class="col-sm-35" style="width:80px"  >
 								<input type="text"  name="disc1" id="disc1" autocomplete="off" class="form-control" placeholder = "Disc 2" tabindex = "10">

 							</div>
 							<div class="col-sm-31">
 								<button type="submit" class="btn btn-sm btn-primary" name="btn_simpan" id="btn_simpan"  tabindex = "11">OK</button>

 							</div>

 							<table id = "#" class="table table-condensed" >
 								<thead bgcolor="#99FF99">
 									<tr>
 										<th width = "5px" >No</th>
 										<th width = "330px" >Nama Barang</th>
 										<th width = "70px">Qty</th>
 										<th width = "70px">Satuan</th>
 										<th width = "100px">Harga Jual</th>
 										<th width = "50px">% 1</th>
 										<th width = "50px">% 2</th>
 										<th width = "130px">Sub Total</th>
 										<th width = "50px">A</th>
 									</tr>
 								</thead>
 								<tbody id = "tampiltmp">

 								</tbody>
 							</table>
 							<div class="form-group">
 								<label class="col-sm-29 control-label" style="margin-top: 8px;">Keterangan</label>
 								<div class="col-sm-33" style="width:750px">
 									<input type="text"  name="keterangan" id="ket"  autocomplete="off" autofocus class="form-control" placeholder = "Keterangan (F2)" onkeyup=" this.value=this.value.toUpperCase();">
 								</div>
 							</div>

 						</div>
 						<div class="col-md-3" style="margin-top: -9px;">
 							<div class="col-sm-41 tampildata1">
 							</div>
 							<textarea style="display:none;" rows="1"class="form-control" name="total_belanja" id="total_belanja" style="height: 34px;"readonly></textarea>
 							<textarea style="display:none;" rows="1"class="form-control" name="total_retur"   id="total_retur" style="height: 34px;"readonly></textarea>
 							<textarea style="display:none;" rows="1"class="form-control" name="total" 		  id="tot" style="height: 34px;"readonly requered></textarea>
 							<textarea style="display:none;" rows="1"class="form-control" name="kembali" 	  id="kem" style="height: 34px;"readonly></textarea>
 							<textarea style="display:none;" rows="1"class="form-control" name="sisa" 		  id="sis" style="height: 34px;"readonly ></textarea>
 							<textarea style="display:none;" rows="1"class="form-control" name="sisa2"  		  id="siso" style="height: 34px;"readonly></textarea>
 							<input type="hidden" id="potongan2" name = "potongan" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga" required>
 							<input type="hidden" id="nomin" 	name = "nominal1" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="nom" 		name = "nominal2" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="ong1" 		name = "ongkir1"  autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="ong2" 		name = "ongkir2"  autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="cash2" 	name = "cash"     autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="deb" 		name = "debet"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="ban1" 		name = "bank1"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="trans" 	name = "transfer" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="ban2" 		name = "bank2"    autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="gr"	    name = "giro"     autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<input type="hidden" id="keg" 		name = "ket_giro" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 							<div class="form-group">
 								<table style = "width:1000px; margin-left:34px">
 									<tr>
 										<td>
 											<?php if($this->session->userdata('level') === 'Administrator'  OR $this->session->userdata('level') === 'Kasir Thermal' OR $this->session->userdata('level') === 'Manager'): ?>
 											<input  type="submit" name = "submit2" id="simpan2" value = "Cetak Thermal" class="btn btn-sm btn-primary"  tabindex="29">
 										<?php endif; ?>
 										<?php if($this->session->userdata('level') === 'Administrator'  OR $this->session->userdata('level') === 'Kasir A5' OR $this->session->userdata('level') === 'Manager'): ?>
 										<input  type="submit" name = "submit3" id="simpan3" value = "Cetak A5" class="btn btn-sm btn-success"  tabindex="29">
 									<?php endif;?>
 									<input style="display:none;" type="submit" name = "submit" id="btn_simpan1" value = "Simpan" class="btn btn-sm btn-primary" tabindex="30">
 									<a href = "<?php echo base_url();?>Penjualan/riset" class = "btn btn-sm btn-danger"  tabindex="31">Cancel</a>

 								</td>
 							</tr>
 						</table>
 					</div>
 				</div>

 			</div>
 		</form>
 	</div>
 </div>
</section>
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
			serviceUrl: site+'Penjualan/get_data',
			onSelect: function (suggestion) {
				$('#id_barang').val(''+suggestion.id_barang); 
				$('#stok').val(''+suggestion.stok); 
				$('#S_B').val(''+suggestion.satuan_besar); 
				$('#Q_IB').val(''+suggestion.qty_b); 
				$('#modal').val(''+suggestion.modal);
				if(id_k_pelanggan == "walk1"){
					$('#modal1').val(''+suggestion.walk1);
				}if(id_k_pelanggan == "walk"){
					$('#modal1').val(''+suggestion.walk);
				}if(id_k_pelanggan == "tk"){
					$('#modal1').val(''+suggestion.tk);
				}if(id_k_pelanggan == "tb"){
					$('#modal1').val(''+suggestion.tb);
				}if(id_k_pelanggan == "sls"){
					$('#modal1').val(''+suggestion.sls);
				}if(id_k_pelanggan == 'agn'){
					$('#modal1').val(''+suggestion.agn);
				}
			}

		});
	});
</script>

<script>
	$("#form").submit(function(){

		var total       = $("#tot").val();
		if (total == "") {
			alert("Opps.. Total Tidak Boleh Kosong");
			document.getElementById("nama_barang").focus();
			return false;

		}else{

			return true;
		}

	});
	
	var site = "<?php echo site_url();?>";
	$(function(){
		$('#no_jl').autocomplete({
			serviceUrl: site+'Penjualan/get',
			onSelect: function (suggestion) {
				$('#no_jual').val(''+suggestion.no_jual); 
				$('#id_pelanggann').val(''+suggestion.id_pelanggan);
				$('#no_reff_inv').val(''+suggestion.no_reff);

			}
		});
	});
</script>
<script type="text/javascript">
	$('#id_pelanggan').change(function(){
		var
		value 			= $(this).val(),
		$obj 			= $('#id_pelanggan option[value="'+value+'"]'),
		no_reff			= $obj.attr('data-noreff');
		id_k_pelanggan	= $obj.attr('data-kategori');
		keterangan 		= $obj.attr('data-keterangan');

		id_sales 		= $obj.attr('data-sales');
		max_hutang		= $obj.attr('data-max');
		max_hutang1		= $obj.attr('data-max1');
		hutang			= $obj.attr('data-hutang');
		jatuh_tempo		= $obj.attr('data-jatuhtempo');
		jatuh_tempoan	= $obj.attr('data-jatuhtempoan');

		$('#no_reff').val(no_reff);
		$('#id_k_pelanggan').val(id_k_pelanggan);
		$('#keterangan').val(keterangan);
		$('#id_sales').val(id_sales);
		$('#max_hutang').val(max_hutang);
		$('#max_hutang1').val(max_hutang1);
		$('#hutang').val(hutang);
		$('#jatuh_tempo').val(jatuh_tempo);
		$('#jatuh_tempoan').val(jatuh_tempoan);


	});
</script>
<script type="text/javascript">
	tampilan();
	function tampilan(){			
		
		$('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang3");
		$("#tampilan").load("<?php echo base_url();?>Penjualan/view_detail_retur");	
	}
	$('#bt_simpan').on('click',function(){
		var nmbarang		=$('#nm_barang').val();
		var idbrg			=$('#id_brg').val();
		var qty				=$('#qty').val();
		var satuan			=$('#satuan').val();
		var stoke			=$('#stoke').val();
		var hargajual		=$('#harga_jual').val();
		var hargamodal		=$('#harga_modal').val();
		var diskon1			=$('#diskon1').val();
		var diskon2			=$('#diskon2').val();
		var jam1			=$('#txt1').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url()?>Penjualan/input_detail_retur",
                data : {idbrg:idbrg,qty:qty,satuan:satuan,hargajual:hargajual,diskon1:diskon1,diskon2:diskon2,jam1:jam1}, //dihapus,disc2:disc2
                success: function(data){
                	$('[name="idbrg"]').val("");
                	$('[name="nmbarang"]').val("");
                	$('[name="qty"]').val("");
                	$('[name="satuan"]').val("");
                	$('[name="stoke"]').val("");
                	$('[name="hargajual"]').val("");
                	$('[name="hargamodal"]').val("");
                	$('[name="diskon1"]').val("");
                	$('[name="diskon2"]').val("");

                	tampilan();
                	$('.tampildata').load("<?php echo base_url();?>Penjualan/view_detail_barang2");
                }
            });

		$('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang3");
		return false;
	});
</script>
<script type="text/javascript">
	tampiltmp();

	$('select').select2();
	function tampiltmp(){			
		
		$("#tampiltmp").load("<?php echo base_url();?>Penjualan/retur_tmp");
		$('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang4");			
	}
	$('#btn_simpan').on('click',function(){
		var namabarang		=$('#nama_barang').val();
		var idbarang		=$('#id_barang').val();
		var qtybes			=$('#Q_B').val();
            //var qtykec			=$('#Q_K').val();
            var satuanbes		=$('#S_B').val();
            //var satuankec		=$('#S_K').val();
            var hargabeli		=$('#modal1').val();
            var stok			=$('#stok').val();
           // var qik				=$('#Q_IK').val();
           var modal			=$('#modal').val();
           var disc			=$('#disc').val();
           var disc1			=$('#disc1').val();
           $.ajax({
           	type : "POST",
           	url  : "<?php echo base_url();?>Penjualan/input_detail_retur1",
                data : {idbarang:idbarang,qtybes:qtybes,satuanbes:satuanbes,modal:modal,hargabeli:hargabeli,disc:disc,disc1:disc1}, //dihapus,disc2:disc2
                success: function(data){
                	$('[name="idbarang"]').val("");
                	$('[name="namabarang"]').val("");
                	$('[name="qtybes"]').val("");
                   // $('[name="qtykec"]').val("");
                   $('[name="satuanbes"]').val("");
                    //$('[name="satuankec"]').val("");
                    $('[name="hargabeli"]').val("");
                    $('[name="qib"]').val("");
                    //$('[name="qik"]').val("");
                    $('[name="modal"]').val("");
                    $('[name="disc"]').val("");
                    $('[name="disc1"]').val("");
                    $('[name="stok"]').val("");
                    
                    tampiltmp();
					//$('.tampildata').load("<?php echo base_url();?>Penjualan/view_detail_barang4");
					
				}
			});

           $('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang4");
           return false;
       });
	

   </script>
   <script>
   	$('#btn_simpan1').on('click',function(){
   		$('.tampildata3').load("<?php echo base_url();?>Penjualan/input_penjualan");
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
   			url : "<?= site_url('Penjualan/destroy4/');?>"+'/'+user+'/'+id_barang,
   			success: function(data){
   				tampiltmp();
   				$('.tampildata').load("<?php echo base_url();?>Penjualan/view_detail_barang2");
   				$('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang4");
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
   			url : "<?= site_url('Penjualan/destroy2/');?>"+'/'+id_brg+'/'+user,
   			success: function(data){
   				tampilan();
   				$('.tampildata').load("<?php echo base_url();?>Penjualan/view_detail_barang2");
   				$('.tampildata1').load("<?php echo base_url();?>Penjualan/view_detail_barang3");
   			}
   		});
   	});	
   </script>
   <script>
   	document.onkeyup = function (e) {
   		var evt = window.event || e;   
   		if (evt.keyCode == 16 && evt.ctrlKey) {
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
		$('#send').focus();
	}
	if(charCode == 39) //panah kanan	
	{
		$('#potongan').focus();
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


	</script>
	</html>