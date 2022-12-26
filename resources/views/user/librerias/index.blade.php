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



        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("alpine:init", () => {
      Alpine.data("librerias", () => ({


        librerias: [{
            id: 1
            , name: "libreria1"
            , lat: 40.4167000
            , lng: -3.7025600
          }
          , {
            id: 2
            , name: "libreria2"
            , lat: 40.4165000
            , lng: -3.7026600
          }
          , {
            id: 3
            , name: "libreria3"
            , lat: 40.4165000
            , lng: -3.7025600
          }
        , ],

        init: function() {

          console.log(this.librerias);
          map = L.map('map').setView([40.4165000, -3.7025600], 6);


          function name() {
            alert(this);
            console.log(this);
          }
          L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19
            , attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
          }).addTo(map);




          marker = L.marker([40.4165000, -3.7025600]).addTo(map);
          marker2 = L.marker([41.4165000, -4.7025600]).addTo(map);

          //console.log(marker.getLatLng().lat);
          //console.log(marker.getLatLng().lng);

          /* marker de manera dinamica */
          this.librerias.map(point => {
            console.log(point);
            marker = L.marker([point.lat, point.lng]).addTo(map).bindPopup(point.id+' '+point.name);


            marker.on('click', function() {
              console.log(point);
            })
            /* marker.on('mouseover', function() {
              marker.openPopup();
            }) */
          });



          /* centrar mapa al pasarles los puntos */
          console.log(...this.librerias.map(point => [point.lat, point.lng]));

          map.fitBounds([
            ...this.librerias.map(point => [point.lat, point.lng])
          ]);


          /*   map.fitBounds([
              [marker.getLatLng().lat, marker.getLatLng().lng]
            ]); */

          //marker.addEventListener('click', name);

          circle = L.circle([40.4165000, -3.7095600], {
            color: 'blue'
            , fillColor: '#f03'
            , fillOpacity: 0.4
            , radius: 500
          }).addTo(map);

          //marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
          circle.bindPopup("I am a circle.");

        }





      }));
    });


  </script>
</x-invitado>
