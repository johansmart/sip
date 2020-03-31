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
 			margin-left : 18px;
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
 				<h3 class="box-title" style="margin-top: 4px;margin-bottom: -19px;padding-bottom: 4PX;" >Input Purchase Order</h3>
 			</div>
 			<div class="box-body">
 				<div class="col-md-7">
 					<form class="form-horizontal"  method="POST" id = "form" action="" enctype = "multipart/form-data">
 						<div class="form-group">
 							<label class="col-sm-40 control-label">No PO</label>
 							<div class="col-sm-37">
 								<input type="text" name="no_beli" id="no_beli" value="<?php echo $autonumber;?>" autocomplete="off" readonly  class="form-control" placeholder = " No Jual" >
 							</div>
 							<label class="col-sm-40 control-label">Tanggal PO</label>
 							<div class="col-sm-37">
 								<input type="hidden" name="tgl" id = "" value="<?php echo date('Y-m-d') ;?>" onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 								<input type="text" name="tgl_invoice" id = "tgl_invoice" value="<?php echo date('d-m-Y') ;?>"onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 								<textarea rows="1" style = "display:none;" class="form-control" name="jam" id="txt" style="height: 34px;"readonly></textarea>
 								<input type="hidden" name="edit" id = "edit" value="0" onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" readonly class="form-control" placeholder = " Tanggal Invoice">
 							</div>
 							<label class="col-sm-40 control-label">Nama Supplier</label>
 							<div class="col-sm-37" style = "width:170px;">
 								<select name="" id="id_supplier" class="form-control select2"  style="width: 99%;" autofocus tabindex="1" required> 
 									<option value = "" selected="selected">Pilih Supplier</option>
 									<?php foreach ($listpelanggan->result() as $p){
 										$tanggalSekarang=date('d-m-Y');
 										$newTanggalSekarang=strtotime($tanggalSekarang);

 										$jumlahHari=$p->masa_hutang;
 										$NewjumlahHari=86400*$jumlahHari;

 										$hasilJumlah = $newTanggalSekarang + $NewjumlahHari;
 										$tampilHasil=date('Y-m-d',$hasilJumlah);
 										
 										$tmp=date('d-m-Y',$hasilJumlah);
 										?>
 										<option value = "<?php echo $p->id_supplier;?>" data-sup = "<?php echo $p->id_supplier;?>" data-spl = "<?php echo $p->id_supplier;?>" data-noreff = "<?php echo $p->no_reff_po;?>"  data-max = "<?php echo $p->masa_hutang;?>" data-jatuhtempo = "<?php echo $tampilHasil;?>" data-jatuhtempoan = "<?php echo $tmp;?>" data-ppn = "<?php echo $p->ppn;?>" data-ppnan = "<?php echo $p->ppn;?>" data-mu = "<?php echo $p->kurs_tukar;?>" data-mu1 = "<?php echo $p->kode_mu;?>" data-kodemu = "<?php echo $p->kode_mu;?>" data-simbol = "<?php echo $p->simbol;?>"> <?php echo $p->nama_supplier;?> </option>
 										
 									<?php } ?>
 								</select>
 							</div>
 							<div class="col-sm-37" style="margin-left: 9px;">
 								<input type="text" name="" id="mata_uang" autocomplete="off" readonly  class="form-control" placeholder = "MATA UANG" >
 								<input type="hidden" name="simbol" id="simbol" autocomplete="off" readonly  class="form-control" placeholder = "MATA UANG" >
 							</div>
 						</div>
 						
 						<div class="form-group">
 							<label class="col-sm-40 control-label" hidden = "">No Invoice</label>
 							<div class="col-sm-37" hidden = "">
 								<input type="text" onkeyup=" this.value=this.value.toUpperCase();" name="no_invoice" id="no_invoice"  autocomplete = "off" class="form-control" placeholder = " NO INVOICE"  tabindex = "2" >
 								<input type="hidden"  name="no_reff" id="no_reff" autocomplete="off" readonly class="form-control" placeholder = " No Reff">
 								<input type="hidden"  name="" id="idsup" autocomplete="off" readonly class="form-control" placeholder = " No Reff">
 								<input type="hidden"  name="id_supplier" id="idspl" autocomplete="off" readonly class="form-control" placeholder = " No Reff">
 							</div>
 							<div class="col-sm-37" style = "width:63px;" hidden = "">
 								<input type="hidden"  name="no_urut" value="1" autocomplete="off" readonly class="form-control" placeholder = " No Ref">
 								<input type="hidden"  name="acc" value="0" autocomplete="off" readonly class="form-control" placeholder = " No Ref">
 							</div>
 							<label class="col-sm-40 control-label" hidden = "">Jatuh Tempo</label>
 							<div class="col-sm-37" hidden = "">		
 								<input type="text"  name="jatuh_tempoan" id="jatuh_tempoan" readonly onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" class="form-control" placeholder = " JATUH TEMPO">
 								<input type="hidden" name="tempo" onFocus="startCalc();" readonly onBlur="stopCalc();" id="max_hutang" autocomplete="off" class="form-control" placeholder = " Tempo">
 							</div>
 							
 						</div>
 						<div class="form-group">
 							<label class="col-sm-40 control-label"></label>
 							<div class="col-sm-37">
 								<input type="hidden"  name="jatuh_tempo" id="jatuh_tempo" readonly onFocus="startCalc();" onBlur="stopCalc();" autocomplete="off" class="form-control" placeholder = " Jatuh Tempo">
 							</div>	
 							<label class="col-sm-40 control-label"></label>
 							<div class="col-sm-37" width = "10px">
 								<input type="hidden"  name="max_hutang1" id="max_hutang1" autocomplete="off"readonly class="form-control" placeholder = " Sales">
 							</div>
 							<label class="col-sm-40 control-label"></label>
 							<div class="col-sm-37" width = "10px">
 								<input type="hidden"  name="" id="" autocomplete="off"readonly class="form-control" placeholder = " Sales">
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
 					<div class="col-md-9"  style="margin-top: -78px;">
 						<div class="col-sm-30" style="width:249px" >
 							<input type="text"  name="namabarang" id="nama_barang" class="form-control" placeholder = "NAMA BARANG (<-)" tabindex = "4" >
 						</div>
 						<div class="col-sm-30" style="width:230px" >
 							<input type="hidden"  name="idbarang" id="id_barang" class="form-control" placeholder = "Barang" tabindex = "5">
 							<input type="hidden"  name="cekbarang" id="cekbarang" class="form-control" placeholder = "Barang" tabindex = "5">
 						</div>
 						<div class="col-sm-35" style="width:70px">
 							<input type="text"  name="stok" id="stok"  readonly autocomplete="off" class="form-control" placeholder = "STOK "  >

 						</div>
 						<div class="col-sm-35" style="width:81px">
 							<input type="text"  name="qtybes" id="Q_B" onFocus="startCalc();"   autocomplete="off" class="form-control" placeholder = "QTY "  tabindex = "6">

 						</div>
 						<div class="col-sm-35"style="width:91px">
 							<input type="text"  name="satuanbes" id="S_B" readonly autocomplete="off" class="form-control" placeholder = "SATUAN">

 						</div>
 						<div class="col-sm-35" >
 							<input type="hidden" name = "qib" id="Q_IB"  readonly autocomplete="off" class="form-control" placeholder = "Q_IB">

 						</div>
 						<div class="col-sm-30"  style="width:133px">

 							<input type="text" name="modalterakhir" id="modal_terakhir" onFocus="startCalc();" autocomplete="off" class="form-control " placeholder = "HARGA " tabindex = "8">
 							<input type="hidden"  name="kurs" id="kurs_tukar1" onFocus="startCalc();" autocomplete="off" class="form-control" placeholder = "% 1" tabindex = "9">
 							<input type="hidden" name="hargabeli" id="modal1" onFocus="startCalc();" autocomplete="off" class="form-control demo2" placeholder = "HARGA " tabindex = "8">

 						</div>
 						<div class="col-sm-30"  style="width:120px">

 							<input type="hidden" name="handling" id="handling" onFocus="startCalc();" autocomplete="off" class="form-control demo2" placeholder = "HANDLING " tabindex = "8">
 							<input type="hidden" name="modalt" id="modal_t"  autocomplete="off" class="form-control" placeholder = "MODAL " tabindex = "8">

 						</div>
 						<div class="col-sm-30" style="width:120px" >
 							<input type="text" name="modal" id="modal" readonly autocomplete="off" class="form-control" placeholder = "MODAL">
 						</div>
 						<div class="col-sm-35" style="width:60px"  >
 							<input type="hidden" name="ppn" id="ppn" readonly autocomplete="off" class="form-control" placeholder = "PPN">

 						</div>
 						<div class="col-sm-35" style="width:65px"  >
 							<input type="text"  name="disc" id="disc"  autocomplete="off" class="form-control" placeholder = "% 1" tabindex = "9">
 							<input type="hidden"  name="kode_mu" id="kode_mu1"  autocomplete="off" class="form-control" placeholder = "% 1" tabindex = "9">

 						</div>
 						<div class="col-sm-35" style="width:65px"  >
 							<input type="text"  name="disc1" id="disc1" autocomplete="off" class="form-control" placeholder = "% 2" tabindex = "10">

 						</div>
 						<div class="col-sm-35" style="width:70px"  >
 							<input type="text"  name="disc2" id="disc2" autocomplete="off" class="form-control" placeholder = "% 3" tabindex = "10">

 						</div>
 						<div class="col-sm-31">
 							<button   type="submit" class="btn btn-sm btn-primary" name="btn_simpan" id="btn_simpan"  tabindex = "11">OK</button>
 							
 						</div>
 						
 						<table id = "#" class="table table-condensed">
 							<thead bgcolor="#99FF99">
 								<tr>
 									<th width = "5px">No</th>
 									<th width = "230px">Nama Barang</th>
 									<th width = "63px">Qty</th>
 									<th width = "70px">Satuan</th>
 									<th width = "110px">Harga </th>
 									<th width = "50px">% 1</th>
 									<th width = "50px">% 2</th>
 									<th width = "50px">% 3</th>
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
 								<input type="text"  name="keterangan" id="ket"  autocomplete="off" autofocus class="form-control" placeholder = "KETERANGAN (F2)" onkeyup=" this.value=this.value.toUpperCase();">
 							</div>
 						</div>
 						<br>
 						<hr>
 					</div>
 					<div class="col-md-3" style="margin-top: -9px;">
 						<div class="col-sm-41 tampildata1">
 						</div>
 						<textarea style="display:none;" rows="1"class="form-control" name="dpp" 		  id="dp" style="height: 34px;"readonly requered></textarea>
 						<textarea style="display:none;" rows="1"class="form-control" name="ppn" 		  id="pp" style="height: 34px;"readonly requered></textarea>
 						<textarea style="display:none;" rows="1"class="form-control" name="total" 		  id="tot" style="height: 34px;"readonly requered></textarea>
 						<textarea style="display:none;" rows="1"class="form-control" name="grand_total"   id="totalan" style="height: 34px;"readonly requered></textarea>
 						<textarea style="display:none;" rows="1"class="form-control" name="sisa" 		  id="sisa" style="height: 34px;"readonly requered></textarea>
 						<textarea  style="display:none;"rows="1"class="form-control" name="kurs_tukar" id="hasil_kurs_tukar1" style="height: 34px;"readonly></textarea>
 						<input type="hidden" id="nomin" 		name = "nominal1" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="nomin2" 		name = "nominal" autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="ong1" 		name = "ongkir1"  autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<input type="hidden" id="ong2" 		name = "tips"  autocomplete="off" autofocus class="form-control" placeholder = "Potongan Harga">
 						<div class="form-group">
 							<table class = "table1">
 								<tr>
 									<td align = "right">
 										<input  type="submit" name = "submit" id="btn_simpan1" value = "SIMPAN" class="btn btn-sm btn-primary" tabindex="30">
 										<a href = "<?php echo base_url();?>Purchase_order/riset_edit_pembelian" class = "btn btn-sm btn-danger"  tabindex="31">Cancel</a>
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
 <div id="show" class="modal fade" role="dialog" >
 	<div class="modal-dialog" style="margin-top:130px;">
 		<!-- konten modal-->
 		<div class="modal-content">
 			<!-- heading modal -->
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 				<h4 class="modal-title">Oops.. Perubahan Harga Barang</h4>
 			</div>
 			<!-- body modal -->
 			<div class="modal-body">
 				<form class="form-horizontal"  method="POST" action="" enctype = "multipart/form-data">
 					<div class="form-group">
 						<label for="inputEmail3" class="col-sm-3 control-label">Nama Barang</label>
 						<div class="col-sm-5">
 							<input name="nama" id="nama" type="text" value = "" class="form-control" autocomplete="off" autofocus placeholder = " Nama Barang" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" readonly>
 							<input name="idbar" id="idbar" type="hidden" value = "" class="form-control" autocomplete="off" autofocus placeholder = " Nama Barang" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" readonly>
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">PRICELIST</label>

 						<div class="col-sm-5">
 							<input name="pl" id="pl" type="text" value=""  class="form-control" autocomplete="off" placeholder = "HARGA PRICELIST" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="pl1" id="pl1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "HARGA PRICELIST" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="mod" id="mod" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "HARGA PRICELIST" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">TOKO KECIL</label>

 						<div class="col-sm-5">
 							<input name="hajul" id="hajul" type="text" value=""  class="form-control" autocomplete="off" placeholder = "TOKO KECIL" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="hajul1" id="hajul1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "TOKO KECIL" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">TOKO BESAR</label>

 						<div class="col-sm-5">
 							<input name="walkk" id="walkk" type="text" value=""  class="form-control" autocomplete="off" placeholder = "TOKO BESAR" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="walkk1" id="walkk1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "TOKO BESAR" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">SALES</label>

 						<div class="col-sm-5">
 							<input name="tkw" id="tkw" type="text" value=""  class="form-control" autocomplete="off" placeholder = "SALES" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="tkw1" id="tkw1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "SALES" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">AGEN</label>

 						<div class="col-sm-5">
 							<input name="tbn" id="tbn" type="text" value=""  class="form-control" autocomplete="off" placeholder = "AGEN" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="tbn1" id="tbn1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "AGEN" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							
 						</div>
 					</div>
 					<div class="form-group">
 						<label class="col-sm-3 control-label">PARTAI</label>

 						<div class="col-sm-5">
 							<input name="slss" id="slss" type="text" value=""  class="form-control" autocomplete="off" placeholder = "PARTAI" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 							<input name="slss1" id="slss1" type="hidden" value=""  class="form-control" autocomplete="off" placeholder = "PARTAI" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
 						</div>
 					</div>
 				</form>
 			</div>
 			<!-- footer modal -->
 			<div class="modal-footer">
 				<button type="submit" name = "ok" class="btn btn-default ok">UPDATE</button>
 			</div>
 		</div>
 	</div>
 </div>
 <?php echo $this->session->flashdata('message');
 ?>
 <?php echo $this->session->flashdata('error');
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
<script src="<?php echo base_url();?>assets/js/jquery.maskMoney.js" type="text/javascript"></script>


