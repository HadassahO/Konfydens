	
	$(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var age = $("#age").val();
if (name == '' || age == '' ){
alert("Please fill all fields...!!!!!!");
} /*else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} */else {
$.post("http://192.168.43.76/register.php", {
name: name,
age: age

}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
});

