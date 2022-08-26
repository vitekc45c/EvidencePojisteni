/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
function addClient(){
var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost:5432",
  user: "admin",
  password: "12345",
  database: "clientDatabase"
});
con.connect(function(err) {
  if (err) throw err;
console.log("connected");
});
var firstName = document.getElementById('firstName').value;
var email = document.getElementById['email'].value;
var address = document.getElementById['address'].value;
var lastName = document.getElementById['lastName'].value;
var phoneNumber = document.getElementById['phoneNumber'].value;
var city = document.getElementById['city'].value;
var postalCode = document.getElementById['postalCode'].value;
var sql = "INSERT INTO accounts(firstName, email, address, lastName, phoneNumber, city, postalCode) VALUES ('"+firstName+"', '"+email+"', '"+address+"', '"+lastName+"', '"+phoneNumber+"', '"+city+"', '"+postalCode+"')";
con.query(sql, function (err, result) {
    if (err) {
        throw err;
    }
    console.log(result.affectedRows + " record(s) updated");
  });
}