<script type="text/javascript">
	$(".").maskMoney({
		thousands:',', 
		decimal:'.', 
		allowZero: true, 
		suffix: '$'
	});
</script>

<script>
	cekbarang();
	function cekbarang(){

		var idbarang = $("#id_barang").val();
		$.ajax({
			type    : 'POST',
			url     : '<?php echo site_url(); ?>Purchase_order/cekbarang',
			cache   : false,
			data    : {idbarang:idbarang},
			success :function(respond){

				$("#cekbarang").val(respond);
				var cekbarang = $("#cekbarang").val();

				if (cekbarang >= 1) {
					$('#id_supplier').prop('disabled',true);
				}else{
					$('#id_supplier').prop('disabled',false);

				}

			}

		});
	} 
	$("#form").submit(function(){
		var total      	 = $("#tot").val();

		if(total == 0){
			alert("Oops.. Total Tidak Boleh Kosong");
			$("#nama_barang").focus();
			return false;

		}else{

			return true;
		}
	});
	var site = "<?php echo site_url();?>";
	$(function(){
		$('#nama_barang').autocomplete({
			serviceUrl: site+'Purchase_order/get_data',
			onSelect: function (suggestion) {
				$('#id_barang').val(''+suggestion.id_barang); 
				$('#idbar').val(''+suggestion.id_barang); 
				$('#nama').val(''+suggestion.nama_barang);  
				$('#S_B').val(''+suggestion.satuan_besar); 
				$('#Q_IB').val(''+suggestion.qty_b); 
				$('#stok').val(''+suggestion.stok); 
				$('#modal').val(''+suggestion.modal);
				$('#mod').val(''+suggestion.mod);
				$('#modal1').val(''+suggestion.modal_t);
				$('#modal_terakhir').val(''+suggestion.modal_t);
				$('#modal_t').val(''+suggestion.modal_t);
				$('#walk1').val(''+suggestion.harga_jual);
				$('#pl').val(''+suggestion.pricelist);
				$('#pl1').val(''+suggestion.pl1);
				$('#hajul').val(''+suggestion.harga_jual);
				$('#hajul1').val(''+suggestion.harga_beli);
				$('#walkk').val(''+suggestion.walk);
				$('#walkk1').val(''+suggestion.walkk1);
				$('#tkw').val(''+suggestion.tk);
				$('#tkw1').val(''+suggestion.tkw1);
				$('#tbn').val(''+suggestion.tb);
				$('#tbn1').val(''+suggestion.tbn1);
				$('#slss').val(''+suggestion.sls);
				$('#slss1').val(''+suggestion.slss1);
			}
			
		});
		
	});
