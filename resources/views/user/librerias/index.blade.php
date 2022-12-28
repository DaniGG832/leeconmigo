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

          <div x-data="librerias" class="flex flex-row">
            <div class="w-96 h-96 m-3 border bg-blue-200"></div>
            <div class="w-96 h-96 m-3" id="map"></div>
          </div>

          {{-- {{$librerias}} --}}

          <h1>JnjSite.com: Javascript Geolocation</h1>
          <p>Your current location is latitude <span id="spanLatitude"></span> degrees and longitude <span id="spanLongitude"></span> degrees.</p>
          <p id="theError"></p>

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
