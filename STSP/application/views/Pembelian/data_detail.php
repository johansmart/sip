<?php 
$no = 1;
$total=0; $hasil=0;$hasil2=0;$hasil3=0;$hasil4=0;$hasil5=0;$hasil6=0;$hasil7=0;$dolar=0;$subdolar=0;
foreach ($listdetail->result() as $t) { 
	$subtotal = $t->qtyb*$t->harga_beli;
	$diskon =$t->qtyb*$t->harga_beli*$t->disc/100;
	$hasil =$subtotal-$diskon;
	$hasil2 =$hasil*$t->disc1/100;
	$hasil3 =$hasil-$hasil2;
	$hasil4 =$hasil3*$t->disc2/100;
	$hasil5 =$hasil3-$hasil4;
	$dolar =$hasil5/$t->kurs_tukar;
	$subdolar = $subdolar + $dolar;
	?>
	
	<tr>
		<td ><?php echo $no; ?></td>
		<td ><?php echo $t->nama_barang; ?></td>
		<td> <?php echo $t->qtyb; ?></td>
		<td> <?php echo $t->satuan_besar; ?> </td>
		<td>  Rp. <?php echo number_format($t->harga_beli,2); ?></td>
		<td> <?php if($t->simbol != "RP"){ echo $t->simbol?>. <?php echo $dolar; }
		else{ echo "-";}?></td>
		<td>  <?php echo $t->disc; ?></td>
		<td>  <?php echo $t->disc1; ?></td>
		<td>  <?php echo $t->disc2; ?></td>
		<td> Rp. <?php echo number_format($hasil5,2); ?></td> <!-- Asli $hasil5 -->
	</tr>
	<?php $total=$total+$hasil5; $no++;} ?> 
	<tr>
	</tr>
	<tr>
		<td colspan = "9" align = "right"><b>Total</b></td>
		<td>Rp. <?php echo number_format($total,2);?></td>
	</tr>
	<tr>
		<td colspan = "9" align = "right"><b>DPP</b></td>
		<td>Rp. <?php echo number_format($t->dpp,2);?></td>
	</tr>
	<tr>
		<td colspan = "9" align = "right"><b>ppn</b></td>
		<td>Rp. <?php echo number_format($t->ppn,2);?></td>
	</tr>
	<?php if($r->qtyb > 0){ echo"
	<tr>
	<td colspan = 9 align = right><b>Total Retur</b></td>
	<td>Rp. " .number_format($totalan,2)."</td>
	</tr>";
}
?>
<?php if($t->nominal1 > 0){ echo"
<tr>
<td colspan = 9 align = right><b> ".strtoupper($t->ongkir1)." </b></td>
<td>".$t->simbol.". ".number_format($t->nominal1,2)."</td>
</tr>";
}?>

<?php if($t->nominal > 0){ echo"
<tr>
<td colspan = 9 align = right>Tips :<b> ".strtoupper($t->tips)." </b></td>
<td>Rp. " .number_format($t->nominal,2)."</td>
</tr>";
}?>
<?php if($t->kode_mu !=  "RP"){ echo"
<tr>
<td colspan = 9 align = right><b>Total Nilai ASING</b></td>
<td>".$t->simbol.". ".number_format($subdolar,2)."</td>
</tr>";
}?>
<?php if($t->nominal1 > 0 OR $t->nominal > 0){ echo"
<tr>
<td colspan = 9 align = right><b>Grand Total</b></td>
<td>Rp. ".number_format($t->total,2)."</td>
</tr>";
}?>
<?php if($t->sisa >0){ echo"
<tr>
<td colspan = 9 align = right><b>Sisa Tagihan</b></td>
<td>Rp. ".number_format($t->sisa,2)."</td>
</tr>";
}
?>
