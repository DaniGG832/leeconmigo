
<footer class="p-4 border-2 border-blue-600 bg-blue-400  shadow md:px-6 md:py-8">
  <div class="sm:flex sm:items-center sm:justify-between ">

      <a href="/" class="flex items-center mb-4 sm:mb-0">
          <img src="{{asset('img/logo/leeconmigo.png')}}" class="mr-3 h-16 bg-blue-50 rounded-lg px-2" alt="LeeConmigo Logo" />
          {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">LeeConmigo</span> --}}
      </a>
      <ul {{-- x-data="footer" --}} class="flex flex-wrap items-center mb-6 text-sm text-gray-100 sm:mb-0">
          <li>
              <a href="{{route('contactanos.index')}}" class="mr-4 hover:underline md:mr-6 ">Contáctanos</a>
          </li>
          <li>
            <a href="{{route('politica-de-privacidad')}}" class="mr-4 hover:underline md:mr-6 ">Política de privacidad</a>

              {{-- <button id="privacidad" x-on:click="privacidad('hola como estas')" class="mr-4 hover:underline md:mr-6">Política de privacidad</button> --}}
          </li>
         {{--  <li>
              <button id="licencia" x-on:click="licencia" class="mr-4 hover:underline md:mr-6 ">Licencia</button>
          </li> --}}
          <li>
            <a href="{{route('sobre-nosotros')}}" class="mr-4 hover:underline md:mr-6 ">Sobre Nosotros</a>
            {{-- <button id="nosotros" x-on:click="nosotros" class="hover:underline">Sobre Nosotros</button> --}}
          </li>
      </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
  <span class="block text-sm text-gray-100 sm:text-center">© 2022 <a href="/" class="hover:underline">LeeConmigo™</a>. Todos los derechos reservados.
  </span>
</footer>
