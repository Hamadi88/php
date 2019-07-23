<!DOCTYPE html>
<?php require("tableau.php");
$z=5;
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/app.css">
	<title></title>
</head>
<body>
<main>
	<nav class="entete">
		<ul>
			<?php foreach ($tableau as $k => $menu) :?>
				<li><a href="<?=$menu?>"><?=$k?></a></li>
			<?php endforeach ?>
		</ul>

		<!-- <ul>
			<?php foreach ($tableau as $k => $menu) {
				echo '<li><a href="'.$menu.'">'.$k.'</a></li>';
			}?>
		</ul>
				 -->
	<img src="" alt=""/>
	</nav>


    

</main>