<?php
session_start();
//$requestedProducts = '';
//$addProductsToCart = array();
//$addedProducts  = array();
if(!isset($_SESSION['products'])){
    $_SESSION['products'] = array();
}

if(!empty($_GET) && isset($_GET['id'])){
    $requestedProducts = $_GET['id'];
    $addProductsToCart[] = $requestedProducts;
    if(!in_array($requestedProducts, $_SESSION['products'])){
        $_SESSION['products'][]=$requestedProducts;
    }
//    array_push($_SESSION['products'],$requestedProducts);


//    if(!in_array($requestedProducts, $addProductsToCart)){
//        $addProductsToCart[] = $requestedProducts;
//        array_push($_SESSION['products'],$requestedProducts);
////        $_SESSION['products'] = $addProductsToCart;
//    }

//    array_push($_SESSION['products'],$requestedProducts);
//    print_r($addProductsToCart);die;
//    print_r($_SESSION['products']);die;
//    array_push($addedProducts,$requestedProducts);
//    $_SESSION['products'] = $addProductsToCart;

}

if(!empty($_SESSION) && isset($_SESSION['products'])){
    $addedProducts = $_SESSION['products'];
}

//print_r($_SESSION);die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="main">
    <?php
    include("header.php");
    ?>

    <?php
    include("menu.php");
    ?>

    <div class="contant shopping-cart-main-content" style="height:600px">
        <?php
        include("conn.php");

        $str="select * from product where id in (".implode($addedProducts,',').")";
        $res=mysql_query($str);
//        print_r($str);die;
        while ($row=mysql_fetch_array($res))
        {
            $id=$row['id'];
            $imgurl=$row['pic'];
            $name=$row['name'];
            $productName = $row['details'];
            $productPrice = $row['price'];
            ?>
            <div style="float: left;width: 150px;margin-right: 10px;">
                <div style="width: 100%;">
            <a href="shoppingCart.php?id=<?php echo $id; ?>">
                <div class="c1">
                    <img src="../admin/images/<?php echo $imgurl ?>" style="border-radius:10px;" height="150px" width="150px" /><br />
                </div>
            </a>
                </div>
                <div style="width: 100%">
                        <div style="float: left;height:20px;text-align:center;background-color:#666;width:150px;color:#FFF;margin-top:5px;margin-left:15px;"><?php echo $productName.': '.$productPrice.'/-'; ?></div>
                </div>
                <div style="width: 100%">
            <a href="shoppingCart.php?remove=<?php echo $id; ?>">
                <div style="float: left;height:20px;text-align:center;background-color:#666;width:150px;color:#FFF;margin-top:5px;margin-left:15px;"><?php echo $name ?>-Remove Cart</div>
            </a>
                    </div>
            </div>
        <?php
        }
        ?>
    </div>

    <?php
    include("footer.php");
    ?>
</div>
</body>
</html>