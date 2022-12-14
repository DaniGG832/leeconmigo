document.addEventListener("alpine:init", () => {
    Alpine.data("avatar", () => ({
        open: true,
 
        UserAvatar: imgAvatar.src,

        pre: document.getElementById("pre"),

        imgAvatar : document.getElementById("imgAvatar"),

        inputAvatar: document.getElementById("avatar"),

        cambioAvatar() {
            let input = document.getElementById("avatar");

            if (input.files && input.files[0]) {
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

        prueba() {
            alert("prueba");
        },
    }));
});
