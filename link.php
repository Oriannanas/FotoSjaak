<ul>
        <!--Plaats hier de links die iedereen mag gebruiken en zien-->
        
                
      
        <?php
                if (isset($_SESSION['userrole']))
                {
				echo "
                                        <a href='./index.php?content=".
                                                        $_SESSION["userrole"]."_homepage'>Homepage</a> | 
                                  
                                        
                                  ";
                        switch ($_SESSION['userrole'])
                        {
                                case 'customer':
                                        echo "
                                                        <a href='./index.php?content=download'>Download</a> | 
                                                  
                                                  
                                                        <a href='./index.php?content=faqpage'>FAQ game</a> | 
                                                  ";
                                break;
                                case 'root':
                                       echo "
                                                        <a href='./index.php?content=download'>Download</a> | 
														<a href='./index.php?content=klantgegevens'>Klantgegevens</a> | 
                                                 
                                                        <a href='./index.php?content=faqpage'>FAQ game</a> | 
                                                  ";
                                break;
                                case 'admin':
                                        echo "
                                                        <a href='./index.php?content=download'>Download</a> | 
														<a href='./index.php?content=klantgegevens'>Klantgegevens</a> | 
                                                  
                                                        <a href='./index.php?content=faqpage'>FAQ game</a> | 
                                                  ";
                                break;
                                default:
                                break;
                        }  
echo "						
                        <a href='./index.php?content=logout.php'>Uitloggen</a>
						";
                }
                else
                {
                        echo "
										<a href='./index.php?content=homepage'>Homepage</a> | 
										
                                        <a href='./index.php?content=register_form'>Registreren</a> | 
                                  
                                        <a href='./index.php?content=login'>Log in</a> | 
                                        
										
										
	
		<a href='./index.php?content=class/loginClass-test'>test login-class</a>
	
                                  ";
                }
        ?>
</ul>