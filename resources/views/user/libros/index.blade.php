<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Libros Infantiles') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400 " style="min-height: 80vh;">

        <div class="flex flex-col justify-between md:flex-row  my-1 ">

        <div x-data="ordenar" class="px-5  mt-5">

          {{-- {{Request::getQueryString()}} --}}
          {{-- {{Request::input('sortBy')}} --}}
          {{-- {{isset($_GET["sortBy"])}} --}}

          <form id="ordenar" action="{{route('libros')}}">

            <input type="text" class="hidden" name="search" value="{{Request::input('search')}}">
            <label for="nota" class="block mb-1 text-sm font-medium text-gray-900"></label>
            <select x-on:change="ordenar" name="sortBy" id="sortBy" class="px-12 border border-blue-200 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-300 block  p-2.5 ">


              <option selected disabled value="">Ordenar por :</option>
              <option {{Request::input('sortBy')==1 ? 'selected' : ''}} value="1">Nota ↓</option>
              <option {{Request::input('sortBy')==2 ? 'selected' : ''}} value="2">Nota ↑</option>
              <option {{Request::input('sortBy')==3 ? 'selected' : ''}} value="3">Mas votados</option>
              <option {{Request::input('sortBy')==4 ? 'selected' : ''}} value="4">Mas reciente</option>
              <option {{Request::input('sortBy')==5 ? 'selected' : ''}} value="5">Menos reciente</option>
              <option {{Request::input('sortBy')==6 ? 'selected' : ''}} value="6">Titulo ↓</option>
              <option {{Request::input('sortBy')==7 ? 'selected' : ''}} value="7">Titulo ↑</option>
            
              <option {{Request::input('sortBy')==8 ? 'selected' : ''}} value="8">Ultimos agregados</option> {{-- muestra de agregados mas recientes a mas antiguo  --}}

              {{-- @for ($i = 1; $i <= 10; $i++) <option value="{{ $i }}" @if ($libro->votaciones->where('user_id',
              auth()->id())->first()) @if ($i == $libro->user_voto)
              selected @endif
              @endif

              >{{ $i }}</option>
              @endfor --}}
            </select>

          </form>

        </div>
<div class="mx-1 mt-5">

  <form id="formSearch" action="{{route('libros')}}"> 
    
    <input type="text" class="hidden" name="sortBy" value="{{Request::input('sortBy')}}">
    
    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative w-72 mr-4">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      </div>
      <input value="{{-- {{Request::input('search')}} --}}" name="search" type="search" id="search" class="mt-1 block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-300 focus:border-blue-300"  placeholder="Buscar ">
      {{-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> --}}
      <button type="submit" class="absolute top-0 right-0 p-3 text-sm font-medium text-white bg-blue-400 rounded-r-lg border border-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Buscar</span>
      </button>
    </div>
  </form>
</div>

    </div>
        <div class="p-6 bg-white border-b border-gray-200">

          @if (Request::input('search'))

              <p class="text-gray-400 mb-2">Busqueda: <span class="text-gray-700">" {{Request::input('search')}} "</span></p>
                  
              @endif

          {{ $libros->appends(["sortBy" => $sortBy,"search" => $search,])->links() }}
          {{-- {!! $libros->appends(["sortBy" => $sortBy,"search" => $search,]) !!} 
           {{ $libros->links('paginate',["libros"=>$libros, "sortBy" => $sortBy,"search" => $search,]) }}  --}}

          <div class="container mx-auto">
            <div class="flex flex-wrap mx-4">


              @forelse ($libros as $libro)

              {{-- {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1,) }} --}}
              {{-- {{number_format($libro->votaciones->avg('voto'), 1,)}} --}}

              @include('user.libros._libro')


              @empty
                  
              <p class="m-3 text-xl text-gray-700">"No se ha encontrado ninguna coincidencia."</p>

              @endforelse



            </div>

          </div>

          {{-- ------------------------------- --}}





        </div>


      </div>
    </div>
  </div>
  </div>

  <script>
    // document.addEventListener('alpine:init', () => {
    //   Alpine.data('ordenar', () => ({


    //     form: document.querySelector('#ordenar'),

    //     ordenar() {
    //       //alert(this);
    //       this.form.submit();
    //       //console.log(e);
    //     }


    //   }))
    // })

  </script>

</x-invitado>
