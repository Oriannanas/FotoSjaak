<?php
        $userrole = array('root', 'admin');
        include('security.php');
        include("connect_db.php");
		$query = "SELECT *
                          FROM `users`";
        $result = mysql_query($query, $db);
?>
<div id='klantgegevens'>
<table class='simple'>
<br><br>
<caption><h1>Klantgegevens:</h1></caption> 
<tr>
                 <td>
                        id:
                </td>
				<td>
                        Naam:
                </td>
				<td>
						Tussenvoegsel:
				</td>
				<td>
                        Achternaam:
                </td>    
                <td>
                        Straat + nummer:
                </td>
				 <td>
                        Stad:
                </td>
				 <td>
                        Postcode:
                </td>
				 <td>
                        Geboortedatum:
                </td>
				 <td>
                        Geslacht:
                </td>
				 <td>
                        Huwelijke staat:
                </td>
				 <td>
                        Email:
                </td>
				 <td>
                        Wachtwoord:
                </td>
				 <td>
                        Genre:
                </td>
				 <td>
                        Game:
                </td>
				 <td>
                        userrole:
                </td>
        </tr>
<?php
while ( $record = mysql_fetch_array($result))
{
        echo "<tr>
					<td>";
                        echo $record['id'];  
                        echo "
                     </td> 
					<td>";
                        echo $record['firstname'];  
                        echo "
                     </td>  
					 <td>";
                        echo $record['infix'];    
                        echo "
					</td> 
                     <td>";
                        echo $record['surname'];    
                        echo "
					</td>     
					<td>";
                        echo $record['street']; echo $record['number'];    
                        echo "
					</td>    
					<td>";
                        echo $record['city'];    
                        echo "
					</td> 
					<td>";
                        echo $record['zipcode'];    
                        echo "
					</td>    
					<td>";
                        echo $record['birthday'];    
                        echo "
					</td>    
					<td>";
                        echo $record['gender'];    
                        echo "
					</td>   
					<td>";
                        echo $record['maritalstate'];    
                        echo "
					</td>    
					<td>";
                        echo $record['email'];    
                        echo "
					</td>    
					<td>";
                        echo $record['password'];    
                        echo "
					</td>
					<td>";
                        echo $record['genre'];    
                        echo "
					</td> 
					<td>";
                        echo $record['game'];    
                        echo "
					</td>   
					<td>";
                        echo $record['userrole'];    
                        echo "
					</td>    					
            </tr>";
}
?>
<br><br>
</table>
</div>