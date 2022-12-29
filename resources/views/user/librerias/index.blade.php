<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Librerias asociadas') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200" style="min-height: 25em">


          <p id="theError"></p>
          <div x-data="librerias" class="flex xl:flex-row flex-col-reverse" style="min-height: 25em">
            
            <div class="xl:w-2/3">

              <section class="relative bg-blueGray-50 ">
                <div class="w-full pr-2">
                  <div class="relative flex flex-col min-w-0 break-words w-full mb-4 shadow-lg rounded 
                  bg-blue-700 text-white">
                    <div class="block w-full overflow-x-auto rounded-t">
                      <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                          <tr>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-800 text-blue-300 border-blue-700">Nombre</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-800 text-blue-300 border-blue-700">Direccion</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-800 text-blue-300 border-blue-700">ciudad</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-800 text-blue-300 border-blue-700">Código postal</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-800 text-blue-300 border-blue-700">Provincia</th>
                          </tr>
                        </thead>
                
                        <tbody>

                          @foreach ($librerias as $libreria)
                          <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                              <img src="{{$libreria->img ? asset($libreria->img) : asset('img/el-principito.jpg')}}" class="h-12 w-12 bg-white rounded-t border" alt="...">
                              <span class="ml-3 font-bold text-white"> {{$libreria->nombre}} </span></th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$libreria->direccion}}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                              {{$libreria->ciudad}}
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                              {{$libreria->cod_postal}}
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                              {{$libreria->provincia->nombre}}
                            </td>
                            
                            
                        
                          </tr>


                          @endforeach
                        
                
                          
                
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                    
                </section>


              
            </div>
            <div class="xl:w-1/3 w-full h-96 xl:h-auto flex flex-col">

              <div class=" w-full h-full" id="map"></div>
              <div class="flex flex-col text-center">
    
                <p class="text-xs">Su ubicación actual es <span id="spanLatitude"></span>, <span id="spanLongitude"></span> grados.</p>
              </div>
            </div>
          </div>
          
          {{-- {{$librerias}} --}}

          
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("alpine:init", () => {
      Alpine.data("librerias", () => ({


        librerias: {!!$librerias!!},

        urlIcono: "{!!asset('img/icon/icon-libro4.png')!!}",

        init: function() {


          /* icono personalizado */
          console.log(this.urlIcono);
          var iconoLibreria = L.icon({
            iconUrl: this.urlIcono
            , iconSize: [40, 50]
            , iconAnchor: [20, 50]
            , popupAnchor: [0, -30]
            
          });


          function positionSuccess(position) {
            console.log(position);

            map.fitBounds([
              [position.coords.latitude, position.coords.longitude]
            ]).setZoom(9);

            var Posicionlat = position.coords.latitude;
            const Posicionlng = position.coords.latitude;



            console.log('SUCCESS');
            document.getElementById('spanLatitude').innerHTML = position.coords.latitude;
            document.getElementById('spanLongitude').innerHTML = position.coords.longitude;
            console.log(position);

          }

          function positionError(error) {
            //alert('ERROR');
            switch (error.code) {
              case error.PERMISSION_DENIED:
                document.getElementById('theError').innerHTML = "User denied the request for Geolocation."
                break;
              case error.POSITION_UNAVAILABLE:
                document.getElementById('theError').innerHTML = "Location information is unavailable."
                break;
              case error.TIMEOUT:
                document.getElementById('theError').innerHTML = "The request to get user location timed out."
                break;
              case error.UNKNOWN_ERROR:
                document.getElementById('theError').innerHTML = "An unknown error occurred."
                break;
            }
          }




          var map = L.map('map').setView([40.4165000, -3.7025600], 9);


          //console.log(this.librerias);
          /* map = L.map('map').setView([40.4165000, -3.7025600], 9); */


          function name() {
            alert(this);
            console.log(this);
          }

          L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19
            , attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
          }).addTo(map);


          if (navigator.geolocation) {
            console.log('Browser has Geolocation');
            navigator.geolocation.getCurrentPosition(positionSuccess, positionError);


          } else {
            console.log('Browser do not support Geoloation');

          }


          /* marker = L.marker([40.4165000, -3.7025600]).addTo(map);
          marker2 = L.marker([41.4165000, -4.7025600]).addTo(map); */

          //console.log(marker.getLatLng().lat);
          //console.log(marker.getLatLng().lng);

          /* marker de manera dinamica */
          this.librerias.map(point => {
            console.log(point);
            marker = L.marker([point.lat, point.lng], {icon: iconoLibreria}).addTo(map).bindPopup(
              `<h1 class="bg-blue-200">${point.nombre}</h1>`
            );

            marker.bindTooltip('libreria ' + point.nombre, {
              opacity: 0.8
              , direction: 'center'
              , sticky: true
            }).addTo(map);

            marker.on('click', function() {
              console.log(point.id);
            })
            /* marker.on('mouseover', function() {
              marker.openPopup();
            }) */
          });


          /* ubicar el mapa en la localizacion del navegador */

           map.locate({
            setView: true
            , maxZoom: 10
          }); 

          
          /* centrar mapa al pasarles los puntos */
          /* console.log(...this.librerias.map(point => [point.lat, point.lng]));

          map.fitBounds([
            ...this.librerias.map(point => [point.lat, point.lng])
          ]); */

          /*   map.fitBounds([
              [marker.getLatLng().lat, marker.getLatLng().lng]
            ]); */

          //marker.addEventListener('click', name);

        

        

        }





      }));
    });

  </script>
</x-invitado>
