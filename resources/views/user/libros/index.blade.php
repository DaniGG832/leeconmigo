<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Libros Infantiles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div x-data="ordenar" class="px-4 ">

  {{--  {{Request::getQueryString()}}  --}}
   {{-- {{$_GET["page"]}} --}}
          <form  id="ordenar" action="{{route('libros')}}"> 

          <label for="nota" class="block mb-2 text-sm font-medium text-gray-900"></label>
            <select x-on:change="ordenar" name="sortBy" id="sortBy" class="px-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 ">


              <option selected disabled value="">Ordenar por :</option>
              <option value="1">Nota ↓</option>
              <option value="2">Nota ↑</option>
              <option value="3">Mas reciente</option>
              <option value="4">Menos reciente</option>
              <option value="5">Titulo ↓</option>
              <option value="6">Titulo ↑</option>
              <option value="7">Autor ↓</option>
              <option value="8">Autor ↑</option>
              <option value="9">Ultimos agregados</option>

              {{-- @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}" @if ($libro->votaciones->where('user_id',
              auth()->id())->first()) @if ($i == $libro->user_voto)
              selected @endif
              @endif

              >{{ $i }}</option>
              @endfor --}}
            </select>

          </form>

        </div>
        <div class="p-6 bg-white border-b border-gray-200">
          {!! $libros->appends(["sortBy" => $sortBy]) !!}

          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              @foreach ($libros as $libro)

              {{-- {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1,) }} --}}
              {{-- {{number_format($libro->votaciones->avg('voto'), 1,)}} --}}

              @include('user.libros._libro')


              @endforeach



            </div>

          </div>

          {{-- ------------------------------- --}}





        </div>


      </div>
    </div>
  </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('ordenar', () => ({


        form : document.querySelector('#ordenar'),

        ordenar(){
          //alert(this);
          console.log(this.form.submit());
          //console.log(e);
        }


      }))
    })

  </script>

</x-invitado>
