/*
Creating an HTML5 enhanced responsive-ready contact form, with custom javascript feature detection
www.toddmotto.com
*/
function checkForm() {

	// Test if HTML5 is supported
	var inputs = document.createElement('input');
	var supports = {};
	supports.required  = 'required' in inputs;
	
	// Fallback if HTML5 is not supported
	if(!supports.required) {
		
		 reise = document.getElementById("reise").value;
		 name = document.getElementById("name").value;
		 email = document.getElementById("email").value;
		 tel = document.getElementById("tel").value;
		 message = document.getElementById("message").value;
		 
		 if (name == "")
		 {
		 document.getElementById("name").select();
		 document.getElementById("name").focus();
		 return false;
		 }
		 else if (tel == "")
		 {
		 document.getElementById("tel").select();
		 document.getElementById("tel").focus();
		 return false;
		 }
		  else if (reise == "")
		 {
		 document.getElementById("reise").select();
		 document.getElementById("reise").focus();
		 return false;
		 }
		 else if (email == "")
		 {
		 document.getElementById("email").select();
		 document.getElementById("email").focus();
		 return false;
		 }
		 else if (message == "")
		 {
		 document.getElementById("message").select();
		 document.getElementById("message").focus();
		 return false;
		 }
		 if (!checkEmail(email))
		 {
		 alert('E-Mail ist ungültig.');
		 return false;
		 }
	}
	alert("Anfrage übermittelt. Vielen Dank.");
	return true;
}

function checkEmail(inputvalue) {
	var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return pattern.test(inputvalue);
}
 
