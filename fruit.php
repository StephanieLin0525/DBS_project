<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
        <title> fruit information</title>
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&amp;display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/68f8681dba.js" crossorigin="anonymous"></script>
    </head>
    <body>
	
	<center>
	<br> <br>
		<h1> 新增水果 </h1> <br> 
		<form method="POST" action="fru_p.php">
			
			水果品名:<br>
        	<input type="text" name="product_name">
			<br><br>
        	目前庫存量:<br>
        	<input type="text" name="inventory">
        	<br><br>
        	價格:<br>
        	<input type="text" name="price"> 
            <br><br>
        	生產地:<br>
        	<input type="text" name="PlaceOfProduct">
            
        	<br><br><br>
        	<input type="submit" name="save" value="submit">
        </form>
		<br> <br> <br> <br>
		<?php
            $link = @mysqli_connect( 
                'localhost',  // MySQL主機名稱 
                'root',       // 使用者名稱 
                'E84070015',  // 密碼 
                'food_bus');  // 預設使用的資料庫名稱 

            $result = mysqli_query($link,"SELECT * FROM `fruit`");
            if (mysqli_num_rows($result) > 0) {
        ?>
                <br>
               <h1>目前水果資訊</h1>
			   <br> 
                <center>
                    <table>
                      
	                  <tr>
	                	<th>品名&nbsp;&nbsp;</th>
	                	<th>目前庫存量&nbsp;&nbsp;</th>
	                	<th>價格&nbsp;&nbsp;</th>
	                	<th>生產地&nbsp;&nbsp;</th>
	                  </tr>
	                		<?php
	                		$i=0;
	                		while($row = mysqli_fetch_array($result)) {
	                		?>
	                  <tr>
	                    <td><?php echo $row["product_name"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["inventory"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["price"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["PlaceOfProduct"]; ?>&nbsp;&nbsp;</td>

                        <td><a href="del_fru_p.php?product_name=<?php echo $row["product_name"]; ?>">Delete</a></td>

                      </tr>

	                  <?php
	                $i++;
			}
	                  ?>
                    </table>

                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a class='btn' href="DBS.php" style="
                                                                                background: #f05f5c;
                                                                                color: white"> Home </a>
                </center>        
                    <?php
            }
            else
            {
                 echo "No result found";
            }
        ?>
 <br> <br> <br> <br> <br> <br>

	</center>	



  </body>
</html>