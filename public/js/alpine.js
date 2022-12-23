document.addEventListener("alpine:init", () => {
    /* editar perfil */
    Alpine.data("avatar", () => ({
        open: true,

        file: "",
        mensaje: document.getElementById("mensaje"),
        alIniciar: function () {
            /* console.log(mensaje.value);
            console.log(mensaje.value.length); */
            if (mensaje.value.length) {
                console.log("si");
                this.open = !this.open;
            }
        },

        init: () => {
            //console.log(1);
        },

        UserAvatar: imgAvatar.src,

        pre: document.getElementById("pre"),

        imgAvatar: document.getElementById("imgAvatar"),

        inputAvatar: document.getElementById("avatar"),

        cambioAvatar() {
            console.log(mensaje.value);
            let input = document.getElementById("avatar");

            console.log(input);
            if (input.files && input.files[0]) {
                console.log(this.file);
                console.log(input.files[0].size);

                console.log("si");
                var reader = new FileReader();

                reader.readAsDataURL(input.files[0]);

                //console.log(reader);

                reader.onload = function (e) {
                    //console.log(e.target.result);

                    console.log(imgAvatar.src);

                    imgAvatar.src = e.target.result;

                    /*   pre.innerHTML =
                                              "<img id='pre' class='rounded-full h-32 w-32 mx-auto' src=" +
                                              e.target.result +
                                              " alt='user avatar'/>" +
                                              "<span class='text-gray-500 px-4'>click para cambiar </span>"; */
                };
            } else {
                console.log("no");
                console.log(this.UserAvatar);
                imgAvatar.src = this.UserAvatar;
            }
        },

        /* prueba() {
            alert("prueba");
        }, */
    }));

    /* index foro  (abril modal si hay errores del servidor)*/

    Alpine.data("newPregunta", () => ({
        show: false,

        alIniciar(condicion = 0) {
            console.log(condicion);

            if (condicion) {
                this.show = true;
            }
        },

        /* enviar(e) {
            //e.preventDefault();
            //alert (e);
            form = document.getElementById(e.target.parentNode.parentNode.id);

        

            form.addEventListener('submit', function(e) {
                e.preventDefault();
            }
            );
            //console.log(e.target.parentNode.parentNode.id);
        }, */

        abrirModal() {
            this.show = true;
            document.body.scrollIntoView();
        },
        /* abrirVentana(){

            const windowFeatures = "left=200,top=200,width=500,height=700";
            establecerMensaje = function (mensaje) {
                console.log("Mensaje: " + mensaje);
            }

            const ventana = window.open("",'edit',windowFeatures );
            ventana.addEventListener("DOMContentLoaded", function () {
                console.log("Ventana abierta lista!");
                
              });
            
              ventana.document.write("<p>This is 'MsgWindow'. I am 200px wide and 100px tall!</p>");
        } */
        /* init: (condicion = 0) => {
            console.log(2);
        }, */
    }));

    /* enviar el formulario al cambiar el select
     */
    Alpine.data("ordenar", () => ({
        form: document.querySelector("#ordenar"),

        ordenar() {
            //alert(this);
            this.form.submit();
            //console.log(e);
        },
    }));
});
