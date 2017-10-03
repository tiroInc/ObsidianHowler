<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="prefix_3">
				<div class="grid_6">
					<h3>REGISTER NOW</h3>
						<?php $data = array('id'=>'bookingForm');
						echo form_open('Login/create_user', $data); ?>
						<div class="fl1">
							<div class="tmInput">
								<?php $data = array('name'=>'first_name', 'id'=>'first_name', 'placeHolder'=>'First Name');
								echo form_input($data);?>
							</div>
							<div class="tmInput">
								<?php $data = array('name'=>'email', 'id'=>'email', 'placeHolder'=>'Email');
								echo form_input($data);?>
							</div>
							<div class="tmInput">
								<?php $data = array('name'=>'username', 'id'=>'username', 'placeHolder'=>'Username');
								echo form_input($data);?>
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<?php $data = array('name'=>'surname', 'id'=>'surname', 'placeHolder'=>'Surname');
								echo form_input($data);?>
							</div>
							<div class="tmInput mr0">
								<?php $data = array('name'=>'phone', 'id'=>'phone', 'placeHolder'=>'Phone');
								echo form_input($data);?>
							</div>
							<div class="tmInput">
								<?php $data = array('name'=>'password', 'id'=>'password', 'placeHolder'=>'Password');
								echo form_input($data);?>
							</div>
						</div>
						<div class="clear"></div>
						
						<?php $data = array('name'=>'submit','value'=>'Submit','class'=>'btn');
						echo form_submit($data); ?>
					<?php echo form_close(); ?>
				</div>
			</div>
			</div>
		</div>
<!--==============================footer=================================-->