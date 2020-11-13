$(document).ready(function() {

    $("#btnLoginDos").click(function(e) {
        e.preventDefault();

        var user = $("#inputUserDos").val().trim();
        var pass = $("#inputPasswordDos").val().trim();
        var name = $("#inputNombreDos").val().trim();
        var correo = $("#inputCorreoDos").val().trim();

        console.log(user + " " + pass + " " + name + " " + correo);

        insertarDato();
    });


    async function insertarDato() {
        const datos = new FormData(document.getElementById('formularioDos'));

        await fetch('assets/data/register.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
        .then(response => {
            //console.log(response.data);
            if(response.dato=='ok'){
                location.href="index.html"
            }
            else{
                alert("Datos Incorrectos")
            }
            })
        .catch(err => {
            console.log(err);
        });
    }
});