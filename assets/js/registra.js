$(document).ready(function() {
    $("#btnRegistrar").click(function(e) {
        e.preventDefault();
        //alert("Registrado correctamente");
        agregarDato();
    });


    async function agregarDato() {
        const datos = new FormData(document.getElementById('registro_pro'));

        await fetch('assets/data/registra.php', {
            method: 'POST',
            body: datos
        })

        .then(response => response.json())
            .then(response => {
                //console.log(response.data);
                if (response.dato == 'ok') {
                    alert("Producto registrado correctamente");
                    location.href = "registro_pro.html";

                } else {
                    alert("Producto no registrado");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});