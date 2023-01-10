{{-- TODO: Menu hamburguesa --}}
<div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">

  <div class="hidden md:flex flex-row h-12 justify-evenly text-bold">

    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:flex font-bold">
      <x-nav-link :href="route('principal')" :active="request()->routeIs('principal')">
        {{ __('Home') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
      <x-nav-link :href="route('libros')" :active="request()->routeIs('libros')">
        {{ __('Libros ') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
      <x-nav-link :href="route('autores.index')" :active="request()->routeIs('autores.index')">
        {{ __('Autores ') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
      <x-nav-link :href="route('temas.index')" :active="request()->routeIs('temas.index')">
        {{ __('Temas ') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
      <x-nav-link :href="route('edades.index')" :active="request()->routeIs('edades.index')">
        {{ __('Edades ') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px  sm:flex">
      <x-nav-link :href="route('librerias.index')" :active="request()->routeIs('librerias.index')">
        {{ __('Librerias ') }}
      </x-nav-link>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:flex">
      <x-nav-link :href="route('preguntas.index')" :active="request()->routeIs('preguntas.index')">
        {{ __('Foro ') }}
      </x-nav-link>
    </div>


  </div>
  <div x-data class="flex ">
    <div class="relative py-3 sm:max-w-xl mx-auto md:hidden z-20">
      <nav x-data="hamburguesa">
        <div class="flex flex-col justify-start">
          <button class="rounded-md text-gray-500 w-10 h-10 relative focus:outline-none bg-white " @click="mostrarMenuUser">
            <span class="sr-only">Open main menu</span>
            <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
              <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
              <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
              <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
            </div>
          </button>

          <div x-show="desplegar" class="border-2 border-blue-500 bg-blue-400 p-4">

            <!-- Navigation Links -->
            <div class="p-2 space-x-8 sm:-my-px sm:flex font-bold ">
              <x-nav-link :href="route('principal')" :active="request()->routeIs('principal')">
                {{ __('Home') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px sm:flex">
              <x-nav-link :href="route('libros')" :active="request()->routeIs('libros')">
                {{ __('Libros ') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px sm:flex">
              <x-nav-link :href="route('autores.index')" :active="request()->routeIs('autores.index')">
                {{ __('Autores ') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px sm:flex">
              <x-nav-link :href="route('temas.index')" :active="request()->routeIs('temas.index')">
                {{ __('Temas ') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px sm:flex">
              <x-nav-link :href="route('edades.index')" :active="request()->routeIs('edades.index')">
                {{ __('Edades ') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px  sm:flex">
              <x-nav-link :href="route('librerias.index')" :active="request()->routeIs('librerias.index')">
                {{ __('Librerias ') }}
              </x-nav-link>
            </div>
            <div class="p-2 space-x-8 sm:-my-px sm:flex">
              <x-nav-link :href="route('preguntas.index')" :active="request()->routeIs('preguntas.index')">
                {{ __('Foro ') }}
              </x-nav-link>
            </div>


          </div>
        </div>
      </nav>

    </div>

  </div>
</div>
