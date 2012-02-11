
		<form method="post" action="<?php echo Kohana::$base_url.Route::get('signup')->uri() ?>">
			<table class="sign_table">
				<tr>
					<td><label for="username"><?php echo __('Username')?>：</label></td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td><label for="password"><?php echo __('Password')?>：</label></td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td><label for="mail"><?php echo __('Mail')?>：</label></td>
					<td><input type="text" name="mail" id="mail"></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><button type="submit"><?php echo __('Sign up')?></button></td>
				</tr>
			</table>
		</form>
