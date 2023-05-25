
<!DOCTYPE html>
<html>
    <head>
        <title>Update Employee Data</title>
    </head>
    <body>
        <?php
            $link = @mysqli_connect( 
                        'localhost',  // MySQL主機名稱 
                        'root',       // 使用者名稱 
                        'E84070015',  // 密碼 
                        'food_bus');  // 預設使用的資料庫名稱 
           
                 
            if(count($_POST)>0) {
            mysqli_query($link,"UPDATE member set serial_num='" . $_POST['serial_num'] . "', Your_name='" . $_POST['Your_name'] . "', phone='" . $_POST['phone'] . "', payment_method='" . $_POST['payment_method'] . "' ,place='" . $_POST['place'] . "' WHERE serial_num='" . $_POST['serial_num'] . "'");

            $message = "Record Modified Successfully";
            }
            $result = mysqli_query($conn,"SELECT * FROM `member` WHERE `serial_num` = $_GET[serial_num] ");
            $row= mysqli_fetch_array($result);
        ?>


        <form  method="post" action="">
        <div>
            <?php if(isset($message)) { echo $message; } ?>
        </div>
        <div style="padding-bottom:5px;">
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="m_update.php">Member List</a></h2>
        </div>
        <center>
        Your_name: <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Your_name"  value="<?php echo $row['Your_name']; ?>">
        <br><br><br>
        phone: <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
        <br><br><br>
        付款方式 :<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="payment_method" class="txtField" value="<?php echo $row['payment_method']; ?>">
        <br><br><br>
        location:<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="place" class="txtField" value="<?php echo $row['place']; ?>">
        <br><br><br>
        
        <input type="hidden" name="serial_num" class="txtField" value="<?php echo $row['serial_num']; ?>">
       
        <br><br><br>
        <br>
        <input type="submit" name="submit" value="Submit" class="buttom">
        </center>
        </form>
    </body>
</html>
