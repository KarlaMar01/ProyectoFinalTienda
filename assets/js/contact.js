$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        enviarMensaje();
    });

    async function enviarMensaje() {
        const data = new FormData(document.getElementById("contact"));
        await fetch("assets/data/contact.php", {
            method: "POST",
            body: data,
        }).then(response => response.json()).then(response => {
            // console.log(response);
            if (response.datos == "ok") {
                document.getElementById("msg").innerHTML = "<p style='color:rgb(0,255,0)'>Mensaje enviado exitosamente!</p>";
                $('#contact').trigger('reset');
            } else {
                document.getElementById("msg").innerHTML = "<p style='color:rgb(255,0,0)'>" + response.datos + "</p>";
            }
        }).catch(err => {
            console.log(err);
        });
    }

});