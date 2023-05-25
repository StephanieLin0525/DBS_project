
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete member data</title>
</head>
<body>
    <?php
        $link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'E84070015',  // 密碼 
            'food_bus');  // 預設使用的資料庫名稱
        $result = mysqli_query($link,"SELECT * FROM `member`");
    ?>

    <table>
    	<tr>
    	<tr>
	        <th>Your Name</th>
	        <th>phone</th>
	        <th>payment method</th>
	        <th>location</th>
	        <th>ID</th>
    	</tr>
    	<?php
    	$i=0;
    	while($row = mysqli_fetch_array($result)) {
    	?>
    	<tr class="<?php if(isset($classname)) echo $classname;?>">
    	<td><?php echo $row["Your_name"]; ?></td>
    	<td><?php echo $row["phone"]; ?></td>
    	<td><?php echo $row["payment_method"]; ?></td>
    	<td><?php echo $row["place"]; ?></td>
    	<td><?php echo $row["serial_num"]; ?></td>
    	<td><a href="del_process.php?serial_num=<?php echo $row["serial_num"]; ?>">Delete</a></td>
    	</tr>
    	<?php
    	$i++;
    	}
    	?>

    </table>

</body>
</html>