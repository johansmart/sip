 <html>
<head>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" type = "text/css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" type = "text/css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
  
  
</head>
<body>	
 <div class = "row">
	<section class="col-lg-12 connectedSortable">
		<div class="box box-primary">
				<div class="box-body">
			<div class="pull-right box-tools">
               	<a href = "<?php echo base_url('Penjualan/input_penjualan');?>"  class="btn btn-sm btn-info pull-right" title="Collapse" > Tambah Penjualan</i></a>
				 </div>
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
				<li ><a href="<?php echo base_url(); ?>Penjualan/view_penjualan" ><i class="fa fa-money"></i> <b>DATA PENJUALAN</b></a></li>
				  <li class="active"><a href="<?php echo base_url(); ?>Penjualan/view_cash" data-toggle="tab" ><i class="fa fa-money"></i> <b>DATA PENJUALAN CASH</b></a></li>
				  
				</ul>
			</div>
					  <table id = "example" class="table table-condensed">
						    <thead>
				                  <tr>
								<td width = "10px" ><b>No</b></td>
								<td width = "100px" ><b>No Invoice</b></td>
								<td  align="center" width = "50px"><b>Tgl</b></td>
								<td  width = "100px"><b>Pelanggan</b></td>
								<td  align="right" width = "80px"><b>Total</b></td>
								<td  align="right" width = "80px"><b>Sisa Tagihan</b></td>								
								<td  align="center" width = "70px"><b>Jatuh Tempo</b></td>
								<td width = "5px"><b>C</b></th>
								<td align="center" width = "1%"><b>status</b></td>
								<td width = "5px"><b>Acc</b></td>
								<td width = "5px"><b>SJ</b></td>
								<td width = "250px"><b>Keterangan</b></td>
								<td width = "20px"><b>User</b></td>
								<td width = "50px"><b>Tempo</b></td>
								</tr>
								</thead> 
								<tbody>
								<?php 
									$total=0; $hasil=0;$hasil2=0;$hasil3=0;$ppn=0;$dpp=0;$no=1;
									foreach($listpenjualan->result() as $f){
									
								?>
								
							
								<tr>
								<td><?php echo $no;?></td>
								<td href = "#"  class="detail" data-id = "<?php echo $f->no_jual; ?>"><?php echo $f->no_jual;?>/<?php echo $f->id_pelanggan;?>/<?php echo $f->no_reff;?></td>
								<td  align="center"><?php echo $f->tgl_invoice;?></td>
								<td><?php echo $f->nama_pelanggan;?></td>
								<td  align="right"><?php echo number_format($f->total,2);?></td>
								<td  align="right"><?php echo number_format($f->sisa,2);?></td>
								<td  align="center"><?php echo date('d-m-Y',strtotime($f->jatuh_tempo)); ?></td>
								<td><?php echo $f->cetak; ?></td>
								<td align="center"><?php if ($f->sisa == 0) {?>
									<span style="width:15px;height:10px" class='btn btn-xs btn-success'></span>
									<?php
								} else{ ?>
								<span style="width:15px;height:10px" class='btn btn-xs btn-danger'></span>
								<?php }?>
								</td>
								<td align="center">
								<?php if ($f->acc == 0) {?>
									<span></i></span>
									<?php
								} else{ ?>
								<span ><i class='fa fa-check'></i></span>
								<?php }?>
								</td>
								<td align="center">
								<?php if ($f->status_kirim == 0) {?>
									<span></i></span>
									<?php
								} else{ ?>
								<span ><i class='fa fa-check'></i></span>
								<?php }?>
								</td>
								<td><?php echo $f->keterangan;?></td>
								<td><?php echo $f->user; ?></td>
								<td><?php echo $f->tempo;?> Hari</td>
								<!--<td><a href="<?php echo base_url('Penjualan/cetak_struk/'.$f->no_jual);?>"  title='Print Thermal' class='btn btn-xs btn bg-maroon'><i class='fa fa-print'></i></a> 
									<a href="<?php echo base_url('Penjualan/cetak_nota/'.$f->no_jual);?>"  title='Print do Matrik' class='btn btn-xs btn-info'><i class='fa fa-print'></i></a>-->
								</tr>
									<?php $no++;}?>
								</tbody>
							</table>
							<hr>
			</div>
	</div>
	<div class="modal fade bd-example-modal-lg" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Data Detail Penjualan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<table  class="table table-condensed" id = "#">
						<thead>
						<tr>
							
							<th style="width:200px"> Nama Barang </th>
							<th style="width:100px"> QTY </th>
							<th style="width:100px"> Satuan </th>
							<th style="width:100px"> Harga </th>
							<th style="width:50px"> % 1 </th>
							<th style="width:50px"> % 2 </th>
							<th style="width:100px"> Subtotal </th>
						</tr>
						</thead>
	
						<tbody id = "datadetail">
						
						
						</tbody>
				</table>
				<hr>
				<table  class="table table-condensed" id = "#">
						<thead>
						<tr>
							
							<th style="width:200px"> Nama Barang </th>
							<th style="width:100px"> QTY </th>
							<th style="width:100px"> Satuan </th>
							<th style="width:100px"> Harga </th>
							<th style="width:50px"> % 1 </th>
							<th style="width:50px"> % 2 </th>
							<th style="width:100px"> Subtotal </th>
						</tr>
						</thead>
	
						<tbody id = "detairetur">
						
						
						</tbody>
				</table>
			  </div>
			  <div class="modal-footer">
					
			  </div>
			</div>
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
  
<script type="text/javascript">
	tampiltmp();
		function tampiltmp(){
								
					
		}
		
		$(".detail").click(function(){
			
			$('#ModalDetail').modal("show");

			id_barang = $(this).attr('data-id');

			$.ajax({
				type 	:'POST',
				url     :'<?php echo base_url();?>Penjualan/detail_data',
				data    :'id_barang='+id_barang,
				cache   :false,
				success :function(respond){
					
					$("#datadetail").html(respond);
				}
				
			});

		});
			$(".detail").click(function(){
			
			$('#ModalDetail').modal("show");

			id_barang = $(this).attr('data-id');

			$.ajax({
				type 	:'POST',
				url     :'<?php echo base_url();?>Penjualan/detail_retur',
				data    :'id_barang='+id_barang,
				cache   :false,
				success :function(respond){
					
					$("#detairetur").html(respond);
				}
				
			});

		});
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
</html>
