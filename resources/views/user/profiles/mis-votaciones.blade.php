<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Mis votaciones') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class=" overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400">
        <div class="p-6 bg-white border-b border-gray-200">
          
          <div x-data="misVotaciones" class="pb-5 ">

            {{-- {{Request::getQueryString()}} --}}
            {{-- {{Request::input('sortBy')}} --}}
            {{-- {{isset($_GET["sortBy"])}} --}}

            <form id="ordenarVotaciones" action="{{route('votaciones')}}">


              <select x-on:change="enviarFormulario" name="ordenVoto" id="ordenVoto" class="px-12 border border-blue-200 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-300 block  p-2.5 ">


                <option selected disabled value="">Ordenar por:</option>

                <option {{Request::input('ordenVoto')==1 ? 'selected' : ''}} value="1">Mi voto ↑</option>
                <option {{Request::input('ordenVoto')==2 ? 'selected' : ''}} value="2">Mi voto ↓</option>
                <option {{Request::input('ordenVoto')==3 ? 'selected' : ''}} value="3">Voto mas reciente</option>
                <option {{Request::input('ordenVoto')==4 ? 'selected' : ''}} value="4">Voto menos reciente</option>

                {{-- @foreach ($provincias as $provincia)
                <option {{Request::input('provincia')==$provincia->id ? 'selected' : ''}} value="{{$provincia->id}}">{{$provincia->nombre}}</option>

                @endforeach --}}

              </select>

            </form>

          </div>


          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              {{-- {{$votaciones}} --}}

              @foreach ($votacionesOrdenadas as $votacion)

              @include('user.profiles._libro')

              @endforeach




            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-invitado>
