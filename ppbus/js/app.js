let nome = document.querySelector("#nome");
let email = document.querySelector("#email");
let simnao = document.querySelector('input[name=simnao]:checked').value;
let opiniao = document.querySelector("#opiniao").value;

$("#btnenviar").click(function(e){
    e.preventDefault();
    let comentform = $("#formcoment").serialize();
    $.ajax({
        url: "processcoments.php",
        method: "post",
        data: comentform,
        success: function(){
            alertify.confirm("This is a confirm dialog.",
                function(){
                    alertify.success('Ok');
                },
                function(){
                    alertify.error('Cancel');
                }
            );
        }
    });
})
