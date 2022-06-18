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
           if(simnao == "sim" ){
            alertify
            .alert("Ficamos felizes que você achou útil! Estaremos sempre aqui para você!");
           } else{
            alertify
            .alert("Lamentamos por isso! Tentaremos melhorar!");
           }
        }
    }); 
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