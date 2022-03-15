

const email = document.getElementById('email').value;
const password = document.getElementById('password').value;

form.addEventListener("click", checkInputs() )


function checkInputs() {

    if(password.length > 2 || email.length >16) {
        
        Swal.fire({
            icon: 'error',
            title: 'rendre un texte plus court!',
           
          })
}

}
