
<footer class="p-4 bg-blue-300  shadow md:px-6 md:py-8 dark:bg-gray-900">
  <div class="sm:flex sm:items-center sm:justify-between">
      <a href="/" class="flex items-center mb-4 sm:mb-0">
          <img src="{{asset('img/logo/logo3.png')}}" class="mr-3 h-8" alt="LeeConmigo Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">LeeConmigo</span>
      </a>
      <ul x-data="footer" class="flex flex-wrap items-center mb-6 text-sm text-gray-600 sm:mb-0 dark:text-gray-400">
          <li>
              <a href="{{route('contactanos.index')}}" class="mr-4 hover:underline md:mr-6 ">Contáctanos</a>
          </li>
          <li>
              <button id="privacidad" x-on:click="privacidad('hola como estas')" class="mr-4 hover:underline md:mr-6">Política de privacidad</button>
          </li>
          <li>
              <button id="licencia" x-on:click="licencia" class="mr-4 hover:underline md:mr-6 ">Licencia</button>
          </li>
          <li>
              <button id="nosotros" x-on:click="nosotros" class="hover:underline">Sobre Nosotros</button>
          </li>
      </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
  <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="/" class="hover:underline">LeeConmigo™</a>. Todos los derechos reservados.
  </span>

</footer>
<div class="w-96 h-96" style="width=400;height=400">

    <div class="bg-blue-100 flex flex-col  justify-items-center">
        <h1 class="text-center">nombre </h1>
        <div class="border w-screen flex justify-center">
            <img src="https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800" class="h-auto w-40">
        </div>
        
    </div>
</div>
