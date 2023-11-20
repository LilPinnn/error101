<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
        <h2>Edit Admin</h2>
				<div class = "alert alert-info">Account / Change Account</div>
				<?php
					$query = "SELECT * FROM `admins` WHERE `id` = '$_REQUEST[id]'";
					$result = $mysqli->query($query);
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_admin.php?id=<?php echo $fetch['id']?>">
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Tel </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['tel']?>" name = "tel" />
						</div>
                        <div class = "form-group">
							<label>Email </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['email']?>" name = "email" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_admin" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
		            </div>
	
    <br /> 
</div>
</body>
</html>