<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
        <title> vegetable proceess</title>
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
       	 $product_name = $_POST['product_name'];
       	 $inventory = $_POST['inventory'];
       	 $price = $_POST['price'];
       	 $PlaceOfProduct = $_POST['PlaceOfProduct'];

       	 $sql = "INSERT INTO `vegetable`
       	         VALUES ( '$product_name','$inventory','$price','$PlaceOfProduct')";



           if (mysqli_query($link, $sql)) 
            {
               echo "New item created successfully !";
            } 
           else {
               echo "Error: " . $sql . " " . mysqli_error($link);
            }

            mysqli_close($link); 
       }

    ?>
    <br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;<a class='btn' href="vegetable.php" style="
               background: #f05f5c;
               color: white"> 上一頁 </a>
</body>    
</html>

   
