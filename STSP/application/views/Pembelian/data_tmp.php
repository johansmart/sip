<?php 
$total=0; $sub = 0;$hasil=0;$hasil2=0;$hasil3=0;$hasil4=0;$hasil5=0;$hasil6=0;$hasil7=0;
$no = 1;$harga = 0;
foreach ($list_tmp as $t) { 
	$harga = $t['handling'] + $t['harga_beli'];
	$subtotal = $t['qtyb']*$harga;
	$diskon =$t['qtyb']*$t['harga_beli']*$t['disc']/100;
	$hasil =$subtotal-$diskon;
	$hasil2 =$hasil*$t['disc1']/100;
	$hasil3 =$hasil-$hasil2;
	$hasil4 =$hasil3*$t['disc2']/100;
	$hasil5 =$hasil3-$hasil4;
	$hasil6 =$hasil5*$t['ppn']/100;
	$hasil7 =$hasil5+$hasil6;
	?>
	<tr>
		<td ><?php echo $no; ?></td>
		<td ><?php echo $t['nama_barang']; ?></td>
		<td> <?php echo $t['qtyb']; ?></td>
		<td> <?php echo $t['satuan_besar']; ?> </td>
		<td > <?php if($t['kurs_tukar'] > 1){ echo $t['kode_mu']?>. <?php echo round($t['harga_beli'],2); }
		else{ echo "Rp. ",number_format($t['harga_beli'],2);}?></td>
		<td>  <?php echo $t['disc']; ?></td>
		<td>  <?php echo $t['disc1']; ?></td>
		<td>  <?php echo $t['disc2']; ?></td>
		<td><?php if($t['kurs_tukar'] > 1){ echo $t['kode_mu']?>. <?php echo $hasil5; }
		else{ echo "Rp. ", number_format($hasil5,2);}?></td> 
	</tr>
	<?php  $total=$total+$hasil5*$t['kurs_tukar']; $sub=$sub+$hasil5;$no++;} ?> 
	<tr hidden = "">
	<td><input type = "text" value = "<?php echo $total;?>" name = "" id = "sub"></td><!-- Asli $hasil5 -->
	<td><input type = "text" value = "<?php echo $sub;?>" name = "" id = "kur"></td><!-- Asli $hasil5 -->
	</tr>
	 
	





