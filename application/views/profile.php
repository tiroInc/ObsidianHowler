<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="clear"></div>
				<div class="prefix_1">
				<div class="grid_6">
				<h3>YOUR PROFILE</h3>
				</div>
					<table class="table">
							<tr>
								<th>First Name</th>
								<th>Surname</th>
								<th>Email</th>
								<th>Phone</th>
							</tr>
						<?php
						if($fetch_data->num_rows() > 0)
						{
							foreach($fetch_data->result() as $row)
							{
						?>
							<tr>
								<td><?php echo $row->FirstName; ?></td>
								<td><?php echo $row->Surname; ?></td>
								<td><?php echo $row->Email; ?></td>
								<td><?php echo $row->Phone; ?></td>
							</tr>						
						<?php
							}
						}
						else
						{
						?>
							<tr>
								<td colspan="3">No Data Found</td>
							</tr>
						<?php
						}
						?>
					</table>
				<div class="grid_6">
				<h3>YOUR FLIGHTS</h3>
				</div>
				<table class="table">
							<tr>
								<th>Origin</th>
								<th>Destination</th>
								<th>Departure</th>
								<th>Return</th>
							</tr>
						<?php
						if($flight_data->num_rows() > 0)
						{
							foreach($flight_data->result() as $row)
							{
						?>
							<tr>
								<td><?php echo $row->Origin; ?></td>
								<td><?php echo $row->Destination; ?></td>
								<td><?php echo $row->D_Date; ?></td>
								<td><?php echo $row->R_Date; ?></td>
							</tr>						
						<?php
							}
						}
						else
						{
						?>
							<tr>
								<td colspan="3">No Flights To Display.</td>
							</tr>
						<?php
						}
						?>
					</table>
			</div>
			</div>
		</div>

<!--==============================footer=================================-->


<!--==============================Content=================================-->
<!--
		<div class="content">
			<div class="container_12">
				<div class="clear"></div>
				<div class="prefix_3">
				<div class="grid_6">
					<h3>YOUR PROFILE</h3>
					<form id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Name" placeHolder="First Name" type="text">
							</div>
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Surname" placeHolder="Surname:" type="text">
							</div>
							<div class="tmInput mr0">
								<input name="Phone" placeHolder="Phone:" type="text">
							</div>
						</div>
						<div class="clear"></div>
						<div class="fl5">
						<div class="tmInput">
								<input name="flight" placeHolder="No flights." type="text">
							</div>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>-->
<!--==============================footer=================================-->