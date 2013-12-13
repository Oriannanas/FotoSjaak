<?php
        $userrole = array('root', 'photographer');
        include('security.php');
		include("connect_db.php");
                $query = "SELECT *
                                  FROM `users`
                                  WHERE `id` = '".$_SESSION['id']."'";
				$result = mysql_query($query, $db);
?>
<h3>Welkom op uw photographerpagina</h3>
uw id is: <?php echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>

<table class = 'simple'>
<caption>Uw Gegevens</caption>
<tr>
	<td>Naam:</td>
	<td> <?php $record = mysql_fetch_array($result);
                echo  $record['firstname']; echo " " ;
				echo  $record['infix']; echo " " ;
				echo  $record['surname'];?>
	</td>
</tr>
<tr>
	<td>adres:</td>
	<td> <?php 	echo  $record['street']; echo " " ;
				echo  $record['number'];  ?><br>
		<?php	echo  $record['zipcode'];echo " " ;
				echo  $record['city']; echo " " ;?>
	</td>
</tr>
<tr>
	<td>Geboortedatum:</td>			
	<td><?php echo $record['birthday'];?></td>			
</tr>
<tr>
	<td>Geslacht:</td>			
	<td><?php echo $record['gender'];?></td>			
</tr>
<tr>
	<td>Huwelijke staat:</td>			
	<td><?php echo $record['maritalstate'];?></td>			
</tr>
<tr>
	<td>E-mail adres:</td>			
	<td><?php echo $record['email'];?></td>			
</tr>
<tr>
	<td>Genre:</td>			
	<td><?php echo $record['genre'];?></td>			
</tr>
<tr>
	<td>Game:</td>			
	<td><?php echo $record['game'];?></td>			
</tr>
			
</table>