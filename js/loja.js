window.onload = function() {

    let btn = document.getElementById("allproducts");
    let Form = document.getElementById("Form");
    
    
    Form.onsubmit = function(e) {
        if(
            Form.name.value == "" ||
            Form.email.value == "" ||
            Form.text.value == ""
            ) {
                alert("Por favor preencha todos os campos")
                ;
                event.preventDefault();
            }
            else(
                alert("Iremos contactá-lo em breve")
            )
            
    }

       
     
    }