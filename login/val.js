/*User id Validation*/
function valId(){
	var x = document.getElementById("u_id").value;
	if(x.length<=0){
		alert("Enter a User ID.");
		return false;
	}
}


function vallId(){
	var y = document.getElementById("u_id").value;
	if(y == "")
	{
		alert("User id cannot be empty");
		window.location.href='index.php?success';
		exit(0);
		return false;
		
	}
}
/*Name Validation*/
function valName(){
	var x = document.getElementById("na").value;
	var pat= /[a-z][a-z][a-z]/i
	var res=pat.test(x);
	if(x.length<3)
		alert("Enter valid name");
	if(!res)
		alert("Enter Valid Name");
}
function valAge(){
	var x = document.getElementById("pa").value;
	if(x<16 || x>70)
		alert("Invalid Age");
	
}
function checkEmail() {

    var email = document.getElementById('mail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
	}
    return false;
 }

function valMob(){
	var y = document.getElementById("ph").value;
	if(y.length!=10)
	{
		alert("Mobile Number Length Invalid");
	}
	var x = document.getElementById("ph").value;
	var pat= /[7-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/
	var res=pat.test(x);
	if(!(res))
	{
			alert("Mobile Number Invalid");
	}
	
}