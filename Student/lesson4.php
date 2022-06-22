<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/booystrap.min.css">
</head>
<body>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-6">
			<form action="/lesson4upload.php" enctype="multipart/form-data" method="post">
				<div class="form-group">
					<input type="file" name="image[]" multiple>
				</div>
				<div class="form-group mt-3">
					<button class="btn btn-success" type="Submit">Submit</button>
				</div>
			</form>
	       <div class="col-md-3">
				  <?php foreach($images as $image): ?>
			<img src="uploads/<?php echo $image; ?>">
				  <?php endforeach;?>
		   </div>
		  </div>	
		 </div>
		</div>
</body>
</html>