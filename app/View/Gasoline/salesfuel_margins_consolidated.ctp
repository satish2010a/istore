<div class="vrubyrepttanks reports">
		<?php echo $this->element('stationinfo'); ?>
		<table border=0 cellpadding="1" cellspacing="1" class="grid">
			<tr>
				<td align = 'center' class="h_1" width="150">&nbsp;</td>
				<td align = 'center' class="h_1" width="180" colSpan="3">Gasoline</td>


				<td align = 'center' class="h_1" width="180" colSpan="3">Diesel</td>

				<td align = 'center' class="h_1" width="60">Total</td>

			</tr>
			<tr align="center">
				<td class="h_2">Station</td>
				<td width="60" class="h_2">Gallons</td>
				<td width="60" class="h_2">Pool Margin</td>
				<td width="60" class="h_2">Profit ($)</td>


				<td width="60" class="h_2">Gallons</td>
				<td width="60" class="h_2">Pool Margin</td>
				<td width="60" class="h_2">Profit ($)</td>

				<td width="60" class="h_2">Amount</td>
			</tr>

		<TR class="white" align="right">
			<TD align="left" class="rep_row"><a href="javascript:void(0);" onclick="openByDateReport('2888')"><b><?php echo $this->Session->read('Station.Station.name'); ?></b></a></TD>

			<TD class="rep_row" align="right"></TD>
			<TD class="rep_row" align="right"></TD>
			<TD class="rep_row" align="right"></TD>


			<TD class="rep_row" align="right"></TD>
			<TD class="rep_row" align="right"></TD>
			<TD class="rep_row" align="right"></TD>

			<TD class="rep_row" align="right"></TD>


		</TR>


	<tr class="t_text_1" align="right">
		<TD align="left" class="rep_row">TOTAL</TD>

		<TD class="rep_row" align="right"><b></b></TD>
		<TD class="rep_row" align="right"><b></b></TD>
		<TD class="rep_row" align="right"><b></b></TD>


		<TD class="rep_row" align="right"><b></b></TD>
		<TD class="rep_row" align="right"><b></b></TD>
		<TD class="rep_row" align="right"><b></b></TD>
		<TD class="rep_row" align="right"><b></b></TD>

	</tr>

	</table>
	<br>

</div>       
  