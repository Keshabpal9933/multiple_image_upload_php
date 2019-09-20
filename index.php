<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image-upload</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center">Image Upload</h3>
				<hr>
				<form action="img.php" method="POST" class="form" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-3">
						<label for="image"><strong>File-Name :</strong></label>
					</div>
					<div class="col-9">
						<input type="text" name="file_up" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-3">
						<label for="image"><strong>Image-Uploaded :</strong></label>
					</div>
					<div class="col-9">
						<input type="file" name="image[]" required multiple accept="image/*">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-12">
						<input type="submit" name="submit">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>