<?
    if($page=="articles"&& isset($_GET["value"])){
        $name=$_POST["name"];
        $price=$_POST["price"];
        $category=$_POST["category"];
        $data=$_POST["data"];
        if($_GET["value"]==add){
            addProduct($name,$price,$category,$data);
            echo mysqli_error($db);
        }
    }
?>
<ul>
    <li>Dodaj artikel</li>
    <li>Izbriši artikel</li>
    <li>Uredi artikel</li>
</ul>

<form action="<?php echo $server_addr;?>/admin/index.php?page=articles&value=add" method="post" >
    <table>
        <tr>
            <td><input type="text" name="name" /></td>
            <td>Product Name</td>
        </tr>
        <tr>
            <td><input type="number" name="price" /></td><br />
            <td>Price</td>
        </tr>
        <tr>
        <td><input type="text" name="category" /></td><br />
        <td>Category</td>
        </tr>
        <tr>
        <td><textarea name="data"></textarea></td><br />
        <td>About the product</td>
        </tr>
    </table>
    <input type="submit" value="Submit" />
</form>