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
						<span style='font-size:12.0pt'>Vendor Name :<?php echo " shop name"  ?></span>
					</p>
				</td>
				<td width=326 nowrap colspan=3 style='width:244.45pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
					<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><u><span style='font-size:12.0pt'>Seller Name : <?php echo " User name"  ?></span></u></b></p>
				</td>
				<td width=148 colspan=2 style='width:110.65pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
					<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
					text-align:center;line-height:normal'><span style='font-size:12.0pt'>seller Phone</span></p>
				</td>
				<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt;
				border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
				<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
				normal'><b><u><span style='font-size:12.0pt'><?php echo "017"  ?></span></u></b></p>
			</td>
			<td style='height:30.75pt;border:none' width=0 height=41></td>
		</tr>

		<tr style='height:24.75pt'>
			<td width=750 colspan=7 style='width:562.5pt;border:solid 1.0pt;
			border-top:none;padding:0in 5.4pt 0in 5.4pt;height:24.75pt'>
			<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
			text-align:center;line-height:normal'><span style='font-size:12.0pt'>Order List</span>
			<span style='font-size:12.0pt'>&amp;Order Date:<? echo"set date" ?></span></p>
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



<?php for ($x = 0; $x <= 20; $x++) { ?>

<tr style='height:15.75pt'>
	<td width=402 colspan=3 style='width:301.5pt;border:solid 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
		<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'>
			<span style='font-size:12.0pt'><? echo "item Name"?></span>
		</p>
	</td>
	<td width=98 style='width:73.45pt;border:solid 1.0pt;border-left: none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
		<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;text-align:right;line-height:normal'>
			<span style='font-size:12.0pt'><? echo "item Qty"?></span>
		</p>
	</td>
	<td width=71 nowrap style='width:53.1pt;border:solid 1.0pt;	border-left:none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
		<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
		normal'><? echo "item Unit"?></p>
	</td>
	<td width=77 style='width:57.55pt;border:solid 1.0pt;border-left:
	none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
	<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
	text-align:right;line-height:normal'><? echo "item Rate"?></p>
</td>
<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt;height:15.75pt'>
<p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:right;line-height:normal'><span style='font-size:12.0pt'><? echo "item Total Amount"?></span></p>
</td>
<td style='height:15.75pt;border:none' width=0 height=21></td>
</tr>

<?php } ?>

<tr style='height:30.75pt'>
	<td width=174 style='width:130.5pt;border:solid 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
			<span style='font-size:12.0pt'>Buyer Name :<?php echo " jadu"  ?></span>
		</p>
	</td>
	<td width=326 nowrap colspan=3 style='width:244.45pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><b><u><span style='font-size:12.0pt'>Buyer Phone : <?php echo " 017"  ?></span></u></b></p>
	</td>
	<td width=148 colspan=2 style='width:110.65pt;border:solid 1.0pt;border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
		<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
		text-align:center;line-height:normal'><span style='font-size:12.0pt'>Buyer Address :</span></p>
	</td>
	<td width=103 nowrap style='width:76.9pt;border:solid 1.0pt;
	border-left:none;padding:0in 5.4pt 0in 5.4pt;height:30.75pt'>
	<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
	normal'><b><u><span style='font-size:12.0pt'><?php echo " Dhaka"  ?></span></u></b></p>
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
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'><?php echo "one hundred" ?> Taka Only</td>
<td width=77 style='width:57.55pt;border-top:none;border-left:none;
border-bottom:solid 1.0pt;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'>
<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b><span style='font-size:14.0pt'>BDT</span></b></p>
</td>
<td width=103 nowrap style='width:76.9pt;border-top:none;border-left:none;
border-bottom:solid 1.0pt;border-right:solid 1.0pt;
padding:0in 5.4pt 0in 5.4pt;height:24.0pt'><?php echo "100" ?></td>
<td style='height:24.0pt;border:none' width=0 height=32></td>
</tr>

</table>


</div>

</body>

</html>
