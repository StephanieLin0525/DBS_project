<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
        <title> insert member</title>
    </head>
    <body>
	
    <?php

      $link = @mysqli_connect( 
       'localhost',  // MySQL主機名稱 
       'root',       // 使用者名稱 
       'E84070015',  // 密碼 
       'food_bus');  // 預設使用的資料庫名稱 
      

       if(isset($_POST['save']))
       {	 
       	 $Your_name = $_POST['Your_name'];
       	 $phone = $_POST['phone'];
       	 $payment_method = $_POST['payment_method'];
       	 $place = $_POST['place'];
          $serial_num = $_POST['serial_num'];

       	 $sql = "INSERT INTO `member`
       	         VALUES ( '$Your_name','$phone','$payment_method','$place','$serial_num')";



           if (mysqli_query($link, $sql)) 
            {
               echo "New member created successfully !";
            } 
           else {
               echo "Error: " . $sql . " " . mysqli_error($link);
            }

            mysqli_close($link); 
       }

    ?>
    <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<a class='btn' href="DBS.php" style="
               background: #f05f5c;
               color: white"> Home </a>
</body>    
</html>

   
