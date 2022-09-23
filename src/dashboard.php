<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: ../index.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: ../index.php");	exit();
	}

    // require_once ("./library/employeeController.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--  SWEET ALERT -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- EOOOOOOOOOOO JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container w-75 mt-5 rounded shadow bg-white">
        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="http://localhost/assembler/Employee-Management-PHP/src/dashboard.php"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <img src="../resources/img/lgo.png" width="40" height="32" alt="logo" class="bi me-2">
                    </svg>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="http://localhost/assembler/Employee-Management-PHP/src/dashboard.php"
                            class="nav-link px-2 link-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal">
                        New Employee
                    </button>
                    <button id="btnLogout" type="button" class="btn btn-secondary">Log out</button>
                </div>
            </header>
        </div>
        <main id="dashboard">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tbody">

                <!-- // ! AQUI SE CREA LA TABLA DESDE JS -->

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Office</th>
                        <th>Gender</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

            <!-- MODAL CREATE EMPLOYEE -->
            <div class="container w-75 mt-5 rounded shadow bg-white">
                <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Employee Form</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>

                            <div class="modal-body mx-3">
                                <form action="" role="form" method="POST">
                                    <div class="row">
                                        <div class="md-form mb-5 col">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <label data-error="wrong" data-success="right"
                                                for="orangeForm-name">Name</label>
                                            <input type="text" class="form-control validate" name="name">
                                        </div>
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-signature"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Last
                                                Name</label>
                                            <input type="text" class="form-control validate" name="lastName">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-at"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
                                            <input type="text" class="form-control validate" name="email">
                                        </div>
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-city"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">City</label>
                                            <input type="text" class="form-control validate" name="city">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-map-pin"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Street Address</label>
                                            <input type="text" class="form-control validate" name="streetAddress">
                                        </div>
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-flag-usa"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">State</label>
                                            <input type="text" class="form-control validate" name="state">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form mb-5 col">
                                            <i class="fa-brands fa-usps"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Postal Code</label>
                                            <input type="text" class="form-control validate" name="postalCode">
                                        </div>
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-mobile"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Phone Number</label>
                                            <input type="text" class="form-control validate" name="phoneNumber">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-person"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Gender</label>
                                            <input type="text" class="form-control validate" name="gender">
                                        </div>
                                        <div class="md-form mb-5 col">
                                            <i class="fa-solid fa-venus-mars"></i>
                                            <label data-error="wrong" data-success="right" for="orangeForm-name">Age</label>
                                            <input type="text" class="form-control validate" name="age">
                                        </div>
                                    </div>

                            </div>

                                    <div class="modal-footer d-flex justify-content-center">
                                        <input type="submit" name="submit" value="submit" class="btn btn-primary " />
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
        </main>
        <div id="footer" class="container bg-white">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

                <ul class="nav col-md-4 justify-content-end">
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
    <!-- TODO JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/137c893bad.js" crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
    <script src="../assets/js/indosh.js"></script>

<?php
// * CREAR UN EMPLEADO
    if(isset($_POST['submit'])){
        // * Generador de ID unico (Se basa en la hora exacta en la que estas)
        $new_Id = uniqid();
        echo '<script>console.log("'.$new_Id.'")</script>';

        $id = $new_Id;
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $streetAddress = $_POST['streetAddress'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $phoneNumber = $_POST['phoneNumber'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        
        
        $json_employees = file_get_contents("../resources/employees.json");
        $employees = json_decode($json_employees, true);

        $new_employee = array(
            'id' => $id,
            'name' => $name,
            'lastName' => $lastName,
            'email' => $email,
            'city' => $city,
            'streetAddress' => $streetAddress,
            'state' => $state,
            'postalCode' => $postalCode,
            'phoneNumber' => $phoneNumber,
            'gender' => $gender,
            'age' => $age
        );

            $employees[] = $new_employee;

            $new_employees = json_encode($employees);
            
            if(file_put_contents("../resources/employees.json", $new_employees)){
                echo "
                    <script type='text/javascript'>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    </script>
                    ";

            }

    }
// * FIN CREAR EMPLEADO

//  * FUNCIONALIDAD BOTONES
    if(isset($_POST['delete'])){
        echo '<script>dispayAlertDelete()</script>';
        
        deleteEmployee($userID);
    }

    if(isset($_POST['edit'])){
        echo '<script>displayEmployeePage("'+$userID+'")</script>';

    }
    

?>
</body>

</html>