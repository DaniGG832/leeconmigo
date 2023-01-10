<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Home') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
        <div class="p-6 bg-white border-b border-blue-200" style="min-height: 25em">


          <div class=" flex flex-col text-gray-700 ">

            <div class=" text-center p-8 my-5  border border-blue-100">

              <p class="mb-5 font-bold uppercase text-gray-600 text-2xl ">Te ayudamos a elegir el libro perfecto</p>
              <a class="text-xl border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg" href="{{route('recomendador')}}">Empezar</a>


            </div>

            <div class=" mt-5">
              <p class="m-3 text-2xl">Libros mejor valorados</p>

              <div class="flex flex-wrap justify-center">
                @foreach ($masValorados as $libro)

                <x-libroWelcome :libro=$libro></x-libroWelcome>

                
                
                
                @endforeach
                
            </div>
            </div>

            <div class="border-t border-blue-100 mt-5">
              <p class="m-3 text-2xl">Libros mas votados</p>
              <div class="flex flex-wrap justify-center">
                @foreach ($masValorados as $libro)


                <x-libroWelcome :libro=$libro></x-libroWelcome>
                
                
                @endforeach
                
            </div>

            </div>

            <div class="border-t border-blue-100 mt-5">
              <p class="m-3 text-2xl">Novedades</p>
              <div class="flex flex-wrap justify-center">
                @foreach ($novedades as $libro)


                <x-libroWelcome :libro=$libro></x-libroWelcome>
                
                @endforeach
                
            </div>

            </div>


            <div class="border-t border-blue-100 flex flex-col justify-center text-center mt-5 text-2xl">

              <p class="my-3">La importancia de la lectura para los niños</p>

              <div class=" flex justify-center m-3">

                <iframe width="840" height="472" src="https://www.youtube-nocookie.com/embed/Zl_9CcLF7nM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>


            </div>




          </div>

        </div>
      </div>
    </div>
  </div>

</x-invitado>
