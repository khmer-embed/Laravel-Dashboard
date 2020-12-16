<!DOCTYPE html>
<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">CRUD</a>
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Create</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Update</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Delete</a>
					</li>
				</ul>
			</nav>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="form ">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control"></textarea>
						</div>
					</div>
					<button class="btn btn-success">Submit</button>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</body>
</html>