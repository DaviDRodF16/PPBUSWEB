
<body>
<h1> PPBUS </h1>

    Aqui estão todos os ônibus que te levam ao Paulo Petrola! <br>

    <button class="linhaBtn" linha="101"> 101 BEIRA RIO </button> 
    <button class="linhaBtn" linha="092"> 092 ANTÔNIO BEZERRA/PAPICU/PRAIA DE IRACEMA </button> 
    <button class="linhaBtn" linha="051">051 GRANDE CIRCULAR I </button> 
    <button class="linhaBtn" linha="711"> 711 BARRA DO CEARÁ/ CAIS DO PORTO</button> 
    <button class="linhaBtn" linha="070"> 070 CUCA BARRA/ PARANGABA </button> 
    <button class="linhaBtn" linha="706">706 BARRA DO CEARÁ/CAIS DO PORTO</button> 
    <button class="linhaBtn" linha="055"> 055 CORUJÃO/ GRANDE CIRCULAR I</button> 
    <button class="linhaBtn" linha="016"> 016 CUCA BARRA/PAPICU </button> 
   

    <script src="js/jquery360.min.js"></script>
    <script>
        let listaOnibus = $(".linhaBtn");
        
        for(let i = 0; listaOnibus.length; i++){
            listaOnibus[i].onclick = () => {
                $.ajax({
                    url: "paradas.php",
                    data: "linha=" + listaOnibus[i].getAttribute("linha"),
                    method: "get",
                    success: (e) => {
                        $(".container").children().hide()
                        $(".container").html(e);
                    }
                })
            };
        }
    </script>
</body>
</html>