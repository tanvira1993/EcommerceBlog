<html>

<head>
	<style type="text/css">
	@media print
	{    
		.no-print
		{
			display: none !important;
		}
	}
</style>
</head>

<body lang=EN-US>

	<div style="margin-top:120px;" class=WordSection1>

		<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=720 style='width:562.5pt;margin:0 auto;border-collapse:collapse'>
			<tr class="no-print">
				<td style="margin:0 auto;" colspan="7">
					<button style="margin-left: 48%;" type="button" class="no-print" onclick="print()">Print</button>
				</td>
			</tr>
			<tr style='height:27.0pt'>
				<td width=750 colspan=7 style='width:562.5pt;padding:0in 5.4pt 0in 5.4pt; height:27.0pt'>
					<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><b>
						<span style='font-size:16.0pt'>BILL SLIP</span></b>
					</p>
				</td>
				<td style='height:27.0pt;border:none' width=0 height=36></td>
			</tr>
			<tr style='height:30.75pt'>
				<td width=174 style='width:130.5pt;border:solid 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
					<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
						<span style='font-size:12.0pt'>Seller Name : <?php
						foreach ($result['item_list'] as $value) {
							echo $value['seller_info']['name'];	
						}
						?></span>
					</p>
				</td>
				<td width=326 nowrap colspan=3 style='width:244.45pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
					<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><u><span style='font-size:12.0pt'>Shop Name :<?php
					foreach ($result['item_list'] as $value) {
						echo $value['seller_info']['user_address'];	
					}
					?>
				</span></u></b></p>
			</td>
			<td width=148 colspan=2 style='width:110.65pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
				<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
				text-align:center;line-height:normal'><span style='font-size:12.0pt'>seller Phone:</span></p>
			</td>
			<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt;
			border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
			<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
			normal'><b><u><span style='font-size:12.0pt'><?php
			foreach ($result['item_list'] as $value) {
				echo "0".$value['seller_info']['phone'];	
			}
			?></span></u></b></p>
		</td>
		<td style='height:30.75pt;border:none' width=0 height=41></td>
	</tr>

	<tr style='height:24.75pt'>
		<td width=750 colspan=7 style='width:562.5pt;border:solid 1.0pt;
		border-top:none;padding:0in 5.4pt 0in 5.4pt;height:24.75pt'>
		<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
		text-align:center;line-height:normal'><span style='font-size:12.0pt'>Order List</span>
		<span style='font-size:12.0pt'>&amp;Order Date:<?php echo ($result['create_at']) ?></span></p>
	</td>
	<td style='height:24.75pt;border:none' width=0 height=33></td>
</tr>

<tr style='height:15.75pt'>
	<td width=402 colspan=3 style='width:301.5pt;border-top:none;border-left:
	solid 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
	padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
	<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
	text-align:center;line-height:normal'><span style='font-size:12.0pt'>Item</span></p>
</td>
<td width=98 style='width:73.45pt;border:none;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:12.0pt'>Qty.</span></p>
</td>
<td width=71 nowrap style='width:53.1pt;padding:0in 5.4pt 0in 5.4pt;
height:15.75pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'>Unit</p>
</td>
<td width=77 style='width:57.55pt;border-top:none;border-left:solid 1.0pt;
border-bottom:none;border-right:solid 1.0pt;padding:0in 5.4pt 0in 5.4pt;
height:15.75pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'>Rate</p>
</td>
<td width=103 nowrap style='width:76.9pt;border:none;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:12.0pt'>Amount</span></p>
</td>
<td style='height:15.75pt;border:none' width=0 height=21></td>
</tr>



<?php 

foreach($result['item_list'] as $item) {
	?>	


	<tr style='height:15.75pt'>
		<td width=402 colspan=3 style='width:301.5pt;border:solid 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
			<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
				<span style='font-size:12.0pt'><?php echo $item['product']['product_name'];?></span>
			</p>
		</td>
		<td width=98 style='width:73.45pt;border:solid 1.0pt;border-left: none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
			<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;text-align:right;line-height:normal'>
				<span style='font-size:12.0pt'><?php echo $item['item_quantity'];?></span>
			</p>
		</td>
		<td width=71 nowrap style='width:53.1pt;border:solid 1.0pt;	border-left:none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
			<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
			normal'><?php echo $item['product']['product_unit_name'];?></p>
		</td>
		<td width=77 style='width:57.55pt;border:solid 1.0pt;border-left: none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
			<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
			text-align:right;line-height:normal'><?php echo $item['product']['product_cost'];?></p>
		</td>
		<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt; border-left:none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
			<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt; text-align:right;line-height:normal'><span style='font-size:12.0pt'><?php echo $item['product']['product_cost']*$item['item_quantity'];?></span></p>
		</td>
		<td style='height:15.75pt;border:none' width=0 height=21></td>
	</tr>

<?php } ?>

