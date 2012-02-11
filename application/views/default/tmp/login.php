		<form method="post" action="<?php echo Kohana::$base_url.Route::get('login')->uri() ?>">
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
					<td><a href="<?php echo Kohana::$base_url.Route::get('signup')->uri() ?>"><?php echo __('Sign up')?></a></td>
					<td align="right"><button type="submit"><?php echo __('Login')?></button></td>
				</tr>
			</table>
		</form>
