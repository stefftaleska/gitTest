<body background="https://cdn.wallpapered.com/wp-content/uploads/2018/09/01174927/Confectionary.jpg">

<a href="triagolnik.html"> Назад </a>

<br><br><br>

<p align="center" style="font-size: 30px; border-style: groove; border-color: #f238d0">
<?php


//Triagolnikot e $triagolnik, cij perimetar iznesuva L = $perimetar, a plostinata iznesuva P = $plostina.

$triagolnik = $_POST['triagolnik'];
$perimetar = 0;
$plostina = 0;


    if ($_POST['triagolnik'] === 'Рамностран') {
 		$perimetar = 3 * $_POST['strana_a'];
 		$plostina = $_POST['strana_a'] * $_POST['strana_a']*sqrt(3)/4;
    } 
 	else if ($_POST['triagolnik'] === 'Рамнокрак') {
 		$perimetar = $_POST['strana_a'] + (2 * $_POST['strana_b']);
 		$plostina = $_POST['strana_a'] * $_POST['visina_ha']/2;
    } 
 	else if ($_POST['triagolnik'] === 'Разностран') {
 		$perimetar = $_POST['strana_a'] + $_POST['strana_b'] + $_POST['strana_c'];
 		$plostina = $_POST['strana_a'] * $_POST['visina_ha']/2;
	}
 	else {
		$perimetar = $_POST['strana_a'] + $_POST['strana_b'] + $_POST['strana_c'];
 		$plostina = $_POST['strana_a'] * $_POST['visina_ha']/2;
 	}

echo "Триаголникот е $triagolnik,<br> чиј периметар изнесува L = $perimetar cm,<br> а плоштината изнесува P = $plostina cm";


?>
</p>