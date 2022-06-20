function mudarTela(url){
    $.ajax({
        url: url,
        success: (e) => {
            $(".container").children().hide()
            $(".container").html(e);
        }
    })
}

$("#formcoment").submit(function(e){
    
    let nome = document.querySelector("#nome");
    let email = document.querySelector("#email");
    let simnao = document.querySelector('input[name=simnao]:checked').value;
    let opiniao = document.querySelector("#inputOpiniao").value;
    let comentform = $("#formcoment").serialize();
    $.ajax({
        url: "processcoments.php",
        method: "post",
        data: comentform,
        success: function(){
            let existe = false;
            for(i = 0; i < listaemail.length; i++){
                if(listaemail[i] == email.value){
                    existe = true;
                    break;
                } 
            }
            
            if(!existe){
                listaemail.push(email.value);
                if(simnao == "sim" ){
                    alertify
                    .alert("Ficamos felizes que você achou útil! Estaremos sempre aqui para você!");
                   } else{
                    alertify
                    .alert("Lamentamos por isso! Baixa o moovit então!");
                   }
            } else{
                if(simnao == "sim" ){
                    alertify
                    .alert("Ficamos felizes que você achou útil! Estaremos sempre aqui para você!");
                   } else{
                    alertify
                    .alert("Estamos fartos da sua opinião!");
                   }
            }
           
        }
    });
    e.preventDefault();
    return false;
})

$(".comusar").click(() => {
    mudarTela("comousar.php");
})

$(".onibus").click(() => {
    mudarTela("onibus.php");
})
$(".inicio").click(() => {
    mudarTela("telainicial.php");
})
$("#opiniao").click(() => {
    mudarTela("coments.php");
})