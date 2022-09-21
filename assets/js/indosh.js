console.log("hola estoy en el indox.js");

// * CONSTANTES
const logout = document.getElementById("btnLogout");
const trEmployee = document.getElementsByClassName("trEmployee");

logout.addEventListener("click", logoutUser);


// * FUNCIONES
function logoutUser() {
    window.location.href = "?logout";
}

function pruebaTest(){
    modalRegisterEmployee.className = "displayModal";
}

function displayEmployeePage(idUser){
    // console.log(idUser);
    window.location.href = 'http://localhost/assembler/Employee-Management-PHP/src/employee.php?' + idUser + '';
}



$(document).ready(function () {
    $('#example').DataTable();
});