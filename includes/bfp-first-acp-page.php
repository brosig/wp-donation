<div class="wrap">
	<h1>Hello!</h1>
	<p>This is my plugin's first page</p>
	<p>Here is where the form would go if I actually had options.</p>

	<form>
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
						<input name="ps-api-token" type="text" id="blogname" value="1F2C601F7F3E4965B9E1B4A89BF5E6F6" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-email">Email da API do PagSeguro</label></th>
					<td>
						<input name="ps-api-email" type="text" id="blogname" value="brosig@gmail.com" class="regular-text">
					</td>
				</tr>
			</tbody>	
			<tbody id="ps-api-modo-app" style="display:none;">
				<tr>
					<th scope="row"><label for="ps-api-app-id">App ID</label></th>
					<td>
						<input name="ps-api-app-id" type="text" id="blogname" value="1F2C601F7F3E4965B9E1B4A89BF5E6F6" class="regular-text">
					</td>	
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-app-key">App Key</label></th>
					<td>
						<input name="ps-api-app-key" type="text" id="blogname" value="1F2C601F7F3E4965B9E1B4A89BF5E6F6" class="regular-text">
					</td>	
				</tr>
				<tr>
					<th scope="row"><label for="ps-api-app-authorization">App Authorization</label></th>
					<td>
						<input name="ps-api-app-authorization" type="text" id="blogname" value="1F2C601F7F3E4965B9E1B4A89BF5E6F6" class="regular-text">
					</td>	
				</tr>
			</tbody>
			
		</table>
	</form>
</div>