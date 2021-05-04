<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Document</title>
</head>
<body>

	<?php

 
include 'connect.php';






/**
* Распечатка массива
**/
function print_arr($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}


$sql = "SELECT * FROM photo_main ORDER BY opened DESC";
$result1 = mysqli_query($connection, $sql);




/*выбирает с помощью встроенной функции mysqli_fetch_all   все строки из переменной $res и помещает их в массив, с помощью MYSQLI_ASSOC делаем из простого ассоциативный массив  */
$datas = mysqli_fetch_all($result1, MYSQLI_ASSOC);



/*Вставляет в Базу данных  */


$delete = "DELETE FROM photo_main  WHERE id = 2";
$res_delete = mysqli_query($connection, $delete) or die('Ошибка внесения удалений в БД');

// $insert = "INSERT INTO photo_main (filename) VALUES ('ira2')";
// $doresult = mysqli_query($connection, $insert) or die('Ошибка внесения удалений в БД');

$update = "UPDATE photo_main SET path ='images'";
$res_update = mysqli_query($connection, $update) or die('Ошибка внесения изменений в БД');





$stolbec = "ALTER TABLE `photo_main` ADD `descriptione` TEXT( 110 ) NOT NULL;"






?>





<div>
	<h1>Магазин ноутбуков</h1>
	<ul class="wrapper box" class="width:500px;">
		<?php


		foreach( $datas as $c ) {

?>
		<li>

			<?php 
				echo '<img height="150"  src="'.$c['path'].'/'.$c['filename'].'" alt="">';
				echo '<a href="item.php?id='.$c['id'].'"><p>'.$c['Title_good'].'<br></p></a>';
				echo '<p>'.$c['descriptione'].'<br></p>';

			?>	

		</li>

<?php

	}
 ?>

     </ul>
	

</div>









