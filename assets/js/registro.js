$(document).ready(function() {
    $("#btnLoginDos").click(function(e) {
        e.preventDefault();
        insertarDato();
    });


    async function insertarDato() {
        const datos = new FormData(document.getElementById('formularioDos'));
        await fetch('assets/data/register.php', {
                method: 'POST',
                body: datos
            }).then(response => response.json()).then(response => {
                // console.log(response);
                if (response.dato == 'ok') {
                    location.href = "index.html"
                } else {
                    alert("Datos Incorrectos")
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});