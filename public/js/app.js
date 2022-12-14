
 
/* Previsualizar imagen antes de enviar un formulario */

if(document.getElementById('Imagen')){

  //console.log('formulario');
  
  
  var div = document.getElementById('pre');
  
  let input = document.getElementById('Imagen');
  

  console.log(input.defaultValue);
  console.log(input);

  input.addEventListener('change', function(e) {
    
        console.log(this.files);
    

    if (this.files && this.files[0]) {
      
      console.log('si');
        var reader = new FileReader();

        reader.readAsDataURL(input.files[0]);

        //console.log(reader);

        reader.onload = function(e) {
          //console.log(e.target.result);

          div.innerHTML = ("<label for='Imagen'><img class='rounded-lg' src=" + e.target.result + " style= 'height: 7rem' for='Imagen'/></label>" +
          '<br><label class="block mb-2 text-md font-medium text-gray-800 ml-2 " for="Imagen">Click en la imagen para seleccionar otra.</label>'
          );

        }
        
      } else {
        console.log('no');

        if (this.defaultValue) {
          div.innerHTML = ("<label for='Imagen'><img class='rounded-lg' src=" + this.defaultValue + " style= 'height: 7rem' for='Imagen'/></label>" +
          '<br><label class="block mb-2 text-md font-medium text-gray-800 ml-2 " for="Imagen">Click en la imagen para seleccionar otra.</label>');
          
        } else {
          
          div.innerHTML = ('<label class="block mb-2 text-md font-medium text-gray-600 border border-blue-200 w-36 h-28 mt-1 pt-1 pl-1 bg-gray-50 rounded-lg border border-gray-300" for="Imagen">click aqui.</label>');
        }
        
      }
      
    });
  }
    

  
  

    
    