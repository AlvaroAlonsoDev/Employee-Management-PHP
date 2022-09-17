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
            background: #fbfbfd;
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
                    <a href="#"><img src="../resources\img\addlogo.png" alt="Add User" width="30" class="me-5"/></a>
                    <button id="btnLogout" type="button" class="btn btn-primary">Log out</button>
                </div>
            </header>
        </div>
        <main id="dashboard">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009-09-15</td>
                        <td>$205,500</td>
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008-12-13</td>
                        <td>$103,600</td>
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
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

    <!-- <div class="content">
		<header>
			<h2>Welcome <?php echo $_SESSION['user']; ?><h2>
			<a href="?logout">Log out</a>	
		</header>

		<main>
			<h3>Some user actions ......</h3>
		</main>
	</div> -->

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