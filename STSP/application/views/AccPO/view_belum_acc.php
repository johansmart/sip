<div class="box box-primary">
 				<div class="box-header">
 					<h3 class="box-title" style="margin-left: -9px;">Data Belum ACC PO</h3>
 				</div>
 				<div class="box-body">
 					<div class="col-md-9" style = "width: 51% margin-left:0px;margin-top:-15px;">
 						<table id = "example" class = "table table-condensed" style = "width:650px;">
 							<thead bgcolor="#99FF99">
 								<td><b>No </b></td>
 								<td><b>No PO </b></td>
 								<td><b>Supplier</b></td>
 								<td><b>Tanggal</b></td>
 								<td><b>Acc</b></td>
 							</thead>
 							<tbody>
							<?php 
							$no = 1;
							foreach ($belumacc as $d) { 
								?>
								
								<tr>
									<td><?php echo $no;?></td>
									<td> <?php echo $d['no_beli']; ?>/<?php echo $d['id_supplier']; ?>/<?php echo $d['no_reff']; ?></td>
									<td> <?php echo $d['nama_supplier']; ?></td>
									<td> <?php echo $d['tgl_invoice']; ?></td>
									<td> 
										<?php if ($d['acc'] == 0) {?>
											<span style="font-size:15px"><i class='fa  fa-square-o'></i></span>
											<?php
										} else{ ?>
											<span style="font-size:15px"><i class='fa fa-check-square'></i></span>
										<?php }?>
									</td>
								</tr>
							<?php $no++;} ?> 
 							</tbody>
 						</table>
 					</div>	
 				</div>
 			</div>
			<script>

	$("#example").DataTable({


		searching   : true,
		bInfo : false,
		bLengthChange : false,
		bPaginate : false,
		ordering	:	false


	});


</script>

	

	
	