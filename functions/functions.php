<?php
$db=mysqli_connect("localhost","root","","mysite");





function  getPro(){
global $db;
if(!isset($_GET['item']))
{
$get_products="select * from products order by rand() LIMIT 0,1";
$run_products=mysqli_query($db ,$get_products);
while($row_products=mysqli_fetch_array($run_products)){
$pro_id=$row_products['product_id'];
$pro_title=$row_products['product_title'];
$pro_cat=$row_products['cat_id'];
$pro_item=$row_products['item_id'];
$pro_desc=$row_products['product_desc'];
$pro_price=$row_products['product_price'];
$pro_image=$row_products['product_img1'];
echo"
<div id='single_product'>
<h3>$pro_title</h3>
<img src='admin_area/product_images/$pro_image' width='180' height='180'/><br>
<p><b>price:$pro_price</b></p>
<a href='single.php?pro_id=$pro_id' style='float:left;'> details</a>
<a href='index.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
</div>
";
}
}
}

function  getCatPro(){
global $db;


if(isset($_GET['cat']))
{
$cat_id=$_GET['cat'];
$get_cat_pro="select * from products where cat_id='$cat_id'";
$run_cat_pro=mysqli_query($db ,$get_cat_pro);
$count=mysqli_num_rows($run_cat_pro);
if($count==0)
{
echo "<h2>no products found in this categorry!</h2>";
}


while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
$pro_id=$row_cat_pro['product_id'];
$pro_title=$row_cat_pro['product_title'];
$pro_desc=$row_cat_pro['product_desc'];
$pro_price=$row_cat_pro['product_price'];
$pro_image=$row_cat_pro['product_img1'];
echo"
<div id='single_product'>
<h3>$pro_title</h3>
<img src='admin_area/product_images/$pro_image' width='180' height='180'/><br>
<p><b>price:$pro_price</b></p>
<a href='det1.php?pro_id=$pro_id' style='float:left;'> details</a>
<a href='cart.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
</div>
";

}

}
echo "get cat pro";
}

function  getitemPro(){
global $db;

if(isset($_GET['item']))
{
$item_id=$_GET['item'];
$get_item_pro="select * from products where item_id='$item_id'";
$run_item_pro=mysqli_query($db ,$get_item_pro);
$count=mysqli_num_rows($run_item_pro);
if($count==0)
{
echo "<h2>no products found in this category!</h2>";
}


while($row_item_pro=mysqli_fetch_array($run_item_pro)){
$pro_id=$row_item_pro['product_id'];
$pro_title=$row_item_pro['product_title'];
$pro_desc=$row_item_pro['product_desc'];
$pro_price=$row_item_pro['product_price'];
$pro_image=$row_item_pro['product_img1'];
echo"
<div id='single_product'>
<b><h3>$pro_title</h3></b>
<img src='admin_area/product_images/$pro_image' width='180' height='180'/><br>
<p><b>price:$pro_price</b></p>
<a href='single.php?pro_id=$pro_id' style='float:left;'> details</a>
<a href='index.php?add_cart=$pro_id' style='float:right;'><button >ADD TO CART</button></a>
</div>
";
}

}
}



function getitem()
{
if(isset($_GET['cat']))
{
global $db;
$get_item="select * from cat";
$run_item=mysqli_query($db,$get_item);
while($row_item=mysqli_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='index.php?item=$item_id'>$item_title</a></li>";
}
}
echo"get item";
}


function getCats()
{

global $db;
$get_cats="select * from categories";
$run_cats=mysqli_query($db,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];



        echo "<li class='list-group-item list-group-item-info'><a href='com.php?cat=$cat_id'>$cat_title</a></li>";
}
echo"get cats";
}

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
 {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
 {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
 
function cart()
{
if (isset($_GET['add_cart']))
{
global $db;
$ip=getIp();
$pro_id=$_GET['add_cart'];
$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
$run_check=mysqli_query($db,$check_pro);
if(mysqli_num_rows($run_check)>0){
echo "";
}
else{
$insert_pro="insert into cart (p_id,ip_add)values('$pro_id','$ip')";
$run_pro=mysqli_query($db,$insert_pro);
echo"<script> window.open('index.php','self')</script>";
}
}
}

function total_items()
{
if(isset($_GET['add_cart'])){
global $db;
$ip=getIp();
$get_items="select * from cart where ip_add='$ip'";
$run_items=mysqli_query($db,$get_items);
$count_items=mysqli_num_rows($run_items);
}
else{
global $db;
$ip=getIp();
$get_items="select * from cart where ip_add='$ip'";
$run_items=mysqli_query($db,$get_items);
$count_items=mysqli_num_rows($run_items);
}
echo $count_items;
}




function total_price()
{
global $db;
global $total;
$ip=getIp();
$sel_price="select * from cart where ip_add='$ip'";
$run_price=mysqli_query($db,$sel_price);
while($p_price=mysqli_fetch_array($run_price)){
$pro_id=$p_price['p_id'];
$pro_price="select * from products where product_id='$pro_id'";


$run_pro_price=mysqli_query($db,$pro_price);
while($pp_price=mysqli_fetch_array($run_pro_price))
{
$product_price=array($pp_price['product_price']);
$values=array_sum($product_price);
$total+=$values;
}

}


echo "Rs".$total;
}
?>