
<style type="text/css">
            .html {
                font-family: "Verdana";
            }
            .content {
                width: 254mm;
                font-size: 12px;
            }
            .content .title {
                text-align: center;
            }
            .content .head-desc {
                margin-top: 0px;
                display: table;
                width: 100%;
            }
            .content .head-desc > div {
                display: table-cell;
            }
            .content .head-desc .user {
                text-align: right;
            }
            .content .nota {
                text-align: center;
                margin-top: 0px;
                margin-bottom: 5px;
            }
            .content .separate {
                margin-top: 0px;
                margin-bottom: 15px;
                border-top: 1px dashed #000;
            }
            .content .transaction-table {
                width: 100%;
                font-size: 12px;
            }
            .content .transaction-table .name {
                width: 185px;
            }
            .content .transaction-table .qty {
                text-align: center;
            }
            .content .transaction-table .sell-price, .content .transaction-table .final-price {
                text-align: right;
                width: 65px;
            }
            .content .transaction-table tr td {
                vertical-align: top;
            }
            .content .transaction-table .price-tr td {
                padding-top: 7px;
                padding-bottom: 7px;
            }
            .content .transaction-table .discount-tr td {
                padding-top: 7px;
                padding-bottom: 7px;
            }
            .content .transaction-table .separate-line {
                height: 1px;
                border-top: 1px dashed #000;
            }
            .content .thanks {
                margin-top: 0px;
                text-align: center;
            }
            .content .azost {
                margin-top:0px;
                text-align: center;
                font-size:10px;
            }
            @media print {
                @page  { 
                    width: 88mm;
                    margin: 0mm;
                    height: -1mm;
                }
            }
			#FK{
				font-size:12px;
				margin-top:0px;
				margin-left:0px;
				text-transform: uppercase;
				letter-spacing: 4.0pt;
			}
			#FB{
				font-size:15px;
				font-size:15px;
				margin-top:0px;
				margin-left:0px;
				text-transform: uppercase;
				letter-spacing: 4.0pt;
			}
			#FC{
				font-size:8px;
				margin-top:0px;
				margin-left:3px;
				text-transform: uppercase;
				letter-spacing: 4.0pt;
			}
			#FD{
				font-size:12px;
				margin-top:0px;
				margin-left:0px;
				letter-spacing: 4.0pt;
				
			}
        </style>

  <body onclick="window.print();" class="html">


<?php		
		$tanggal_dari	= $this->input->get('tanggal_dari');
		$tanggal_sampai	= $this->input->get('tanggal_sampai');
		$query = "SELECT * from transaksi_dayb  WHERE tgl BETWEEN '$tanggal_dari' AND '$tanggal_sampai' order by tgl,jam asc";
		$cari = $this->db->query($query);
		$cari->num_rows();
	
		

		
 ?>

<table align="center" cellpadding="0" width="533px" >
	<tr bgcolor="#fff">
		<td height="20" colspan="5" align="center" id="FB" ><b><font color="#000000"> &nbsp Laporan Transaksi Pembelian </font></b></td>
	</tr>
	<tr bgcolor="#fff">
		<td height="10" colspan="5" align="center" id="fC"><b><font color="#000000"> &nbsp <?php echo "Per : ".$tanggal_dari; ?> s/d <?php echo $tanggal_sampai; ?></font></b></td>
	</tr>
	<tr bgcolor="#fff">
		<td height="20"></td>
	</tr>
	</table>
<table  align="center" cellpadding="0" cellspacing="0" class="all" width="1200px"id="fC" >
	<tr id="fC">
		<td width = "2%">No</td>
		<td width = "30%">No Transaksi</td>
		<td align="right" width = "15%">Total</td>
		<td align="right" width = "15%">Cash</td>
		<td align="right" width = "15%">Debet</td>
		<td align="right" width = "15%">Transfer</td>
		<td align="right" width = "15%">Giro</td>
		<td align="right" width = "15%">Potongan</td>
		<td align="right" width = "15%">Kembali</td>
		<td align="right" width = "20%">Sisa Tagihan</td>
	</tr>
	<tr>
		<td colspan="12" id="fD">--------------------------------------------------------------------------------------------------------------------</td>
	</tr>
	<tr>
	<?php
	$no=1;
	$t=0;
	$c=0;
	$d=0;
	$tr=0;
	$g=0;
	$p=0;
	$k=0;
	$s=0;
	$sub = 0;
	if(isset($cari)){
	foreach ($cari->result_array() as $data){
	$t=$t+$data['total'];
	$c=$c+$data['cash'];
	$d=$d+$data['debet'];
	$tr=$tr+$data['transfer'];
	$g=$g+$data['giro'];
	$p=$p+$data['potongan'];
	$k=$k+$data['kembali'];
	$s=$s+$data['sisa_tagihan'];
	?>
	<td><?php echo $no;?></td>
	<td><?php echo $data['no_transaksi'];?>/<?php echo $data['id_supplier'];?>/<?php echo $data['no_raff'];?></td>
	<td align="right">
	<?php if($data['total'] == 0){
				echo "-";
			}elseif($data['total'] > 0){
			echo number_format($data['total']);
			}else{
				echo number_format($data['total']);
			}
			?></td>
	<td align="right">
	<?php if($data['cash'] > 0){
				echo number_format($data['cash']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['debet'] > 0){
				echo  number_format($data['debet']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['transfer'] > 0){
				echo  number_format($data['transfer']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['giro'] > 0){
				echo  number_format($data['giro']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['potongan'] > 0){
				echo  number_format($data['potongan']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['kembali'] > 0){
				echo  number_format($data['kembali']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	<td align="right">
		<?php if($data['sisa_tagihan'] > 0){
				echo  number_format($data['sisa_tagihan']);
			}else{
			?>
				-
			<?php
			}
			?>	
	</td>
	
    </tr> 
	<?php $no++; }}?>
	<tr>
	<tr>
		<td colspan="12" id="fD" height="40px">--------------------------------------------------------------------------------------------------------------------</td>
	</tr>
		<table  align="center" cellpadding="0" cellspacing="0" class="all" width="1200px"id="fC" >
				<tr id="fC" height="20px">
							<th  width="550"colspan='9' ></th>
							<th  align="right">Grand Total :</th>
							<td align="right" colspan='4'><?php if($t > 0){
										echo"Rp. ", number_format($t,2);
									}else{
									?>
										-
									<?php
									}
									?>
									</td>
							</tr >
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Cash :</th>
							<td align="right" colspan='0'><?php if($c > 0){
										echo"Rp. ", number_format($c,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr >
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Debet :</th>
							<td align="right" colspan='0'><?php if($d > 0){
										echo"Rp. ", number_format($d,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>		
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Transfer :</th>
							<td align="right" colspan='0'><?php if($tr > 0){
										echo"Rp. ", number_format($tr,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>		
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Giro :</th>
							<td align="right" colspan='0'><?php if($g > 0){
										echo"Rp. ", number_format($g,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Potongan :</th>
							<td align="right" colspan='0'><?php if($p > 0){
										echo"Rp. ", number_format($p,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Kembali :</th>
							<td align="right" colspan='0'><?php if($k > 0){
										echo"Rp. ", number_format($k,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>
							<tr id="fC" height="20px">
							<th  width="150"colspan='9' ></th>
							<th align="right" >Total Sisa Tagihan :</th>
							<td align="right" colspan='0'><?php if($s > 0){
										echo"Rp. ", number_format($s,2);
									}else{
									?>
										-
									<?php
									}
									?></td>
							</tr>		
							</table>
</table>	
</body>