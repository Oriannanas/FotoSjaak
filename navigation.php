<?php
        if (isset($_GET['content']))
        {
                include($_GET['content'].".php");
        }
        else
        {
				if (isset($_SESSION['userrole']))
				{
					include("".$_SESSION['userrole']."_homepage.php");
				}
				else
				{
					include("homepage.php");
				}
        }
?>