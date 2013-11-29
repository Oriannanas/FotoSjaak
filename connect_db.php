<?php
        //Maak contact met de mysql-server.
        $db = mysql_connect("localhost", "root", "") 
                        or die("Er is geen contact met de mysql-server");
        
        
        mysql_select_db("am1b_fotosjaak", $db) or die("Het database is niet gevonden");
?>
 
