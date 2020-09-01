window.onload = function() {
        
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
            alert("Muito obrigado pelo seu contacto")
        )
                
    }
}