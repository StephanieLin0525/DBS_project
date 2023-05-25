<!DOCTYPE html>
<html>
    <head>
      <title> update member</title>
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

            $result = mysqli_query($link,"SELECT * FROM `member`");
            if (mysqli_num_rows($result) > 0) {
        ?>
                <br>
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;會員資料</h1>
                
                <center>
                    <table>
                      
	                  <tr>
	                	<th>Your Name&nbsp;&nbsp; </th>
	                	<th>phone&nbsp;&nbsp; </th>
	                	<th>payment method&nbsp;&nbsp; </th>
	                	<th>location&nbsp;&nbsp; </th>
	                	<th>ID&nbsp;&nbsp; </th>
	                  </tr>
	                		<?php
	                		$i=0;
	                		while($row = mysqli_fetch_array($result)) {
	                		?>
	                  <tr>
	                    <td><?php echo $row["Your_name"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["phone"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["payment_method"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["place"]; ?>&nbsp;&nbsp;</td>
	                	<td><?php echo $row["serial_num"]; ?>&nbsp;&nbsp;</td>
	                	<td><a href="up_process.php ? serial_num=<?php echo $row["serial_num"]; ?>"> &nbsp;&nbsp;Update </a></td>
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
    </body>
</html>



