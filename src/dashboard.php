<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: ../index.php");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: ../index.php");	exit();
	}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" src="../assets/css/main.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <!-- STYLES -->
    <style>
        .tablaMain {
            cursor: help;
        }
    </style>

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

                <!-- MODAL CREATE EMPLOYEE -->
                <div class="modal fade" id="miModal" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Bienvenido al FACKING MODAL</h5>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->

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
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $json_employees = file_get_contents("../resources/employees.json");
                    $employees = json_decode($json_employees, true);

                    if(count($employees) != 0){
                        foreach ($employees as $employee) {
                            ?>
                    <tr class="tablaMain" onclick="displayEmployeePage(<?php echo $employee['id']; ?>)">
                        <td>
                            <?php echo $employee['name']; ?>
                        </td>
                        <td>
                            <?php echo $employee['lastName']; ?>
                        </td>
                        <td>
                            <?php echo $employee['gender']; ?>
                        </td>
                        <td>
                            <?php echo $employee['age']; ?>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                            ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Office</th>
                        <th>Gender</th>
                    </tr>
                </tfoot>
            </table>
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
    <!-- JAVASCRIPT -->
    <script src="../assets/js/indosh.js"></script>
</body>

</html>