</script>
<script type="text/javascript">
	$(function(){
		$("#modal").number(true);
		$("#pl").number(true);
		$("#hajul").number(true);
		$("#walkk").number(true);
		$("#tkw").number(true);
		$("#tbn").number(true);
		$("#slss").number(true);
		$("#nila").number(true);
		
		$('#pl,#hajul,#walkk,#tkw,#tbn,#slss').keyup(function(){
			var pl = $('#pl').val();
			$('#pl1').val(pl);
			var hajul = $('#hajul').val();
			$('#hajul1').val(hajul);
			var walkk = $('#walkk').val();
			$('#walkk1').val(walkk);
			var tkw = $('#tkw').val();
			$('#tkw1').val(tkw);
			var tbn = $('#tbn').val();
			$('#tbn1').val(tbn);
			var slss = $('#slss').val();
			$('#slss1').val(slss);
		});
	});
</script>
<script>
	var site = "<?php echo site_url();?>";
	$(function(){
		$('#nm_barang').autocomplete({
			serviceUrl: site+'Pembelian/get_data',
			onSelect: function (suggestion) {
				$('#id_brg').val(''+suggestion.id_barang); 
				$('#satuan').val(''+suggestion.satuan_besar);
				$('#stoke').val(''+suggestion.stok);  
				$('#harga_modal').val(''+suggestion.modal);
				$('#harga_jual').val(''+suggestion.modal_t);
			}
		});
	});