<tr style='height:30.75pt'>
	<td width=174 style='width:130.5pt;border:solid 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
			<span style='font-size:12.0pt'>Buyer Name :<?php echo $result['user']['name']  ?></span>
		</p>
	</td>
	<td width=326 nowrap colspan=3 style='width:244.45pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><u><span style='font-size:12.0pt'>Buyer Phone : <?php echo "0".$result['user_phone_no']  ?></span></u></b></p>
	</td>
	<td width=148 colspan=2 style='width:110.65pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
		text-align:center;line-height:normal'><span style='font-size:12.0pt'>Buyer Address :</span></p>
	</td>
	<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt;
	border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
	<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
	normal'><b><u><span style='font-size:12.0pt'><?php echo $result['user_address']?></span></u></b></p>
</td>
<td style='height:30.75pt;border:none' width=0 height=41></td>
</tr>
<tr style='height:24.0pt'>
	<td width=174 style='width:130.5pt;border:solid 1.0pt;border-top:
	none;padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
	<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
	text-align:center;line-height:normal'><span style='font-size:12.0pt'>Amount
	in Words</span></p>
</td>
<td width=397 colspan=4 style='width:297.55pt;border-top:none;border-left:
none;border-bottom:solid 1.0pt;border-right:solid black 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'><?php echo numberTowords($item['product']['product_cost']*$item['item_quantity']) ?>	 TAKA ONLY</td>
<td width=77 style='width:57.55pt;border-top:none;border-left:none;
border-bottom:solid 1.0pt;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt'>TOTAL BDT</span></b></p>
</td>
<td width=103 nowrap style='width:76.9pt;border-top:none;border-left:none;
border-bottom:solid 1.0pt;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'></td>
<td style='height:24.0pt;border:none' width=0 height=32></td>
</tr>

</table>


</div>

</body>
<pre>
	<?php

	print_r($result);

	?>
	
</pre>
</html>



<?php
function numberTowords($num)
{ 

	$ones = array(
		0 =>"ZERO", 
		1 => "ONE", 
		2 => "TWO", 
		3 => "THREE", 
		4 => "FOUR", 
		5 => "FIVE", 
		6 => "SIX", 
		7 => "SEVEN", 
		8 => "EIGHT", 
		9 => "NINE", 
		10 => "TEN", 
		11 => "ELEVEN", 
		12 => "TWELVE", 
		13 => "THIRTEEN", 
		14 => "FOURTEEN", 
		15 => "FIFTEEN", 
		16 => "SIXTEEN", 
		17 => "SEVENTEEN", 
		18 => "EIGHTEEN", 
		19 => "NINETEEN",
		"014" => "FOURTEEN" 
	); 
	$tens = array( 
		0 => "ZERO",
		1 => "TEN",
		2 => "TWENTY",
		3 => "THIRTY", 
		4 => "FORTY", 
		5 => "FIFTY", 
		6 => "SIXTY", 
		7 => "SEVENTY", 
		8 => "EIGHTY", 
		9 => "NINETY" 
	); 
	$hundreds = array( 
		"HUNDRED", 
		"THOUSAND", 
		"MILLION", 
		"BILLION", 
		"TRILLION", 
		"QUARDRILLION" 
	); /*limit t quadrillion */
	$num = number_format($num,2,".",","); 
	$num_arr = explode(".",$num); 
	$wholenum = $num_arr[0]; 
	$decnum = $num_arr[1]; 
	$whole_arr = array_reverse(explode(",",$wholenum)); 
	krsort($whole_arr,1); 
	$rettxt = ""; 
	foreach($whole_arr as $key => $i){

		while(substr($i,0,1)=="0")
			$i=substr($i,1,5);
		if($i < 20){ 
			/* echo "getting:".$i; */
			$rettxt .= $ones[$i]; 
		}elseif($i < 100){ 
			if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
			if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
		}else{ 
			if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
			if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
			if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
		} 
		if($key > 0){ 
			$rettxt .= " ".$hundreds[$key]." "; 
		}
	} 
	if($decnum > 0){ 
		$rettxt .= " and "; 
		if($decnum < 20){ 
			$rettxt .= $ones[$decnum]; 
		}elseif($decnum < 100){ 
			$rettxt .= $tens[substr($decnum,0,1)]; 
			$rettxt .= " ".$ones[substr($decnum,1,1)]; 
		} 
	} 
	return $rettxt; 
} 
extract($_POST);
if(isset($convert))
{
	echo "<p align='center' style='color:blue'>".numberTowords("$num")."</p>";
}
?>
