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

         enviarFormulario(e) {
            
            confirmar = confirm('¿ Esta seguro que desea borrar ?');

            console.log(confirmar);

            if (!confirmar) {

                console.log('cancelado');
                e.preventDefault();
            }

        }, 

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

    Alpine.data("critica", () => ({
        enviarFormulario(e) {
            
            confirmar = confirm('¿ Esta seguro que desea borrar ?');

            console.log(confirmar);

            if (!confirmar) {

                console.log('cancelado');
                e.preventDefault();
            }

        }, 
    }));


    
    Alpine.data("footer", () => ({
        privacidad(pp) {
            
            window.open("");
        
        }, 
        licencia(e) {
            console.log(e);
            alert(e);
        }, 
        nosotros(e) {
            console.log(e);
            alert(e);
        }, 
    }));

    Alpine.data("libreria", () => ({
        ventanaEmergente(datos,provincia) {

            console.log(provincia);
            parametros = "scrollbars=yes,resizable=yes,top=200,left=300,width=400,height=500";
            console.log(datos);
            myWindow = window.open("","",parametros);
            myWindow.document.write(`
            <script src="https://cdn.tailwindcss.com"></script>
            
            <div class="h-screem text-blue-900 flex flex-col  justify-items-center">
            <div class=" w-screen flex justify-center my-2">
            <img src="${datos.img ?? 'https://cdn.pixabay.com/photo/2017/01/13/13/11/book-1977235_960_720.png'}" class="h-auto w-40">
            </div>
            <h1 class="text-center">${datos.nombre} </h1>
            <p class="text-center"><span class="text-blue-400">Telefono: </span> ${datos.telefono ?? '...'}</p>
            <p class="text-center"><span class="text-blue-400">Email: </span> ${datos.email ?? '...'}</p>
            <p class="text-center"><span class="text-blue-400">web: </span> ${datos.webs ?? '...'}</p>
            <p class="text-center"><span class="text-blue-400">Dirección: </span></p>
            <p class="text-center">${datos.direccion ?? '...'} - ${datos.cod_postal  ?? '...'}</p>
            <p class="text-center">${datos.ciudad} ( ${provincia} ?? '...' )</p>
        
            
            </div>
            

            `);
        }, 
        
    }));




});
