console.log("Estoy en el indox.js");
window.onload = loadAllEmployees();


// * CONSTANTES
const logout = document.getElementById("btnLogout");
const trEmployee = document.getElementsByClassName("trEmployee");
const allEmployees = [];

logout.addEventListener("click", logoutUser);


// * FUNCIONES
function logoutUser() {
    window.location.href = "?logout";
}

function displayEmployeePage(idUser) {
    window.location.href = './employee.php?id=' + idUser + '';
}

function loadAllEmployees() {
    // console.log("ESTOY EN LOADALLEMPLOYEES");

    fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
        .then(response => response.json())
        .then(data => {
            renderAllEmployees(data);
        });
}
// ! FUNCION DE EDITAR
// function editBtn(e) {
//     console.log("estoy en editBTN");
//     e.preventDefault();
// }

function dispayAlertDelete() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = './dashboard.php';
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}
// !FUNCION EN PROCESO DE QUE FUNCIONE
function dispayAlertDeleteAjax() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: 'delete.php',
                dataType: 'json',
                data: { id: "1" }, // userId

                success: function (response) {
                    console.log("eoooo");
                    if (!('error' in response)) {
                        console.log(response);
                        Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                    }
                    else {
                        console.log(response.error);
                    }

                    // location.href = './dashboard.php';
                }
            });
        }
    });



}

function renderAllEmployees(employees) {
    // console.log("HOLA ESTOY EN EL RENDER");
    // console.log(employees);

    if (employees.length >= 0) {
        const tableBody = document.getElementById("tbody");

        for (let i = 0; i < employees.length; i++) {

            // console.log(employees[i]);          

            let tableRow = document.createElement("tr");
            tableRow.className = "tablaMain";
            // tableRow.setAttribute("onclick", 'displayEmployeePage("'+employees[i].id+'")')
            tableRow.innerHTML = `
                <td>
                    ${employees[i].name}
                </td>
                <td>
                    ${employees[i].lastName}
                </td>
                <td>
                    ${employees[i].gender}
                </td>
                <td>
                    ${employees[i].age}
                </td>
                <td>
                    <form >
                        <button type="button" class="btn btn-outline-success" onclick="displayEmployeePage(${employees[i].id})">
                            <i class="fa-solid fa-user"></i>
                        </button>
                        <button id="deleteBTN" type="button" class="btn btn-outline-danger" onclick="">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                        
                </td>
            </tr>
            `
            tableBody.appendChild(tableRow);
        }
    }
}

