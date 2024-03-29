<div class="flex justify-center m-2">

  <div class="flex flex  md:flex-row rounded-lg bg-white">

    <div class=" flex flex-col justify-start">

      <div class="">
        <div class="bg-white p-4 rounded-lg  py-4 mt-2">

          <h4 class="text-xl md:text-3xl font-bold text-gray-800 tracking-widest uppercase text-center">{{ $libro->titulo }}</h4>
          <p class="text-center text-gray-600 text-sm mt-2">{{ $libro->titulo_original ?? '' }}</p>


          <div x-data="votacion" class="mt-5">
            <div class="flex flex-col lg:flex-row justify-center ">
              <div class=" flex justify-center">


                <img class="h-auto md:w-auto md:h-96 object-cover rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ $libro->img ? asset($libro->img) : asset('img/el-principito.jpg') }}" alt="" />
              </div>
              <div class="md:ml-3 py-5 flex flex-col flex-wrap justify-center ">
                <div class="flex flex-row justify-center">
                  <span class="mx-1 inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Nota
                    media:

                    {{-- muestra la nota media --}}
                    <span class="font-bold text-xl" id="media">
                      @if ($libro->votaciones->avg('voto'))

                      {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1) }}
                      @else
                      -
                      @endif
                      

                    </span>
                  </span>

                  <span class="mx-1 inline-block px-2 py-1 leading-none bg-blue-200 text-blue-800 rounded-full font-semibold uppercase tracking-wide text-xs">
                    Votos:

                    {{-- muestra el numero de  votos de un libro --}}
                    <span class="font-bold text-xl" id="votos">
                      {{ number_format($libro->votaciones->count('voto')) }}

                    </span>
                  </span>
                </div>
                <div class="w-full flex justify-center mt-5">

                  @auth

                  @if (Auth::user()->email_verified_at && Auth::user()->comentar)
                  <p class="md:text-xl text-base  text-blue-800  pt-4 px-2 ">Tu voto </p>
                  <div class="w-28 md:w-32 ">

                    <label for="nota" class="block mb-2 text-sm font-medium text-gray-900"></label>
                    <select x-on:change="votar" id="nota" class="w-30 bg-blue-50 border border-blue-500 text-blue-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">


                      <option value="" class="text-blue-400">No votado</option>

                      @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}" @if ($libro->votaciones->where('user_id',
                        auth()->id())->first()) @if ($i == $libro->user_voto)
                        selected @endif
                        @endif

                        >{{ $i }}</option>
                        @endfor
                    </select>

                  </div>

                  @endif
                  @endauth

                </div>



              </div>
            </div>
          </div>




          <div class="space-y-12 px-2 xl:px-16 mt-12">


            @if ($libro->autor->name)
            <div class="mt-4 flex">
              <div>
                <div class="flex items-center h-16 border-l-4 border-blue-500">
                  <span class="md:text-lg text-blue-500 px-4">Autor</span>
                </div>
                <div class="flex items-center h-16 border-l-4 border-gray-500">
                  <span class="text-lg font-bold md:text-2xl text-gray-600 px-4">{{ $libro->autor->name }}</span>
                </div>
              </div>
            </div>
            @endif

            {{-- @if ($libro->ilustrador)
            <div class="mt-4 flex">
              <div>
                <div class="flex items-center h-16 border-l-4 border-blue-500">
                  <span class="md:text-lg text-blue-500 px-4">Ilustrador</span>
                </div>
                <div class="flex items-center h-16 border-l-4 border-gray-500">
                  <span class="text-lg md:text-2xl text-gray-600 px-4">{{ $libro->Ilustrador->name }}</span>
          </div>
        </div>
      </div>
      @endif --}}




      {{-- @if ($libro->titulo_original)
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
    <div class="flex items-center h-16 border-l-4 border-blue-500">
      <span class="text-lg text-blue-500 px-4">Sinopsis</span>
    </div>
    <div class="flex h-auto items-start h-16 border-l-4 border-gray-500">
      <span class=" text-gray-600 px-4">{{ $libro->sinopsis }}</span>
    </div>
  </div>

</div>

@if ($libro->descripcion)
    
<div class="mt-4 flex">
  <div>
    <div class="flex items-center h-16 border-l-4 border-blue-500">
      <span class="text-lg text-blue-600 px-4">Descripción</span>
    </div>
    <div class="flex h-auto items-start h-16 border-l-4 border-gray-600">
      <span class=" text-gray-600 px-4">{{ $libro->descripcion }}</span>
    </div>
  </div>

</div>
@endif

<div class="mt-4 flex">
  <div>
    <div class="flex items-center h-16 border-l-4 border-blue-500">
      <span class="text-lg text-blue-500 px-4">Temas</span>
    </div>
    <div class="flex flex-wrap h-auto items-center h-16 border-l-4 border-gray-500">
      @foreach ($libro->temas as $tema)
      <div class="flex ml-1">
        <a class="no-underline hover:underline hover:text-blue-800" href="{{ route('temas.show', $tema) }}">
          <span class=" m-1 text-gray-600 font-bold">
            #{{ $tema->name }}
          </span>
        </a>
      </div>
      @endforeach
    </div>
  </div>

</div>


@if ($libro->ISBN13 || $libro->ISBN10)
<div class="mt-4 flex">
  <div>
    <div class="flex items-center h-16 border-l-4 border-blue-600">
      <span class="text-lg text-blue-600 px-4">ISBN</span>
    </div>
    <div class="flex-col items-center h-16 border-l-4 border-gray-600">
      @if ($libro->ISBN13)
      <p class="text-l text-gray-700 px-4">ISBN13: <span class="font-bold">{{ $libro->ISBN13 }}</span></p>
      @endif
      @if ($libro->ISBN10)
      <p class="text-l text-gray-700 px-4">ISBN10: <span class="font-bold">{{ $libro->ISBN10 }}</span></p>
      @endif
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
      <p class=" text-gray-600 px-4">Ilustrador: <span class="font-bold">{{ $libro->ilustrador->name }}</span>
      </p>
      <p class=" text-gray-600 px-4">Editorial: <span class="font-bold">{{ $libro->Editorial->name }}</span>
      </p>
      <p class=" text-gray-600 px-4">Edad recomendada: <span class="font-bold">{{ $libro->edad->descripcion
                      }}</span></p>
      <p class=" text-gray-600 px-4">Encuadernacion: <span class="font-bold">{{ $libro->encuadernacion->name
                      }}</span></p>
      <p class=" text-gray-600 px-4">Idioma: <span class="font-bold">{{ $libro->idioma->descripcion
                      }}</span>
      </p>
      <p class=" text-gray-600 px-4">Año: <span class="font-bold">{{ $libro->year }}</span></p>
      <p class=" text-gray-600 px-4">Páginas: <span class="font-bold">{{ $libro->n_pag }}</span></p>
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

      url: "{{ route('votar') }}",

      media: document.querySelector('#media'),

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
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            , 'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
          }
          , body: JSON.stringify({
            nota: e.target.value
            , libro: "{{ $libro->id }}"
          , }),

        })
        console.log(e.target.value);

        console.log(await response);
        data = await response.json();
        
        console.log(data);
        document.getElementById("media").innerHTML = data.media;
        document.getElementById("votos").innerHTML = data.votos;

        //console.log(this.url);
        //console.log(await response.json());
        //console.log(await response.text());

        //return await response.text()
      },


    }))
  })

</script>
