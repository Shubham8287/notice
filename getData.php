<?php 
require("php/connect.php");

$cmd="SELECT * FROM uploads ";

		while(true){$result= mysqli_query($connection,$cmd);
		while($row=mysqli_fetch_array($result))	
		{
        
        echo ($row['name']);
        sleep(2);
    }


?>