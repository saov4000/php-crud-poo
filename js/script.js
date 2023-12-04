
function confirmacad(){
    if(confirm("Tem certeza que deseja cadastrar?")){
        let nome = document.forms["cadastra"]["nome"].value;
        let sexo = document.forms["cadastra"]["sexo"].value;
        let cidade = document.forms["cadastra"]["cidade"].value;

        if (nome == "" || sexo == "" || cidade == "") {
            alert("Há campos não preenchidos!");
            return false
        }else{
            return true
        }
    }
}

function confirmaatu(){
    if(confirm("Tem certeza que deseja atualizar?")){
        let nome = document.forms["cadastra"]["nome"].value;
        let sexo = document.forms["cadastra"]["sexo"].value;
        let cidade = document.forms["cadastra"]["cidade"].value;

        if (nome == "" || sexo == "" || cidade == "") {
            alert("Há campos não preenchidos!");
            return false
        }else{
            return true
        }
    }
}

function confirmadel(v){
    if(confirm("Tem certeza que deseja excluir?")){
        document.location = './app/controller.php?id='+v+'&opcao=3'
    }else{

    }
}