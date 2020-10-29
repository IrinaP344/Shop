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

		?>
	<div class="d-flex" style="background-color: #990033;">
		<div class="col-1"></div>
		<div class="col-10 d-flex">
			<div class="col-1 mx-auto">
				<img src="undraw_pride_y0te.svg" class="w-100">
			</div>
			<div class="col-7  mx-auto d-flex">
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
	<form action="insert.php" method="GET" class="border mt-5 text-center">
		<h1>Добавить Товар</h1>
		<div class="mt-1 ml-2 mt-3">
			<input type="" name="title" class="form-control">
		</div>
		<div class="mt-1 ml-2 mt-3">
			<input name="descript" class="form-control" rows="3"></input>
		</div>
		<div class="mt-1 ml-2 mt-3">
			<input type="" name="img" class="form-control">
		</div>
		<div class="mt-1 ml-2 mt-3">
			<input type="" name="price" class="form-control">
		</div>
		<div class="mt-1 ml-2 mt-3">
			<p class="font-weight-bold"></p>
			<button class="btn bg-danger text-white">Добавить</button>
		</div>
	</form>
</body>
</html>