<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "shop");
		$query = mysqli_query($connect, "SELECT * 	FROM items");
		echo $_GET["title"];
		echo $_GET["descript"];
		echo $_GET["img"];
		echo $_GET["price"]
		?>
	<div class="d-flex" style="background-color: #990033;">
		<div class="col-1"></div>
		<div class="col-10 d-flex">
			<div class="col-1 mx-auto">
				<img src="undraw_pride_y0te.svg" class="w-100">
			</div>
			<div class="col-7 mt-4 mx-auto d-flex">
					<?php 
						echo "<a href='admin.php' class='font-weight-bold text-white '>Найти товар</a>";
					 ?>
					 <p class="ml-3 text-white  font-weight-bold">Товары по скидке</p>
					 <p class="ml-3 text-white  font-weight-bold">Лучшие предложения</p>
					 <p class="ml-3 text-white  font-weight-bold"> Справочный материал</p>
					
			</div>
			<div class="col-4 mx-auto d-flex">
				<div class="col-4">
					<img src="undraw_Newsletter_re_wrob.svg" class="w-100">
				</div>
				<div class="col-4">
					<img src="undraw_Notify_re_65on.svg" class="w-100">
				</div>
				<div class="col-4">
					<img src="undraw_Login_re_4vu2.svg" class="w-100">
				</div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="mt-3 d-flex">
		<div class="col-1"></div>
		<div class="col-10 d-flex">
			<div class="col-8">
				<img src="1.png" class="w-100">
			</div>
			<div class="col-4 mt-5">
				<img src="super_woman_two_color.svg" class="w-100">
			</div>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="ml-auto mr-auto mt-3" style="width: 1500px">
		<div class="col-12 d-flex ">
			<div class="col-4 border px-auto" style="width: 200px;">
				<?php 
					$result = $query->fetch_assoc();
					echo "<img class=w-100 src='". $result["img"]."'>";
					echo "<h3>". $result["title"] ."</h1>";
					echo "<p>". $result["descript"] ."</p>";
					echo "<p>".  $result["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
			<div class="col-4 ml-3 border px-auto" style=" width: 200px;">
				<?php 
					$result2 = $query->fetch_assoc();
					echo "<img class='w-100' src='". $result2["img"]."'>";
					echo "<h3>". $result2["title"] ."</h1>";
					echo "<p>". $result2["descript"] ."</p>";
					echo "<p>".  $result2["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
			<div class="col-4 border ml-3 px-auto" style=" width: 200px;">
				<?php 
					$result3 = $query->fetch_assoc();
					echo "<img class=w-100 src='". $result3["img"]."'>";
					echo "<h3>". $result3["title"] ."</h1>";
					echo "<p>". $result3["descript"] ."</p>";
					echo "<p>".  $result3["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
		</div>
		<div class=" col-12 d-flex mt-3">
			<div class="col-4 border px-auto" style="width: 200px;">
				<?php 
					$result4 = $query->fetch_assoc();
					echo "<img class=w-100 src='". $result4["img"]."'>";
					echo "<h3>". $result4["title"] ."</h1>";
					echo "<p>". $result4["descript"] ."</p>";
					echo "<p>".  $result4["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
			<div class="col-4 border ml-3 px-auto" style="width: 200px;">
				<?php 
					$result5 = $query->fetch_assoc();
					echo "<img class=w-100 src='". $result5["img"]."'>";
					echo "<h3>". $result5["title"] ."</h1>";
					echo "<p>". $result5["descript"] ."</p>";
					echo "<p>".  $result5["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
			<div class="col-4 border ml-3 px-auto" style="width: 200px;">
				<?php 
					$result6 = $query->fetch_assoc();
					echo "<img class=w-100 src='". $result6["img"]."'>";
					echo "<h3>". $result6["title"] ."</h1>";
					echo "<p>". $result6["descript"] ."</p>";
					echo "<p>".  $result6["price"] ."</p>";	
				 ?>
				<button class="btn btn-light btn-lg">Купить</button>
			</div>
		</div>

	</div>
</body>
</html>