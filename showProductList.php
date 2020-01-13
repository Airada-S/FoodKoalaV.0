<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
</head>
<body>
<?php
    require_once './ConnectDatabase.php';
    include 'header.php';
//    $pid = (explode("|",$_SESSION['pid']));
?>
<div class="card m-4">
    <!--                <img src="--><?php //echo $row["seller_img"] ?><!--" class="card-img-top" alt="...">-->
    <div class="card-body">
        <p class="card-text">
<?php
//    for($i=0;$i<$_SESSION["num"];$i++) {
////        if($i == 0){
////            array_push($arrNum,array($pid[$i]=>1));
////        }
//        if (array_key_exists($pid[$i], $_SESSION["arrNum"])) {
//            $_SESSION["arrNum"][$pid[$i]] += 1;
//        } else {
////            array_push($arrNum,array($pid[$i]=>1));
//            $_SESSION["arrNum"][$pid[$i]] = 1;
//        }
//    }
    foreach ($_SESSION["listProduct"] as $key => $value){
        $conn = new ConnectDB();
        $product = $conn->getProductByPid($key);
        $row = $product->fetch_assoc();
//        if($product->num_rows >0){
//            while ($row = $product->fetch_assoc()){
?>
    <div class="card mt-2">
        <div class="card-body" style="font-size: 25px;">
            <a  href="check.php?s=8&pid=<?php echo $key ?>" >
                <i class="far fa-minus-square" style="font-size: 25px;color: gold"></i>
            </a>
            <?php echo $value ?>
            <a  href="check.php?s=9&pid=<?php echo $key ?>" >
                <i class="far fa-plus-square" style="font-size: 25px;color: gold"></i>
            </a>
            <?php
                echo $row["product_name"];
            ?>
            <div  class="float-right" href="" style="font-size: 25px;">
                <a class="mr-1"><?php echo $row["product_price"] ?></a>
                <a ><?php echo $row["product_price"]*$value ?></a>
            </div>
            <br>
            <?php
                $seller = $conn->getSeller($row["seller_id"]);
                $row2 = $seller->fetch_assoc();
                echo "จากร้าน : ".$row2["seller_name"];
            ?>

<!--            <a  class="float-right" type="submit" href="" style="font-size: 40px;color: gold">-->
<!--                <i class="far fa-minus-square"></i>-->
<!--                <i class="far fa-plus-square"></i>-->
<!--            </a>-->
        </div>
    </div>
<?php
//            }
//        }
    }
//    print_r($_SESSION["listProduct"]);
?>
        </p>
    </div>
</div>
</body>