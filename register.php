<?php
	include("connect_db.php");
	$sql = "INSERT INTO `users` (`id` ,
								 `firstname` ,
								 `infix` ,
								 `surname`,
								 `street`,
								 `house_number`,
								 `city`,
								 `zip_code`,
								 `birthday`,
								 `sex`,	
								 `email`,
								 `password`,
								 `game_type`,
								 `favo_game`,
								 `userrole`)
						 VALUES (NULL ,
								 '".$_POST['firstname']."',
								 '".$_POST['infix']."',
								 '".$_POST['surname']."',
								 '".$_POST['street']."',
								 '".$_POST['number']."',
								 '".$_POST['city']."',							 
								 '".$_POST['zipcode']."',
								 '".$_POST['birthday']."',
								 '".$_POST['gender']."',
								 '".$_POST['email']."',
								 '".$_POST['password']."',
								 '".$_POST['genre']."',
								 '".$_POST['game']."',
								 'customer')";
	mysql_query($sql, $db) or die("De query is niet goed ontvangen");
	echo "uw gegevens zijn opgeslagen";
	header("refresh:4; url=index.php?content=homepage");	
?>