
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

            if(isset($_POST['save'])){
                $product_name = $_POST[$row["product_name"]];
                $price = $_POST[$row['price']];
                $inventory = $_POST[$row['inventory']];
                
                $q1 = "INSERT INTO `orders`(vegetable,price,inventory) VALUE ($product_name,$price,$inventory) ";
                
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
            