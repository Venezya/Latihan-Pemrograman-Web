<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<title> Add Students </title>
</head>
<body>
<div class="container" style="margin-top: 80px">
<div class="row">
<div class="col-md-8 offset-md-2">
<div class="card">
<div class="card-header">
ADD STUDENTS
</div>
<div class="card-body">
<form action="Save-Siswa.php" method="POST">
<div class="form-group">
<label> NISN </label>
<input type="text" name="nisn" placeholder="Enter Student's NISN" class="form-control">
</div>
<div class="form-group">
<label> FullName </label>
<input type="text" name="full_name" placeholder="Please enter a name Students" class="form-control">
</div>
<div class="form-group">
<label> Addresses </label>
<textarea class="form-control" name="address" placeholder="Enter an address Students" rows="4"></textarea>
</div>
<button type="submit" class="btn btn-success"> SAVE </button>
<button type="reset" class="btn btn-warning"> RESET </button>
</form>
</div>
</div>
</div>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
