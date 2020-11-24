<!doctype html>
<html lang="\">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Products</title>
</head>
<body>

<div class="card">
	<div class="card-body">
		<table class="table table-dark">
			<thead>
			<tr>
				<th scope="col">STT</th>
				<th scope="col">Id</th>
				<th scope="col">Name</th>
				<th scope="col">Price</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if (!empty($products)) {
				foreach ($products as $item){
					?>
					<tr>
						<th scope="row">1</th>
						<td><?php echo $item['id']?></td>
						<td><?php echo $item['name']?></td>
						<td><?php echo $item['price']?></td>
					</tr>
				<?php
				}
			}
			?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
