
<table class='simple'>
		<form action="./index.php?content=register" method="post">
		<br><br>
				<caption>Registratiepagina</caption> 
				
					<tr>
					<td>voornaam:	</td>	 
						<td><input type="text" name="firstname" required /></td>
					</tr>
					<tr>
					<td>tussenvoegsel: </td>
						<td><input type="text" name="infix" /> </td>
						</tr>
					<tr>
					<td>achternaam: </td>
						<td><input type="text" name="surname" required /> </td>
						</tr>
					<tr>
					<td>Adres: </td>
						<td><input 	type="text" name="street" required />
						<input 	type="number" name="number" min="1" max="10000" required /> </td>
						</tr>
					<tr>
					<td>Woonplaats: </td>
						<td><input type="text" name="city" required /> </td>
						</tr>
					<tr>
					<td>Post code:</td>
				
						<td><input 	type="text"
								maxlength="6"
								name="zipcode" required /> </td>
								</tr>
					<tr>
					<td>Geboorte dag: </td>
						<td><input type="date" name="birthday" required  /> </td>
						</tr>
					<tr>
					<td>Geslacht: </td>
				
						<td><input type="radio" name="gender" value = "male" required/> Man 
						<input type="radio" name="gender" value = "female" required/> Vrouw		</td>			
					</tr>
					<tr>
					<td>Burgerlijke staat: </td>
			
						<td><input type="radio" name="maritalstate" value='married' required/>	Getrouwd 
						<input type="radio" name="maritalstate" value='not married' required/> 	Niet getrouwd </td>
					</tr>
					<tr>
					<td>e-mail adres: </td>
				
						<td><input type="email" name="email" required /> </td>
						</tr>
					<tr>
					<td>Password:  </td>
						<td><input type="password" name="password" required /> </td>
						</tr>
					<tr>
					<td>favoriete game genre:  </td>
						<td><select name="genre" required >
							<option value="geen"></option>
							<option value="fps">fps</option>
							<option value="strategy">strategy</option>
							<option value="adventure">adventure</option>
							<option value="RPG">RPG</option>
							<option value="horror">horro</option>
							<option value="retro">retro</option>
							<option value="sport">sport</option>
							<option value="puzzle">puzzle</option>
							<option value="party">party</option>
							<option value="casual">casual</option>
							<option value="educational">educational</option></td>
							</select>												
					</tr>
					<tr>
					
					<td>favoriete game: </td>
				
						<td><input type="text" name="game" required /> </td>
						</tr>
					<tr>
					
						<td><input type="submit" name="submit" value="verstuur" /> </td>
						</tr>
					<tr>
					
	</table>
	<br><br>
</form>