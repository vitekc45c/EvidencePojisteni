/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
function addInsurance(){
var mysql = require('mysql');
var con = mysql.createConnection({
  host: "localhost:5432",
  user: "admin",
  password: "12345",
  database: "clients"
});
con.connect(function(err) {
  if (err) throw err;
console.log("connected");
});
var type = document.getElementById('type').value;
var amount = document.getElementById['amount'].value;
var sql = "INSERT INTO insurances(type, amount) VALUES ('"+type+"', '"+amount+"')";
con.query(sql, function (err, result) {
    if (err) {
        throw err;
    }
    console.log(result.affectedRows + " record(s) updated");
  });
}