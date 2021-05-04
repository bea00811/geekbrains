
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?php

session_start();


include 'connect.php';



if ( isset($_GET['id'])  ) {
    $id_tovara = (int)$_GET['id'];
    $get_one_product = get_one_product ($id_tovara);
 
} else {
    echo "<p>Тут пока ничего не передано</p>";
}





/**
* Получение отдельного товара
**/
function get_one_product($product_id_ira){
	global $connection;
	$query = "SELECT * FROM photo_main WHERE id = $product_id_ira";
	$res = mysqli_query($connection, $query);
	return mysqli_fetch_assoc($res);
}


function print_arr($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}

?>



<h1>Карточка товара</h1>
<h3><a href="index.php">На главную</a></h3>



<?php if ( isset($_GET['id'])  ) {

?>
<div class="product_box">
	<img src="<?= $get_one_product['path'].'/'.$get_one_product['filename']?>" alt="">
	<h3><?= $get_one_product['Title_good']?></h3>
	<h4><?= $get_one_product['descriptione']?></h4>
</div>

<?php


} else {
    echo "<p> И тут тоже пока ничего не передано</p>";
}
  
?>


<form class="product_form" action="cart.php" method="post">
    <label>
        количество <input type="number" name="product_count">
    </label>
    <br>
     <label>
        В корзину <input type="submit" name="product_id" value="<?php echo $_GET['id']?>" >
    </label>
    <br>
  
</form>



<?php
$product_count = !empty($_POST['product_count']) ? $_POST['product_count'] : '';
$product_id = !empty($_POST['product_id']) ? $_POST['product_id'] : '';
?>

    <title>Обработка POST-запроса</title>


<p>
    Переданное количство продукта: <?= $product_count ?>
    <br>

    <br>
    Переданное id продукта: <?= $product_id ?>
      
</p>








