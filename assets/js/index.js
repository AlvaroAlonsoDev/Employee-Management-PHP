console.log("Holi esto en index.js");

function displayAlert(icon, title, text) {

    Swal.fire({
        icon: icon,
        title: title,
        text: text
    });

}

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







