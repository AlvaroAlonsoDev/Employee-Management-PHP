<?php

    require("./src/library/loginController.php");

	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <style>
        body {
            /* color: #ffffff; */
            background: #1e2126;
            /* background: linear-gradient(to right, #16191c, #1e2126) */
        }
		
        .bg {
            background-image: url(resources/img/imagen123.jpg);
            background-position: center center;
        }
    </style>
</head>

<body>
    <div class="container w-75 mt-5 rounded shadow bg-white">
        <div class="row align-item-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="resources/img/lgo.png" width="40px" alt="Logo" />
                </div>
                <h2 class="fw-bold text-center py-5">Log in</h2>

                <!-- LOGIN -->
                <form action="" id="form_login" method="POST">
                    <div class="mb-4">
                        <label for="txt_user" class="form-label">User</label>
                        <input type="text" class="form-control" name="username" id="txt_user" />
                    </div>
                    <div class="mb-4">
                        <label for="txt_pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="txt_pass" />
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="" />
                        <label for="connected" class="form-check-label">Remember me</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Log in</button>
                    </div>
					<p class="error"><?php echo @$user->error ?></p>
					<p class="success"><?php echo @$user->success ?></p>
                    <div class="my-3">
                        <span>You do not have an account?
                            <a href="#">create one now</a></span>
                    </div>
                    <div class="my-3">
                        <span><a href="">Have you forgotten your password?</a></span>
                    </div>
                </form>

                <!-- LOGIN CON REDES SOCIALES -->
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Log in</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="resources/img/fcb2.png" width="32" alt="Logo Facebook" />
                                    </div>
                                    <div class="col-12 col-md-10 text-center">Facebook</div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="resources/img/ggle.png" width="32" alt="Logo Facebook" />
                                    </div>
                                    <div class="col-12 col-md-10 text-center">Google</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-white">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
						<img src="resources/img/lgo.png" width="30"alt="Logo">
                    </svg>
                </a>

                <ul class="nav col-md-4 justify-content-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2 text-muted">About</a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
	<script src="assets/js/index.js"></script>
</body>

</html>