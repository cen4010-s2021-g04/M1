function validateFirstName(name) {
    return (name == '') ? 'No name has been entered' : ''
}

function validateLastName(name) {
    return (name == '') ? 'No name has been entered' : ''
}

var emailValid = document.getElementById("exampleInputEmail")
if (emailValid == '') emailValid.style.color = 'red'


// sets min date and sets max date as today
var datePicker = document.getElementById("DOB")
var year = new Date().getFullYear() - 120

datePicker.min = year + "-01-01"
// splits the date string so its only the mm-dd-yyyy
// "yyyy-mm-ddT00:00:00.000Z"
datePicker.max = new Date().toISOString().split("T")[0]