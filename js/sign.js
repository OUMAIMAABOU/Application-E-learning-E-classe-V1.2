
function validation(){
	let email = document.getElementById('email').value;
    let nom = document.getElementById('nom').value;
    let password = document.getElementById('password').value;
    let cpassword = document.getElementById('cpassword').value;

	
       if ( email == ""){
		document.getElementById('idemail').innerHTML=" Please fill the email Please!";
		return false;
	   }
	   if ( nom == ""){
		document.getElementById('idnom').innerHTML=" fill the name Please!";
		return false;
	   }
	   if ( password == ""){
		document.getElementById('idpassword').innerHTML="  fill the password Please!";
		return false;
	   }
      if ((password.length <6)  ||  (password.length >12)) {
        document.getElementById('idpassword').innerHTML ="user password should be between 9 to 15 characters! "
        return false;
      }
      
	   if ( cpassword == ""){
		document.getElementById('idcpassword').innerHTML="  fill the confirme password Please!";
		return false;
	   }
    
     if (password!= cpassword) {
        document.getElementById('idcpassword').innerHTML ="Password does'nt Match!"
        return false;
      }
    if(!validateEmail(email)) {
        document.getElementById('idemail').innerHTML="Invalid email ";
        return false


    } 


}
function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    

    
    


