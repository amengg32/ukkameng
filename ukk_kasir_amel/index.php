<!DOCTYPE html>
<html lang="en">
<head>
	<title>UKK KASIR amel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		/* Custom Blue Theme */
		:root {
			--color-light-blue: #a0c4ff; /* Light Blue */
			--color-soft-blue: #75b3e7; /* Soft Blue */
			--color-dark-blue: #004d99; /* Dark Blue */
			--color-background: #f0f8ff; /* Alice Blue for the background */
		}

		body {
			background-color: var(--color-background);
		}

		.card {
			border-color: var(--color-dark-blue);
		}

		.card-body {
			background-color: var(--color-light-blue);
		}

		.card-body h3 {
			color: var(--color-dark-blue);
		}

		.form-control {
			border: 1px solid var(--color-dark-blue);
		}

		.form-control:focus {
			border-color: var(--color-soft-blue);
		}

		.btn-primary {
			background-color: var(--color-dark-blue);
			border-color: var(--color-dark-blue);
		}

		.btn-primary:hover {
			background-color: var(--color-soft-blue);
			border-color: var(--color-soft-blue);
		}

		.alert {
			background-color: var(--color-dark-blue);
			color: white;
			border-radius: 5px;
			padding: 10px;
			margin-top: 10px;
		}

		.alert a {
			color: white;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="card mt-5">
				<div class="row">
					<div class="col-6">
						<div class="card-body">
							<h3 class="text-center mt-5">Selamat datang di kasir Amengg</h3>
							<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan']=="gagal"){
									echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
								}
							}
							?>
							<form method="post" action="cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="form-group mt-3">
									<button class="btn btn-primary form-control" type="submit">Login</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-6">
						<div class="card-body">
							<img src="assets/logo amelllll.jpg" width="500">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
