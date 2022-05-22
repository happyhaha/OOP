

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Курс PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
		<ul class="nav" style="margin-bottom: 40px;">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/about">О нас</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/single">Ещё одная страница</a>
  </li>
<!--   <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li> -->
</ul>
</div>
	<section class="tusk-block">
		<div class="container">

				<?php 

                                    if(isset($_SESSION['name'])){
                                            echo $_SESSION['name'];
                                        unset($_SESSION['name']);
                                        }?>
				
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Username</th>
				      <th scope="col">Actions</th>
				    </tr>
				  </thead>
				  <tbody>

				  	<?php 
				  	foreach ($persons as $person) {
				  		 $id = $person['id'];
				  		?>

				  		<tr>
				      <th scope="row"><?php echo $person['id'] ?></th>
				      <td>
				      	<a href="#"><?php echo $person['first_Name'] ?></a>
				      </td>
				      <td><?php echo $person['last_Name'] ?></td>
				      <td><?php echo $person['username'] ?></td>

				     

				      <td class="btn-block">
				      	<a href="#" class="btn btn-1">Добавить</a>
				      	<!-- <a href="upgrade.php?id=<?php echo $id ?>" class="btn btn-2">Изменить</a> -->
				      	<a href="#" class="btn btn-3">Удалить</a>
				      </td>
				    </tr>

				  	<?php	
				  	}
				  	?>

				 
				  </tbody>
				</table>
			
		</div>
	</section>
	




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>