</script>
<script type="text/javascript">
	$('#id_supplier').change(function(){
		var
		value 			= $(this).val(),
		$obj 			= $('#id_supplier option[value="'+value+'"]'),
		no_reff			= $obj.attr('data-noreff');
		max_hutang		= $obj.attr('data-max');
		jatuh_tempo		= $obj.attr('data-jatuhtempo');
		jatuh_tempoan	= $obj.attr('data-jatuhtempoan');
		ppn				= $obj.attr('data-ppn');
		ppnan			= $obj.attr('data-ppnan');
		spl				= $obj.attr('data-spl');
		sup				= $obj.attr('data-sup');
		kurs_tukar		= $obj.attr('data-mu');
		kurs_tukar1		= $obj.attr('data-mu1');
		kode_mu			= $obj.attr('data-kodemu');
		simbol			= $obj.attr('data-simbol');
		
		$('#no_reff').val(no_reff);
		$('#max_hutang').val(max_hutang);
		$('#jatuh_tempo').val(jatuh_tempo);
		$('#jatuh_tempoan').val(jatuh_tempoan);
		$('#ppn').val(ppn);
		$('#ppnan').val(ppnan);
		$('#idspl').val(spl);
		$('#kurs_tukar1').val(kurs_tukar);
		$('#mata_uang').val(kurs_tukar1);
		$('#kode_mu1').val(kode_mu);
		$('#simbol').val(simbol);
		
	});
