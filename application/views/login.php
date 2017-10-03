<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="prefix_4">
				<div class="grid_6">
					<h3>||[ Login ]||</h3>
						<?php $data = array('id'=>'bookingForm');
						echo form_open('Login/validate_credentials', $data); ?>
						<div class="fl1">
							<div class="tmInput">
								<?php $data = array('name'=>'username', 'id'=>'username', 'placeHolder'=>'Username');
								echo form_input($data);?>
							</div>
							<div class="tmInput">
								<?php $data = array('type'=>'password', 'name'=>'password', 'id'=>'password', 'placeHolder'=>'Password');
								echo form_input($data);?>
							</div>
								<?php $data = array('name'=>'login','value'=>'Login','class'=>'btn');
								echo form_submit($data); ?>
								<div class="clear"></div>
								<?php echo form_close(); ?>
								<?php $data = array('id'=>'bookingForm');
							echo form_open('Login/register', $data); ?>
							<div class="fl8">
							<?php $data = array('name'=>'ca','value'=>'Create Account','class'=>'btn');
							echo form_submit($data); ?>
							</div>
						</div>
							
				</div>
			</div>
			</div>
		</div>


<!--==============================Content=================================-->
<!--		<div class="content">
			<div class="container_12">
				<div class="clear"></div>
				<div class="prefix_3">
				<div class="grid_6">
					<h6>Login</h6>
					<form id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Username" placeHolder="Username" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Password" placeHolder="Password:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="clear"></div>
						<a href="#" class="btn" data-type="submit">Login</a>
					</form>
				</div>
			</div>
			</div>
		</div>-->
<!--==============================footer=================================-->
		
