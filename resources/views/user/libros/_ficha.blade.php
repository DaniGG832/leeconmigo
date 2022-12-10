<div class="flex justify-center m-2">



  <div class="flex flex  md:flex-row rounded-lg bg-white">





    <div class=" flex flex-col justify-start">

      <div class="">
        <div class="bg-white p-4 rounded-lg  py-4 mt-2">

          <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">{{$libro->titulo}}</h4>
          <p class="text-center text-gray-600 text-sm mt-2">{{$libro->titulo_original ?? ''}}</p>


          <div x-data="votacion" class="flex flex-row mt-8">
            <div>

              
              <img class=" ml-8 max-w-48 h-auto md:w-auto md:h-96 object-cover rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="" />
            </div>
            <div class="p-5">

              <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Nota media: 
                <span class="font-bold text-xl" id="media">
                  {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1) }} 
          
                </span>
              </span>

              <label for="nota" class="block mb-2 text-sm font-medium text-gray-900"></label>
              <select x-on:change="votar" id="nota" class="w-24 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                @for ($i = 0; $i <= 10; $i++) <option value="$i">{{$i}}</option>
                  @endfor
              </select>
            </div>
          </div>




          <div class="space-y-12 px-2 xl:px-16 mt-12">


            @if($libro->autor->name)
            <div class="mt-4 flex">
              <div>
                <div class="flex items-center h-16 border-l-4 border-blue-600">
                  <span class="text-lg text-blue-600 px-4">Autor</span>
                </div>
                <div class="flex items-center h-16 border-l-4 border-gray-600">
                  <span class="text-3xl text-gray-700 px-4">{{$libro->autor->name}}</span>
                </div>
              </div>
            </div>
            @endif
            @if($libro->ilustrador)
            <div class="mt-4 flex">
              <div>
                <div class="flex items-center h-16 border-l-4 border-blue-600">
                  <span class="text-lg text-blue-600 px-4">Ilustrador</span>
                </div>
                <div class="flex items-center h-16 border-l-4 border-gray-600">
                  <span class="text-3xl text-gray-700 px-4">{{$libro->Ilustrador->name}}</span>
                </div>
              </div>
            </div>
            @endif




            {{-- @if($libro->titulo_original)
            <div class="mt-4 flex">
              <div>
                <div class="flex items-center h-16 border-l-4 border-blue-600">
                  <span class="text-lg text-blue-600 px-4">Titulo Original</span>
                </div>
                <div class="flex items-center h-16 border-l-4 border-gray-600">
                  <span class="text-4xl text-gray-700 px-4">{{$libro->titulo_original}}</span>
          </div>
        </div>
      </div>
      @endif --}}



      <div class="mt-4 flex">
        <div>
          <div class="flex items-center h-16 border-l-4 border-blue-600">
            <span class="text-lg text-blue-600 px-4">Sinopsis</span>
          </div>
          <div class="flex h-auto items-start h-16 border-l-4 border-gray-400">
            <span class=" text-gray-700 px-4">{{$libro->sinopsis}}</span>
          </div>
        </div>

      </div>

      <div class="mt-4 flex">
        <div>
          <div class="flex items-center h-16 border-l-4 border-blue-600">
            <span class="text-lg text-blue-600 px-4">Descripción</span>
          </div>
          <div class="flex h-auto items-start h-16 border-l-4 border-gray-400">
            <span class=" text-gray-700 px-4">{{$libro->descripcion}}</span>
          </div>
        </div>

      </div>

      <div class="mt-4 flex">
        <div>
          <div class="flex items-center h-16 border-l-4 border-blue-600">
            <span class="text-lg text-blue-600 px-4">Temas</span>
          </div>
          <div class="flex h-auto items-center h-16 border-l-4 border-gray-400">
            @foreach ($libro->temas as $tema)
            <div class="flex ml-2">
              <a class="no-underline hover:underline hover:text-blue-700" href="{{route('temas.show',$tema)}}">
                <span class=" m-1">
                  #{{$tema->name}}
                </span>
              </a>
            </div>
            @endforeach
          </div>
        </div>

      </div>


      @if($libro->ISBN13 || $libro->ISBN10)
      <div class="mt-4 flex">
        <div>
          <div class="flex items-center h-16 border-l-4 border-blue-600">
            <span class="text-lg text-blue-600 px-4">ISBN</span>
          </div>
          <div class="flex-col items-center h-16 border-l-4 border-gray-600">
            @if($libro->ISBN13)<p class="text-l text-gray-700 px-4">ISBN13: {{$libro->ISBN13}}</p>@endif
            @if($libro->ISBN10)<p class="text-l text-gray-700 px-4">ISBN10: {{$libro->ISBN10}}</p>@endif
          </div>
        </div>
      </div>
      @endif

      <div class="mt-4 flex">
        <div>
          <div class="flex items-center h-16 border-l-4 border-blue-600">
            <span class="text-lg text-blue-600 px-4">Detalles</span>
          </div>
          <div class="flex-col h-auto items-center h-16 border-l-4 border-gray-400">

            <p class=" text-gray-700 px-4">Editorial: <span class="font-bold">{{ $libro->Editorial->name}}</span></p>
            <p class=" text-gray-700 px-4">Edad recomendada: <span class="font-bold">{{$libro->edad->descripcion}}</span></p>
            <p class=" text-gray-700 px-4">Encuadernacion: <span class="font-bold">{{$libro->encuadernacion->name}}</span></p>
            <p class=" text-gray-700 px-4">Idioma: <span class="font-bold">{{$libro->idioma->descripcion}}</span></p>
            <p class=" text-gray-700 px-4">Año: <span class="font-bold">{{$libro->year}}</span></p>
            <p class=" text-gray-700 px-4">Páginas: <span class="font-bold">{{$libro->n_pag}}</span></p>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>
</div>
</div>
</div>

{{-- TODO: peticion asincrona para hacer la votacion del libro --}}

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('votacion', () => ({
      
      select: document.querySelector('#nota'),

      url: "{{route('votar')}}",

      async votar(e) {


        //this.open = ! this.open
        select2 = document.querySelector('#nota');
        /* console.log(e.target.options.selectedIndex);
        console.log(this.select.options.selectedIndex);
        console.log(select2.options.selectedIndex); */

        let response = await fetch(this.url, {
        
          method: 'POST'
          , mode: 'cors'
          , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: JSON.stringify({
            nota : e.target.options.selectedIndex,
            libro : "{{$libro->id}}",
          }),

        })

        
        console.log(this.url);
        //console.log(await response.json());
        console.log(await response.text());

        //return await response.text()
      },


    }))
  })

</script>
