<?php
session_start();

$page=(isset($_GET["page"])) ? $_GET["page"]:"Domov";

function title($page){
    return ucfirst(str_replace('_', ' ', $page));
}

function query($sql){
    global $db;
    return mysqli_query($db,$sql);
}
function get($sql){
    $data = 0;
    $result = query($sql) or die("Can't return query.");
    if(mysqli_num_rows($result) == 0){
	$data = FALSE;
    }else if(mysqli_num_rows($result) == 1){
	$data = mysqli_fetch_assoc($result);
    } else {
	$data = array();
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }
    return $data;
}

function getProduct($productID=FALSE){//Vrne vse podatke izdelka
    if($productID===FALSE){
	return get("SELECT * FROM product");
    } else return get("SELECT * FROM product WHERE ID=$productID");
}
function getProductName($productID){//Vrne ime izdelka iz baze
    $result=get("SELECT name FROM product WHERE ID=$productID");
    return $result['name'];
}
function getPrice($productID){//Vrne ceno izdelka iz baze
    $result=get("SELECT price FROM product WHERE ID=$productID");
    return $result['price'];
}
function getCategory($belongID=FALSE){
	if($belongID===FALSE)
		return get("SELECT * FROM category");
    else{
    	return get("SELECT * FROM category WHERE belongID=$belongID");
    }
}
function addProduct($name,$price,$category,$data){
	query("INSERT INTO products(name,price,category,data) VALUES('$name',$price,$category,'$data')");
}

function removeSessionProduct($id){//Izbriše izdelek iz seje
    $max=count($_SESSION['cart']);
    for($i=0;$i<$max;$i++){
	if($id==$_SESSION['cart'][$i]['id']){
	    unset($_SESSION['cart'][$i]);
	    break;
	}
    }
}
function totalPrice(){//Sešteje število izdelkov in pomnoži z ceno. To naredi za vsak izdelek posebej
    $max=count($_SESSION['cart']);
    $total=0;
    for($i=0;$i<$max;$i++){
	$id=$_SESSION['cart'][$i]['id'];
	$q=$_SESSION['cart'][$i]['quantity'];
	$price=getPrice($id);
	$total+=$price*$q;
    }
    return $total;
}
function addToCart($id,$q){//dodaj izdelek v kosarico
    if($id<1||$q<1) {return;}
    if(is_array($_SESSION['cart'])){
        $max=count($_SESSION['cart']);
        if(inCart($id)) {return;}
	$_SESSION['cart'][$max]['id']=$id;
	$_SESSION['cart'][$max]['quantity']=$q;
    }else{
        $_SESSION['cart']=array();
	$_SESSION['cart'][0]['id']=$id;
	$_SESSION['cart'][0]['quantity']=$q;
    }
}
function inCart($id){//je v kosarici?
    $max=count($_SESSION['cart']);
    $result=FALSE;
    for($i=0;$i<$max;$i++){
	if($id==$_SESSION['cart'][$i]['id']){
	    $result=TRUE;
	    break;
	}
    }
    return $result;
}

function drawMenu(){
	
}
?>