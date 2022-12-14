<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Libros Infantiles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400 ">

        <div x-data="ordenar" class="px-4 ">

          {{-- {{Request::getQueryString()}} --}}
          {{-- {{Request::input('sortBy')}} --}}
          {{-- {{isset($_GET["sortBy"])}} --}}

          <form id="ordenar" action="{{route('libros')}}">

            <label for="nota" class="block mb-2 text-sm font-medium text-gray-900"></label>
            <select x-on:change="ordenar" name="sortBy" id="sortBy" class="px-12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 ">


              <option selected disabled value="">Ordenar por :</option>
              <option {{Request::input('sortBy')==1 ? 'selected' : ''}} value="1">Nota ↓</option>
              <option {{Request::input('sortBy')==2 ? 'selected' : ''}} value="2">Nota ↑</option>
              <option {{Request::input('sortBy')==2 ? 'selected' : ''}} value="3">Mas votados</option>
              <option {{Request::input('sortBy')==3 ? 'selected' : ''}} value="4">Mas reciente</option>
              <option {{Request::input('sortBy')==4 ? 'selected' : ''}} value="5">Menos reciente</option>
              <option {{Request::input('sortBy')==5 ? 'selected' : ''}} value="6">Titulo ↓</option>
              <option {{Request::input('sortBy')==6 ? 'selected' : ''}} value="7">Titulo ↑</option>
              <option {{Request::input('sortBy')==7 ? 'selected' : ''}} value="8">Ultimos agregados</option>

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


        form: document.querySelector('#ordenar'),

        ordenar() {
          //alert(this);
          console.log(this.form.submit());
          //console.log(e);
        }


      }))
    })

  </script>

</x-invitado>
