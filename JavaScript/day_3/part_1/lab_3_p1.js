//Login System

let userName = "admin"
let password = "421$$"

var nameEnteredByUser = prompt("Username :")
var pwEnteredByUser = prompt("Password :")


if (nameEnteredByUser == userName && pwEnteredByUser == password) {
    alert("Welcome login success!")
} else {
    if (nameEnteredByUser != userName) {
        alert("Incorrect username!")
    } else if (pwEnteredByUser != password) {
        alert("Incorrect password!")
    }
}