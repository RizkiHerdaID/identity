
	<div>
		<form method="post" action="<?php echo base_url().'f/otentikasi';?>">
			<input type="text" name="nim" required/> <br>
			<input type="password" name="password" required/> <br>
			<label>Captcha</label><br>
			<div style="width:100px;">
				<img src="<?php echo base_url().'assets/captcha/'.$captcha['filename'];?>"><br>
			</div>
			<input type="submit"/>
		</form>
	</div>