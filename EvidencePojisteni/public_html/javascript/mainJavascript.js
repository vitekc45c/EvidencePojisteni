/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
let content = document.getElementById();
fetch();
let form = document.getElementById('addClient');
let firstName = form.elements['firstName'];
let firstName = firstName.value;
let email = form.elements['email'];
let email = email.value;
let address = form.elements['address'];
let address = address.value;
let lastName = form.elements['lastName'];
let lastName = lastName.value;
let phoneNumber = form.elements['phoneNumber'];
let phoneNumber = phoneNumber.value;
let city = form.elements['city'];
let city = city.value;
let postalCode = form.elements['postalCode'];
let postalCode = postalCode.value;

var formdata = 'firstName' + firstName + '&email' + email + '&address' + address + '&lastName' + lastName + '&phoneNumber' + phoneNumber + '&city' + city + '&postalCode' + postalCode;
$.ajax({
		 type: "POST",
		 url: "",
		 data: formdata,
		 cache: false,
		 success: function(html) {
		  alert(html);
		 }
	});