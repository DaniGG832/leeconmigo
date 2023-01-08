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

          <div x-data="provinciasMap" class="pb-5 ">

            {{-- {{Request::getQueryString()}} --}}
            {{-- {{Request::input('sortBy')}} --}}
            {{-- {{isset($_GET["sortBy"])}} --}}

            <form id="provincias" action="{{route('librerias.index')}}">


              <select x-on:change="enviarFormulario" name="provincia" id="provincia" class="px-12 border border-blue-200 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-300 block  p-2.5 ">


                <option selected disabled value="">Seleccionar Provincia :</option>

                <option value="">Todas</option>

                @foreach ($provincias as $provincia)
                <option {{Request::input('provincia')==$provincia->id ? 'selected' : ''}} value="{{$provincia->id}}">{{$provincia->nombre}}</option>

                @endforeach

              </select>

            </form>

          </div>

          {{-- <p id="theError"></p> --}}
          <div x-data="librerias" class="flex xl:flex-row flex-col-reverse" style="min-height: 25em">

            <div class="xl:w-2/3">



              <section class="relative bg-blueGray-50 ">

                <div class="w-full pr-2">
                  <div class="relative flex flex-col min-w-0 break-words w-full mb-4 shadow-lg rounded 
                  bg-blue-700 text-white">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                      <div class="flex flex-wrap items-center mb-3">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                          <h3 class="font-semibold text-lg text-white">Librerias

                            <span>de: Cadiz</span>

                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="block w-full overflow-x-auto rounded-t">
                      <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                          <tr>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-300 text-blue-800 border-blue-700">Nombre</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-300 text-blue-800 border-blue-700">teléfono</th>
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-300 text-blue-800 border-blue-700">Ubicación</th>
                            {{-- <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-300 text-blue-800 border-blue-700">Web</th> --}}
                            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blue-300 text-blue-800 border-blue-700"></th>
                          </tr>
                        </thead>

                        <tbody x-data="libreria">

                          {{-- {{$librerias->sortBy('provincia_id.provincia.nombre')}} --}}
                          {{-- {{$librerias->groupBy('provincia_id')}} --}}
                          @foreach ($librerias as $libreria)
                          {{-- {{$libreria}} --}}
                          <tr class="mt-1 border">
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
                              <button x-on:click="ventanaEmergente({{$libreria}},'{{$libreria->provincia->nombre}}')">
                                <img src="{{$libreria->img ? asset($libreria->img) : asset('img/el-principito.jpg')}}" class="h-12 w-12 bg-white rounded-t border" alt="...">
                              </button>
                              <span class="ml-3 font-bold text-white"> {{$libreria->nombre}} </span></th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$libreria->telefono}}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$libreria->ciudad}} ({{$libreria->provincia->nombre}})</td>
                            {{-- <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$libreria->web}}</td> --}}
                            <td class="border-t-0 px-3 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                              <button class="hover:underline" x-on:click="ventanaEmergente({{$libreria}},'{{$libreria->provincia->nombre}}')">Mas información.</button>

                            </td>


                          </tr>
                          @endforeach

                          {{-- TODO: Comunicacion ventanas para mostrar la libreria --}}


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </section>



            </div>
            <div class="xl:w-1/3 w-full h-96 xl:h-auto flex flex-col" style="max-height: 45em">

              <div class="z-10 w-full h-full" id="map"></div>
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

      Alpine.data("provinciasMap", () => ({

        enviarFormulario(e) {
          //alert(this);
          e.target.parentNode.submit();
          console.log(e.target.parentNode);
        }
      , }));


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

            /*   map.fitBounds([
                [position.coords.latitude, position.coords.longitude]
              ]).setZoom(9);  */

            var Posicionlat = position.coords.latitude;
            const Posicionlng = position.coords.longitude;

            console.log(position.coords);
            marker = L.marker([Posicionlat, Posicionlng]).addTo(map);

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





          /* marker = L.marker([40.4165000, -3.7025600]).addTo(map);
          marker2 = L.marker([41.4165000, -4.7025600]).addTo(map); */

          //console.log(marker.getLatLng().lat);
          //console.log(marker.getLatLng().lng);

          /* marker de manera dinamica */
          this.librerias.map(point => {
            console.log(point);
            marker = L.marker([point.lat, point.lng], {
              icon: iconoLibreria
            }).addTo(map).bindPopup(
              `<div class="flex flex-col justify-center">
              <h1 class="w-44 text-blue-800 text-center italic font-medium">${point.nombre}</h1>
              <img src="${point.img ?? 'https://cdn.pixabay.com/photo/2017/01/13/13/11/book-1977235_960_720.png'}" class=" h-44 bg-white rounded-t" alt="Imagen Librería">
              </div>
              `
            );

            marker.bindTooltip(`<h1 class="text-blue-800 italic font-medium">${point.nombre}</h1>`, {
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



          if (navigator.geolocation) {
            console.log('Browser has Geolocation');
            navigator.geolocation.getCurrentPosition(positionSuccess, positionError);


          } else {
            console.log('Browser do not support Geoloation');

          }

          /* obtener el parametro de la url */
          console.log(window.location.search);
          
          //Creamos la instancia
          const urlParams = new URLSearchParams(window.location.search);

          //Accedemos a los valores
          var provincia = urlParams.get('provincia');

          console.log(provincia);
          if(provincia){
            console.log('si');
              /* centrar mapa al pasarles los puntos */
              console.log(...this.librerias.map(point => [point.lat, point.lng]));

              map.fitBounds([
                ...this.librerias.map(point => [point.lat, point.lng])
              ]);


          }else{

            map.locate({
            setView: true
            , maxZoom: 9
          });
          
          }


          

          /*   map.fitBounds([
              [marker.getLatLng().lat, marker.getLatLng().lng]
            ]); */

          //marker.addEventListener('click', name);

          /* ubicar el mapa en la localizacion del navegador */

          




        }






      }));
    });

  </script>
</x-invitado>