</script>
<script type="text/javascript">
	function startCalc(){
		interval = setInterval("calc()",1);}
		function calc(){
			
			one   = document.getElementById('modal_terakhir').value;
			two   = document.getElementById('kurs_tukar1').value;
			tri   = document.getElementById('handling').value;
			document.getElementById('modal1').value = (one * 1 + tri * 1) * (two *1);
		}
		
		function stopCalc(){
			clearInterval(interval);}

			

		</script>
		<script type="text/javascript">
			$(function(){
				//$("#modal").number(true);
				$('#modal1').keyup(function(){
					
					var modal = $('#modal1').val();
					$("#modal3").val(modal);
					$("#modal2").val(modal);
				});
				
			});
		</script>
		
		<script type="text/javascript">
			tampiltmp();
			
			$('select').select2();
			function tampiltmp(){			
				
				$("#tampiltmp").load("<?php echo base_url();?>Purchase_order/view_detail_barang");
				$('.tampildata1').load("<?php echo base_url();?>Purchase_order/view_detail_barang3");			
				$('.tampildata').load("<?php echo base_url();?>Purchase_order/view_detail_barang2");
			} 
			$('#btn_simpan').on('click',function(){
				var namabarang		=$('#nama_barang').val();
				var idbarang		=$('#id_barang').val();
				var qtybes			=$('#Q_B').val();
				var stok			=$('#stok').val();
				var satuanbes		=$('#S_B').val();
				var hargabeli		=$('#modal1').val();
				var modalterakhir	=$('#modal_terakhir').val();
				var qib				=$('#Q_IB').val();
				var modal			=$('#modal').val();
				var modalt			=$('#modal_t').val();
				var ppn				=$('#ppn').val();
				var disc			=$('#disc').val();
				var id_supplier 	=$('#idspl').val();
				var disc1			=$('#disc1').val();
				var disc2			=$('#disc2').val();
				var jam				=$('#txt').val();
				var kurs			=$('#kurs_tukar1').val();
				var nilai			=$('#nilai_kurs').val();
				var simbol			=$('#simbol').val();
				var handling		=$('#handling').val();
				if(namabarang == 0){
					alert("Oops.. Nama Barang Masih Kosong");
					document.getElementById("nama_barang").focus();
				}else if(qtybes == 0){
					alert("Oops.. Qty Masih Kosong");
					document.getElementById("Q_B").focus();
				}else if(hargabeli == 0){
					alert("Oops.. Harga Masih Kosong");
					document.getElementById("modal1").focus();
				}else if(id_supplier == 0){
					alert("Oops.. Pilih Supplier Terlebih Dahulu");
					document.getElementById("id_supplier").focus();
				}else if(hargabeli != modalt){
					$('#show').modal('show');
					$('.ok').click(function () {
						var namabarang		=$('#nama_barang').val();
						var idbarang		=$('#id_barang').val();
						var nopo			=$('#no_po').val();
						var qtybes			=$('#Q_B').val();
						var stok			=$('#stok').val();
						var satuanbes		=$('#S_B').val();
						var hargabeli		=$('#modal1').val();
						var modalterakhir	=$('#modal_terakhir').val();
						var handling		=$('#handling').val();
						var qib				=$('#Q_IB').val();
						var modal			=$('#modal').val();
						var modalt			=$('#modal_t').val();
						var ppn				=$('#ppn').val();
						var disc			=$('#disc').val();
						var disc1			=$('#disc1').val();
						var disc2			=$('#disc2').val();
						var jam				=$('#txt').val();
						var pl				=$('#pl').val();
						var pl1				=$('#pl1').val();
						var hajul			=$('#hajul').val();
						var hajul1			=$('#hajul1').val();
						var walkk			=$('#walkk').val();
						var walkk1			=$('#walkk1').val();
						var tkw				=$('#tkw').val();
						var tkw1			=$('#tkw1').val();
						var tbn				=$('#tbn').val();
						var tbn1			=$('#tbn1').val();
						var slss			=$('#slss').val();
						var slss1			=$('#slss1').val();
						var kurs			=$('#kurs_tukar1').val();
						var simbol			=$('#simbol').val();
						var mod				=parseInt($('#mod').val());
						var satu 			= (pl1 * 1) * (hajul1 /100);
						var satu1		 	= (pl1 * 1) - (satu * 1);

						var dua 			= (pl1 * 1) * (walkk1 /100);
						var dua1 			= (pl1 * 1) - (dua * 1);

						var tiga 			= (pl1 * 1) * (tkw1 /100);
						var tiga1 			= (pl1 * 1) - (tiga * 1);

						var empat 			= (pl1 * 1) * (tbn1 /100);
						var empat1 			= (pl1 * 1) - (empat * 1);

						var lima 			= (pl1 * 1) * (slss1 /100);
						var lima1 			= (pl1 * 1) - (lima * 1);

						if (pl1 > 0) {
							if (satu1 <= mod ) {
								alert("Oops.. Harga Toko Kecil Kurang Dari Modal");
								document.getElementById("hajul").focus();
							}else if (dua1 <= mod) {
								alert("Oops.. Harga Toko Besar Kurang Dari Modal");
								document.getElementById("walkk").focus();
							}else if (tiga1 <= mod) {
								alert("Oops.. Harga Sales Kurang Dari Modal");
								document.getElementById("tkw").focus();
							}else if (empat1 <= mod) {
								alert("Oops.. Harga Agen Kurang Dari Modal");
								document.getElementById("tbn").focus();
							}else if (lima1 <= mod) {
								alert("Oops.. Harga Partai Kurang Dari Modal");
								document.getElementById("slss").focus();
							}else{
								$.ajax({
									type : "POST",
									url  : "<?php echo base_url()?>Purchase_order/input_detail_barang",
									data : {nopo:nopo,idbarang:idbarang,modalterakhir:modalterakhir,simbol:simbol,handling:handling,modalt:modalt,stok:stok,qtybes:qtybes,satuanbes:satuanbes,hargabeli:hargabeli,modal:modal,ppn:ppn,disc:disc,disc1:disc1,disc2:disc2,jam:jam,pl:pl,hajul:hajul,walkk:walkk,tkw:tkw,tbn:tbn,slss:slss,kurs:kurs}, 
									success: function(data){
										$('[name="idbarang"]').val("");
										$('[name="namabarang"]').val("");
										$('[name="qtybes"]').val("");
										$('[name="satuanbes"]').val("");
										$('[name="hargabeli"]').val("");
										$('[name="modalt"]').val("");
										$('[name="qib"]').val("");
										$('[name="modal"]').val("");
										$('[name="disc"]').val("");
										$('[name="disc1"]').val("");
										$('[name="disc2"]').val("");
										$('[name="stok"]').val("");
										$('[name="modal"]').val("");
										$('[name="handling"]').val("");
										$('[name="modalterakhir"]').val("");
										$('#show').modal('hide');
										tampiltmp();
										cekbarang();
										document.getElementById("nama_barang").focus();

									}
								});
							}
						}else{

							if (hajul1 <= mod ) {
								alert("Oops.. Harga Toko Kecil Kurang Dari Modal");
								document.getElementById("hajul").focus();
							}else if (walkk1 <= mod) {
								alert("Oops.. Harga Toko Besar Kurang Dari Modal");
								document.getElementById("walkk").focus();
							}else if (tkw1 <= mod) {
								alert("Oops.. Harga Sales Kurang Dari Modal");
								document.getElementById("tkw").focus();
							}else if (tbn1 <= mod) {
								alert("Oops.. Harga Agen Kurang Dari Modal");
								document.getElementById("tbn").focus();
							}else if (slss1 <= mod) {
								alert("Oops.. Harga Partai Kurang Dari Modal");
								document.getElementById("slss").focus();
							}else{
								$.ajax({
									type : "POST",
									url  : "<?php echo base_url()?>Purchase_order/input_detail_barang",
									data : {nopo:nopo,idbarang:idbarang,modalterakhir:modalterakhir,simbol:simbol,handling:handling,modalt:modalt,stok:stok,qtybes:qtybes,satuanbes:satuanbes,hargabeli:hargabeli,modal:modal,ppn:ppn,disc:disc,disc1:disc1,disc2:disc2,jam:jam,pl:pl,hajul:hajul,walkk:walkk,tkw:tkw,tbn:tbn,slss:slss,kurs:kurs}, 
									success: function(data){
										$('[name="idbarang"]').val("");
										$('[name="namabarang"]').val("");
										$('[name="qtybes"]').val("");
										$('[name="satuanbes"]').val("");
										$('[name="hargabeli"]').val("");
										$('[name="modalt"]').val("");
										$('[name="qib"]').val("");
										$('[name="modal"]').val("");
										$('[name="disc"]').val("");
										$('[name="disc1"]').val("");
										$('[name="disc2"]').val("");
										$('[name="stok"]').val("");
										$('[name="modal"]').val("");
										$('[name="modalterakhir"]').val("");
										$('[name="handling"]').val("");
										$('#show').modal('hide');
										tampiltmp();
										cekbarang();
										$('.tampildata').load("<?php echo base_url();?>Purchase_order/view_detail_barang2");
										document.getElementById("nama_barang").focus();

									}
								});
							}
						}
					});
}else{
	
	$.ajax({
		type : "POST",
		url  : "<?php echo base_url()?>Purchase_order/input_detail_barang",
                data : {idbarang:idbarang,modalterakhir:modalterakhir,handling:handling,simbol:simbol,modalt:modalt,stok:stok,qtybes:qtybes,satuanbes:satuanbes,hargabeli:hargabeli,modal:modal,ppn:ppn,disc:disc,disc1:disc1,disc2:disc2,jam:jam,kurs:kurs}, //dihapus,disc2:disc2
                success: function(data){
                	$('[name="idbarang"]').val("");
                	$('[name="namabarang"]').val("");
                	$('[name="qtybes"]').val("");
                   // $('[name="qtykec"]').val("");
                   $('[name="satuanbes"]').val("");
                    //$('[name="satuankec"]').val("");
                    $('[name="hargabeli"]').val("");
                    $('[name="modalt"]').val("");
                    $('[name="qib"]').val("");
                    //$('[name="qik"]').val("");
                    $('[name="modal"]').val("");
                    $('[name="disc"]').val("");
                    $('[name="disc1"]').val("");
                    $('[name="disc2"]').val("");
                    $('[name="stok"]').val("");
                    $('[name="modal"]').val("");
                    $('[name="modalterakhir"]').val("");
                    $('[name="handling"]').val("");
                    $('[name="handling"]').val("");
                    
                    tampiltmp();
                    cekbarang();
                    $('.tampildata').load("<?php echo base_url();?>Purchase_order/view_detail_barang2");
                    document.getElementById("nama_barang").focus();
                    
                }
            });
	
	$('.tampildata1').load("<?php echo base_url();?>Purchase_order/view_detail_barang3");
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
			url : "<?= site_url('Purchase_order/destroy/');?>"+'/'+user+'/'+id_barang,
			success: function(data){
				cekbarang();
				tampiltmp();
				$('.tampildata').load("<?php echo base_url();?>Purchase_order/view_detail_barang2");
				$('.tampildata1').load("<?php echo base_url();?>Purchase_order/view_detail_barang3");
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
		$('#btn_simpan1').focus();
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
		
		if(qtyb == 0){
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