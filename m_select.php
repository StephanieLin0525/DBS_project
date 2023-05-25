<?php
    require_once 'connect_DBS.php';
?>

<h3>會員查詢結果</h3>
<div>
    <?php if(!empty($datas)): ?>
    <ul>
    <!-- 資料 as key(下標) => row(資料的row) -->
    <?php foreach ($datas as $key => $row) :?>
    <li>
    會員名稱<?php echo $row['name']; ?>
    <br>
    電話<?php echo $row['phone']; ?>
    <br>
    付款方式<?php echo $row['payment_method']; ?>
    <br>
    運送位置<?php echo $row['location']; ?>
    </li>
    <?php endforeach; ?>
    </ul>
    <?php else:  ?>
    查無此會員
    <?php endif; ?>
</div>
    

<!-- 代表結束連線 -->
<?php mysqli_close($link); ?>




