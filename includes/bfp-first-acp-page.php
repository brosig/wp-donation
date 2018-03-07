<div class="wrap">
	<h1>Hello!</h1>
	<p>This is my plugin's first page</p>
	<p>Here is where the form would go if I actually had options.</p>

	<form method="post" action="options.php">
		<?php settings_fields( 'wp-donation-settings' ); ?>
    	<?php do_settings_sections( 'wp-donation-settings' ); ?>
		<h2>PagSeguro</h2>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="ps-api-modo-autenticacao">Modo de autenticação do PagSeguro</label></th>
					<td>
						<select name="ps-api-modo-autenticacao" id="ps-api-modo-autenticacao">
							<option value="ps-api-modo-vendedor">Autenticação para vendedores</option>
							<option value="ps-api-modo-app">Autenticação para Modelo de Aplicações</option>
						</select>
					</td>
				</tr>
			</tbody>
			<tbody id="ps-api-modo-vendedor">
				<tr>
					<th scope="row"><label for="ps-api-token">Token da API do PagSeguro</label></th>
					<td>
						<input name="ps-api-token" type="text" value="" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-email">Email da API do PagSeguro</label></th>
					<td>
						<input name="ps-api-email" type="text" value="" class="regular-text">
					</td>
				</tr>
			</tbody>	
			<tbody id="ps-api-modo-app" style="display:none;">
				<tr>
					<th scope="row"><label for="ps-api-app-id">App ID</label></th>
					<td>
						<input name="ps-api-app-id" type="text" value="" class="regular-text">
					</td>	
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-app-key">App Key</label></th>
					<td>
						<input name="ps-api-app-key" type="text" value="" class="regular-text">
					</td>	
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-app-authorization">App Authorization</label></th>
					<td>
						<input name="ps-api-app-authorization" type="text" value="" class="regular-text">
					</td>	
				</tr>
			</tbody>
			
		</table>

		<?php submit_button(); ?>
	</form>
</div>