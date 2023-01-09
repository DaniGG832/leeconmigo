<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-blue-600">

  
   <div x-data class="flex items-center">
      <div class="relative py-3 sm:max-w-xl mx-auto lg:hidden">
          <nav x-data="hamburguesa">
              <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="mostrarMenu">
                  <span class="sr-only">Open main menu</span>
                  <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                      <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                      <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                      <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                  </div>
              </button>
          </nav>
      </div>
  

  </div>
  <div id="modoUsuario"class="flex items-center text-center">

    
      <a class="text-xl border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg" href="{{ route('principal') }}">Modo usuario</a>
      
  
  </div> 
</header>