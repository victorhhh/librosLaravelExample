$(document).ready(function() {
    $.ajax({
        url: "http://192.168.100.9:8080/terror"
    }).then(function(data) {
        var obj = JSON.parse(data);
        console.log(obj[0].titulo);
        for(var i = 1; i<3; i++){
            $("#terror").append("<ul><li id='titulo"+i+"'><h3>"+obj[i-1].titulo+"</h3></li><li id='autor"+i+"'>"+obj[i-1].autor+"</li><li id='editorial"+i+"'>"+obj[i-1].editorial+"</li><li id='isbn"+i+"'><strong><em>"+obj[i-1].isbn+"</em></strong></li><li id='genero"+i+"'>"+obj[i-1].genero+"</li></ul>");
        }


    });
    $.ajax({
        url: "http://192.168.100.98080/ciencia"
    }).then(function(data) {
        var obj = JSON.parse(data);
        for(var i =1; i<3;i++){
            $("#ciencia").append("<ul><li id='titulo"+i+"'><h3>"+obj[i-1].titulo+"</h3></li><li id='autor"+i+"'>"+obj[i-1].autor+"</li><li id='editorial"+i+"'>"+obj[i-1].editorial+"</li><li id='isbn"+i+"'><strong><em>"+obj[i-1].isbn+"</em></strong></li><li id='genero"+i+"'>"+obj[i-1].genero+"</li></ul>");

        }
    });
    $.ajax({
        url: "http://192.168.100.9:8080/programacion"
    }).then(function(data) {
        var obj = JSON.parse(data);
        for(var i =1; i<3;i++){
            $("#programacion").append("<ul><li id='titulo"+i+"'><h3>"+obj[i-1].titulo+"<h3></li><li id='autor"+i+"'>"+obj[i-1].autor+"</li><li id='editorial"+i+"'>"+obj[i-1].editorial+"</li><li id='isbn"+i+"'><strong><em>"+obj[i-1].isbn+"</em></strong></li><li id='genero"+i+"'>"+obj[i-1].genero+"</li></ul>");

        }
    });
    $.ajax({
        url: "http://192.168.100.9:8080/base"
    }).then(function(data) {
        var obj = JSON.parse(data);
        for(var i =1; i<3;i++){
            $("#base").append("<ul><li id='titulo"+i+"'><h3>"+obj[i-1].titulo+"</h3></li><li id='autor"+i+"'>"+obj[i-1].autor+"</li><li id='editorial"+i+"'>"+obj[i-1].editorial+"</li><li id='isbn"+i+"'><strong><em>"+obj[i-1].isbn+"</em></strong></li><li id='genero"+i+"'>"+obj[i-1].genero+"</li></ul>");

        }
    });
    $.ajax({
        url: "http://192.168.100.9:8080/historia"
    }).then(function(data) {
        var obj = JSON.parse(data);
        for(var i =1; i<3;i++){
            $("#historia").append("<ul><li id='titulo"+i+"'><h3>"+obj[i-1].titulo+"</h3></li><li id='autor"+i+"'>"+obj[i-1].autor+"</li><li id='editorial"+i+"'>"+obj[i-1].editorial+"</li><li id='isbn"+i+"'><strong><em>"+obj[i-1].isbn+"</em></strong></li><li id='genero"+i+"'>"+obj[i-1].genero+"</li></ul>");

        }
    });

});









/*
 <li class="video-id">id: </li>
            <li class="video-titulo">titulo: </li>
            <li class="video-descripcion">descripción:</li>
            <li class="video-idus">id del usuario: </li>
 */