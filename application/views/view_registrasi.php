	<form method="post" action="<?php echo base_url().'f/registrasi';?>">
		nim :<br>
		<input type="text" name="nim"><br>
		password :<br>
		<input type="password" name="password"><br>
		ketik ulang password :<br>
		<input type="password" name="re-password"><br>
		email : <br>
		<input type="email" name="email"><br>
		captcha :<br>
		<div style="width:200px;">
				<img src="<?php echo base_url().'assets/captcha/'.$captcha['filename'];?>" width="100%"><br>
		</div>
		<input type="text" name="captcha"><br>
		<input type="submit">
	</form>