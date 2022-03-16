
const formindex = document.getElementById('formindex');

const emailindex = document.getElementById('emailindex');
const passwordindex = document.getElementById('passwordindex');

console.log(formindex);
formindex.addEventListener('submit', checkInputs);




function checkInputs(e) {
   
    if(!(passwordindex.value.length >6  && passwordindex.value.length <12)) {
        e.preventDefault();
        Swal.fire({
            icon: 'error',
            title: 'incorrect  password size!',
           
          })
          
        }

}
