<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<?php
				$data = array(
					'name' => 'frm_',
					'id'   => 'frmLgn',
					'class'=>'form' 
				);
				echo form_open('itm/authenticate', $data);
				$data = array(
					'type' => 'text',
					'name' => 'lol',
					'id' => 'lol',
				);
				echo form_input($data);

				$data = array(
					'type' => 'password',
					'name' => 'pol',
					'id' => 'pol',
				);
				echo form_input($data);
				$data = array(
					'type' => 'submit',
					'name' => 'bol',
					'id' => 'bol',
					'value'=>'Authenticate'
				);
				echo form_input($data);

				echo form_close();
			?>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

