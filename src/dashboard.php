<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <style>
        * {
            /* color: #ffffff; */
            /* background: #fbfbfd; */
            /* background: linear-gradient(to right, #16191c, #1e2126) */
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
                        <img src="../resources/img/lgo.png" width="40" alt="logo">
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
                    <a href="#"><img src="../resources\img\addlogo.png" alt="Add User" width="30" class="me-5" /></a>
                    <button id="btnLogout" type="button" class="btn btn-primary">Log out</button>
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
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                $json_employees = file_get_contents("../resources/employees.json");
                $employees = json_decode($json_employees, true);

                if(count($employees) != 0){
                    foreach ($employees as $employee) {
                        ?>
                    <tr>
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
                        <td>
                            <?php echo $employee['phoneNumber']; ?>
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
                        <th>Phone Number</th>
                    </tr>
                </tfoot>
            </table>
        </main>
        <div id="footer" class="container bg-white">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

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
    <!-- TODO JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        const logout = document.getElementById("btnLogout");
        logout.addEventListener("click", logoutUser);

        $(document).ready(function () {
            $('#example').DataTable();
        });

        function logoutUser() {
            window.location.href = "?logout";
        }
    </script>
</body>

</html>