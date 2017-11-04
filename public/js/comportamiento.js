$(document).ready(function() {
    $.ajax({
        url: "http://127.0.0.1:8000/view/1"
    }).then(function(data) {
        var obj = JSON.parse(data);
        $('.titulo1').append(obj[0].titulo);
        $('.titulo2').append(obj[1].titulo);
    });
});









/*
 <li class="video-id">id: </li>
            <li class="video-titulo">titulo: </li>
            <li class="video-descripcion">descripción:</li>
            <li class="video-idus">id del usuario: </li>
 */