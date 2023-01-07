<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Te ayudamos a elegir el mejor libro ') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200" style="min-height: 25em">

          <div x-data="recomendador">

            <h2 class="font-bold">Selecciona los aspectos mas importantes para poder recomendar la mejor opción.</h2>
            <form id="formdata" x-on:submit="event.preventDefault();" x-on:change="formChange" action="{{route('recomendador')}}" method="post">
              @csrf
              @method("post")

              <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-3">

                <div>

                  <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 ">Autor</label>
                  <select id="autor" name="autor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($autores as $autor)

                    <option value="{{$autor->id}}">{{$autor->name}}</option>

                    @endforeach


                  </select>


                </div>

                <div>

                  <label for="ilustrador" class="block mb-2 text-sm font-medium text-gray-900 ">Ilustrador</label>
                  <select id="ilustrador" name="ilustrador_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($ilustradores as $ilustrador)

                    <option value="{{$ilustrador->id}}">{{$ilustrador->name}}</option>

                    @endforeach

                  </select>

                </div>

                <div>

                  <label for="editorial" class="block mb-2 text-sm font-medium text-gray-900">Editorial</label>
                  <select id="editorial" name="editorial_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($editoriales as $editorial)
                    <option value="{{$editorial->id}}">{{$editorial->name}}</option>

                    @endforeach

                  </select>

                </div>


                <div>

                  <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad recomendada</label>
                  <select id="edad" name="edad_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                    <option value="" class="text-red-900">Selecione una opción</option>


                    @foreach ($edades as $edad)
                    <option value="{{$edad->id}}">{{$edad->descripcion}}</option>

                    @endforeach

                  </select>

                </div>

                <div>

                  <label for="idioma" class="block mb-2 text-sm font-medium text-gray-900">Idioma</label>
                  <select id="idioma" name="idioma_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($idiomas as $idioma)
                    <option value="{{$idioma->id}}">{{$idioma->descripcion}} - {{$idioma->name}}</option>

                    @endforeach

                  </select>

                </div>

                <div>

                  <label for="encuadernacion" class="block mb-2 text-sm font-medium text-gray-900">Encuadernación</label>
                  <select id="encuadernacion" name="encuadernacion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($encuadernaciones as $encuadernacion)
                    <option value="{{$encuadernacion->id}}">{{$encuadernacion->name}}</option>

                    @endforeach

                  </select>

                </div>

                <div>

                  <label for="tema" class="block mb-2 text-sm font-medium text-gray-900 ">Tema</label>
                  <select id="tema" name="tema_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                    <option value="" class="text-red-900">Selecione una opción</option>

                    @foreach ($temas as $tema)

                    <option value="{{$tema->id}}">{{$tema->name}}</option>

                    @endforeach


                  </select>


                </div>

                <div>

                  <label for="ordenar" class="block mb-2 text-sm font-medium text-gray-900 ">Ordenar por:</label>
                  <select id="ordenar" name="ordenar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">


                    <option value="votaciones_avg_voto">Nota mas alta</option>
                    <option value="votaciones_count">Mas votos</option>
                    <option value="titulo">Ordenar por titulo</option>

                  </select>


                </div>
              </div>






              {{--  <button x-on:click="formRecomendar" type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Mostrar Resultados
              </button>
 --}}
            </form>
          

            <div x-html="resultado" class="mt-5 border-t">



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("alpine:init", () => {
      /* editar perfil */
      Alpine.data("recomendador", () => ({

        url: "{{ route('recomendador') }}"
        , resultado: '',


        init: () => {
          console.log(1);
        },

        async formRecomendar(e) {
            this.formChange();
          }


        , async formChange(e) {

          let data = {
            autor_id: document.getElementById('autor').value
            , ilustrador_id: document.getElementById('ilustrador').value
            , editorial_id: document.getElementById('editorial').value
            , edad_id: document.getElementById('edad').value
            , idioma_id: document.getElementById('idioma').value
            , encuadernacion_id: document.getElementById('encuadernacion').value
            , tema_id: document.getElementById('tema').value
            , ordenar: document.getElementById('ordenar').value,

          };


          let response = await fetch(this.url, {

            method: 'POST'
            , mode: 'cors'
            , headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
              , 'Content-Type': 'application/json'
              //,'Content-Type': 'application/x-www-form-urlencoded',
            }
            , body: JSON.stringify(
              data),

          })

          datos = await response.json();
          console.log(datos);
          console.log(datos.length);


          libros = `<p class="my-2">Total de resultados: <span>${datos.length}</span></p>`;
          libros += `<div class = "flex flex-wrap">`;

          for (const dato of datos) {

            console.log(dato.titulo);

            libros += ` 
                      
                        <div class="m-1 border border-blue-200 rounded-md " style="width: 15em;">
                          <div class="px-3 pt-3 w-42 h-auto flex justify-center">
                            <a href="/libros/${dato.id}">
                              <img class="rounded-md w-42 h-52 object-cover hover:scale-110 transition duration-300 ease-in-out
                              " src="${dato.img}" alt="imagen libro">
                            </a>
                          </div>
                          <div class="text-center">
                            <h2 class=" my-1 font-bold">${dato.titulo}</h2>
                          </div>
                          <div class="flex flex-col p-3">
                            <div class="text-center inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">
                              <p>Nota media:
                                <span class="font-bold text-xl">
                                  {{-- obtiene la nota media --}}
                                  ${Number(dato.votaciones_avg_voto)}
                                </span>
                              </p>
                            </div>
                            <div class="text-center mt-1 inline-block px-2 py-1 leading-none bg-blue-200 text-blue-800 rounded-full font-semibold uppercase tracking-wide text-xs">Total votos:
                              <span class="font-bold text-xl">
                                {{-- obtiene mi voto --}}
                                ${dato.votaciones_count}
                                          
                            </span>
                          </div>
                        </div>
                        </div>
                                            
          `;

          }
        
          libros += "</div>";
          this.resultado = libros;

        },

      }));
    });

  </script>

</x-invitado>
