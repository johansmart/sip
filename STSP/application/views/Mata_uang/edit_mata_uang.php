  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" type = "text/css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.css" type = "text/css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  
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
<body>
 <div class = "row">
<section class="col-lg-9 connectedSortable">
<div class="box box-success">
		<div class="box box-success" style="margin-top: -3px;"> 
				  <h3 class="box-title">Data Informasi Mata Uang</h3>
		</div>
						<?php 
						$user = $this->session->userdata('username');
						$query = "select * from menu WHERE level = '$user'";
								$j = $this->db->query($query);
								$j->num_rows();
								
							?>
							<?php foreach ($j->result() as $j){ 
							}
							?>
						<table id = "" class="table table-condensed" >
			                 <thead bgcolor="#99FF99">
			                <tr>
			                  <th width="150px"> <center>Kode Mata Uang</center></th>
			                  <th width="150px"> <center>  Nama Mata Uang</center></th>
							  <th width="150px"> <center>Simbol</center></th>
							  <th width="150px"> <center>Kurs Tukar</center></th>
							  <th width="150px"> <center>Per Tanggal</center></th>
							  <?php if ($j->e_mata_uang == "Y" ): ?>
							  <th width="10px"> <center>E</center></th>
							  <?php endif;?>
							   <?php if ($j->h_mata_uang == "Y" ): ?>
							  <th width="10px"> <center>H</center></th>
							  <?php endif;?>
							  
			                </tr>
			                </thead>
			                <tbody>
			                <?php 
			                foreach ($listmatauang->result() as $c) { 
			                ?>
			                <tr>
			                  <td align = "center"><?php echo $c->kode_mu; ?></td>
			                  <td align = "center"><?php echo $c->nama_mu; ?></td>			                  
							  <td align = "center"><?php echo $c->simbol; ?></td>
							  <td align = "center"><?php echo number_format($c->kurs_tukar); ?></td>
							  <td align = "center"><?php echo $c->per_tanggal; ?></td>
							  <?php if ($j->e_mata_uang == "Y" ): ?>
							  <td align = "center"><a href = "<?php echo base_url('Mata_uang/edit_mata_uang/'.$c->kode_mu);?>" class="btn btn-success btn-xs"><i class = "fa fa-edit"></i></a></td>	
							  <?php endif;?>
							   <?php if ($j->h_mata_uang == "Y" ): ?>
							  <td align = "center"><a href = "<?php echo base_url('Mata_uang/hapus_mata_uang/'.$c->kode_mu);?>" class="btn btn-danger btn-xs"><i class = "fa fa-trash"></i></a></td>	
							  <?php endif;?>
			                </tr>
			                <?php } ?>
			               
			              </table>
						</div>
	  		</section>
	  <section class="col-lg-3 connectedSortable">
<div class="box box-primary box-solid">
		<div class="box-header">
			<h3 class="box-title"><i class="fa fa-tag"></i> Edit Mata Uang</h3>
		</div>
					<form class="form-horizontal" method="POST" action="">
						<div class="box-body">
						
						
							<div class="form-group">
							<label class="col-sm-3 control-label">Kode Mata Uang</label>
							<div class="col-sm-5">
									<input type="text"  name="kode_mata_uang" id="kode_mata_uang" onkeyup="this.value=this.value.toUpperCase();" value = "<?php echo  $d['kode_mu']; ?>" autocomplete="off" class="form-control" placeholder = "KODE MATA UANG" readonly>
							</div>	
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Mata Uang</label>
								<div class="col-sm-5">
										<input type="text"  name="nama_mata_uang" id="nama_mata_uang" onkeyup="this.value=this.value.toUpperCase();" value = "<?php echo  $d['nama_mu']; ?>" autocomplete="off" class="form-control" placeholder = "NAMA MATA UANG" autofocus required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
								</div>
							</div>
							
							<div class="form-group">
							<label class="col-sm-3 control-label">Simbol</label>
							<div class="col-sm-5">
									<input type="text"  name="simbol" id="simbol" onkeyup="this.value=this.value.toUpperCase();" value = "<?php echo  $d['simbol']; ?>" autocomplete="off" class="form-control" placeholder = "SIMBOL" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
									
							</div>	
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">Kurs Tukar</label>
							<div class="col-sm-5">
									<input type="text"  name="kurs_tukar" id="kurs_tukar" onkeyup="this.value=this.value.toUpperCase();" value = "<?php echo  $d['kurs_tukar']; ?>" autocomplete="off" class="form-control" placeholder = "KURS TUKAR" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
									
							</div>	
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">Per Tanggal</label>
							<div class="col-sm-5">
									<input type="text"  name="per_tanggal" id="per_tanggal" onkeyup="this.value=this.value.toUpperCase();" value = "<?php echo  $d['per_tanggal']; ?>" autocomplete="off" class="form-control" placeholder = "PER TANGGAL" required oninvalid="this.setCustomValidity('Oops.. Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
									<hr>
										<table align = "right" class = "table1">
										<tr>
										<td align = "right">
										<input type="submit" name = "submit" value = "SIMPAN" class="btn btn-sm btn-primary">
										<a href = "<?php echo base_url();?>Satuan/input_satuan" class="btn btn-sm btn-danger">Cancel</a>
										</td>
										</tr>
										</table>
							</div>	
							</div>
							
							
							
							</div>
						</form>
					</div>
			</section>
	</div>
</body>


<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  
    $("#tabelsatuan").DataTable({
      
      searching   : true,
      bInfo : false,
      //bLengthChange : false,
      bPaginate : false
     
  })
</script>

</html>