<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8" />
        <title>your order</title>

       <title> vegetable information</title>
		 <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&amp;display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="css/style.css">

       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/68f8681dba.js" crossorigin="anonymous"></script>

   </head>
   <body>
   
   <?php

      $link = @mysqli_connect( 
          'localhost',  // MySQL主機名稱 
          'root',       // 使用者名稱 
          'E84070015',  // 密碼 
          'food_bus');  // 預設使用的資料庫名稱

          if ( !$link ) {
            echo "MySQL資料庫連接錯誤!<br/>";
            exit();
         }
         else {
            echo "MySQL資料庫test連接成功!<br/>";
         }
         
      $result_v = mysqli_query($link,"SELECT * FROM `vegetable`");
      $result_f = mysqli_query($link,"SELECT * FROM `fruit`");

      if ((mysqli_num_rows($result_v) > 0) && (mysqli_num_rows($result_f) > 0)) {
   ?>
          <center>
          <h2>菜單</h2><br>
         <table>
  
              <tr>
                <th>產品名稱&nbsp;&nbsp;</th>
                <th>目前庫存量&nbsp;&nbsp;</th>
                <th>價格&nbsp;&nbsp;</th>
                <th>生產地&nbsp;&nbsp;</th>
             
              </tr>
            <?php
            $i=0;
            $j=0;

            while($row = mysqli_fetch_array($result_v)) {
            ?>
            <tr>
                <td><?php echo $row["product_name"]; ?>&nbsp;&nbsp;</td>
                <td><?php echo $row["inventory"]; ?>&nbsp;&nbsp;</td>
                <td><?php echo $row["price"]; ?>&nbsp;&nbsp;</td>
                <td><?php echo $row["PlaceOfProduct"]; ?>&nbsp;&nbsp;</td>
                <td><form method="POST" action="order_process.php">
                <input type="checkbox" name="product_name">
        	      <input type="submit" name="save" value="submit">
                </form></td>
            </tr>
            <?php
            $i++;
            }
            
            while($row = mysqli_fetch_array($result_f)) {
               ?>
               <tr>
                   <td><?php echo $row["product_name"]; ?>&nbsp;&nbsp;</td>
                   <td><?php echo $row["inventory"]; ?>&nbsp;&nbsp;</td>
                   <td><?php echo $row["price"]; ?>&nbsp;&nbsp;</td>
                   <td><?php echo $row["PlaceOfProduct"]; ?>&nbsp;&nbsp;</td>
                   <td><form method="POST" action="order_process.php">
                <input type="checkbox" name="product_name">
        	      <input type="submit" name="save" value="submit">
                </form></td>

                  
               </tr>
               <?php
               $j++;
               }

            ?>
         </table>
         </center>

      <?php
      }
      else{
            echo "No result found";
      }

      mysqli_close($link); 
      ?>
            
               
               
            
      	
     
   </body>
</html>