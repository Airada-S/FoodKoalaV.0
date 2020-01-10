<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
<?php
//    session_start();
//    echo $_SESSION["status"] ;
    $butt = "เข้าสู่ระบบ";
    $link = "login.php";
    if($_SESSION["status"] == "login"){
        $butt = "ออกจากระบบ";
        $link = "check.php?s=4";
        $_SESSION["num"] = 0;
    }
?>
<nav class="navbar navbar-light bg-danger">
    <a class="navbar-brand text-light" href="#">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        FoodKoala
    </a>
    <form class="form-inline" action="<?php echo $link ?>" method='POST'>
<!--        <i class="fas fa-shopping-cart"></i>-->
<!--        <i class="fas fa-shopping-bag"></i>-->
        <?php
        if($_SESSION["status"] == "login"){?>
            <i class="fas fa-shopping-basket mr-1" style="font-size: 20px;color: gold"></i>
            <a style="font-size: 20px;color: gold">
        <?php
            echo $_SESSION["num"];
        }
        ?>
            </a>
        <button class="btn btn-outline-warning my-2 my-sm-0 ml-3" type="submit"><?php echo $butt ?></button>
    </form>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>