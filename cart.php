<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Document</title>
</head>
<body>

	<h1>Корзина товара</h1>





<?php session_start();

// print_r ($_SESSION);

// print_r ($_POST);

/**
* Распечатка массива
**/
function print_arr($array){
  echo "<pre>" . print_r($array, true) . "</pre>";
}
// session_destroy();

$_SESSION["variable"]=value;
print_arr ($_SESSION ["variable"]);

?>


<?php echo "вывод  массива переменной S_POST". '<br>'; print_r($_POST); ?>
	
</body>
</html>

