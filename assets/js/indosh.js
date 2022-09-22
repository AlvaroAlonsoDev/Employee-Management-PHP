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

function displayEmployeePage(idUser){
    
    window.location.href = 'employee.php?' + idUser + '';
}

function loadAllEmployees() {
    // console.log("ESTOY EN LOADALLEMPLOYEES");

    fetch("./library/employeeController.php?action=listEmployees", { method: "GET" })
        .then(response => response.json())
        .then(data => {            
            renderAllEmployees(data);
        });
}

function renderAllEmployees(employees){
    // console.log("HOLA ESTOY EN EL RENDER");
    // console.log(employees);

    if(employees.length >= 0){
        const tableBody = document.getElementById("tbody");

        for (let i = 0; i < employees.length; i++){
            
            // console.log(employees[i]);          

            let tableRow = document.createElement("tr");
            tableRow.className = "tablaMain";
            tableRow.setAttribute("onclick", 'displayEmployeePage("'+employees[i].id+'")')
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
                    <button type="button" class="btn btn-outline-success">
                        <i class="fa-solid fa-user-pen"></i>
                    </button>
                </td>
            </tr>
            `
            tableBody.appendChild(tableRow);
        }
    }
}

