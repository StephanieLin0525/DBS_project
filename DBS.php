<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Final Project</title>
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/68f8681dba.js" crossorigin="anonymous"></script>
   
   </head>
   <body>

      <section id='intro'>
         <div class='jumbotron'>
            <div class='container'>
               <div class="col-md-12"> 
               <h1>全台最省錢蔬果外送平台-Food Bus </h1>
               <p class='lead'>健康從這裡做起拉! </p>
               <a class='btn' href="http://localhost/1/member.php" style="background: #f05f5c;
                                                                        color: white;"> 加入會員 </a>
               </div>
            </div>
         </div> 

      </section>


      <section id='second'>
         <div class='container'>
            <div class='row'>
               <div class='col-md-7 offset-md-2 text-center'>
                  <br><br>
                  <h3 style="font-size: 28px;
                             margin-bottom: 20px;">農民剛採收結束，就直送你家門口~<h3>
                  <div class='row'>
                     <div class='col-md-2'>                     
                     </div>
                     <div class='col-md-10 text-left'>
                        <p style="font-size: 15px;
                                 color: #707070; "> 在疫情摧殘的時代，利用Food Bus取代家庭主夫/婦到菜市場買菜，不僅可以減少與人接觸，還可以方便快速買到自己想煮的食材!!!
                            這是一個可以以低價格買到新鮮蔬果的平台，就讓我們開始這趟時才購買之旅吧~</p>
                     </div>
                  </div>   
               </div>
            </div>
         </div> 
      </section>            
      <br><br><br><br>


      <section id='latest' >
         <div class='container'>
            <div class='row'>
               <div class='col-md-12 text-center'> 
                  <h3>開始使用</h3>
                  <br><br>
               </div>
            <div>
            
            <div class='row'>
               <div class='col-md-4'>
                  <div class="outer">
                     <a href="http://localhost/1/orders.php">
                        <div class='upper'>
                           <img src="pictures/shopping.jpg" >
                        </div>
                        <div class='lower'>
                           <h4> 開始購物</h4>
                        </div>
                     </a>
                  </div>
                  
               </div>

               <div class='col-md-4'>
                  <div class="outer">
                     <a href="http://localhost/1/set_meal.php">
                        <div class='upper'>
                           <img src="pictures/orders.png" >
                        </div>
                        <div class='lower'>
                           <h4> 查詢訂單情況</h4>
                        </div>
                     </a>   
                  </div>
                </div>  

               <div class='col-md-4'>
                  <div class="outer">
                     <a href='http://localhost/1/food.php'>
                        <div class='upper'>
                           <img src="pictures/place.png" >
                        </div>
                        <div class='lower'>
                           <h4> 倉庫異動</h4>
                        </div>
                     </a>
                  </div>
               </div>   

            </div>

         </div>

      </section>



       <?php
            /* 
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
         mysqli_close($link);  // 關閉資料庫連接
         */
      ?>
    
   </body>
</html>