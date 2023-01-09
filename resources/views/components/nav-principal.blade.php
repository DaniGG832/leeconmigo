<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  <div class="flex justify-between h-16">
    <div class="flex">

      <!-- Navigation Links -->
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('principal')" :active="request()->routeIs('principal')">
          {{ __('Home') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('libros')" :active="request()->routeIs('libros')">
          {{ __('Libros ') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('autores.index')" :active="request()->routeIs('autores.index')">
          {{ __('Autores ') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('temas.index')" :active="request()->routeIs('temas.index')">
          {{ __('Temas ') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('edades.index')" :active="request()->routeIs('edades.index')">
          {{ __('Edades ') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('librerias.index')" :active="request()->routeIs('librerias.index')">
          {{ __('Librerias ') }}
        </x-nav-link>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('preguntas.index')" :active="request()->routeIs('preguntas.index')">
          {{ __('Foro ') }}
        </x-nav-link>
      </div>
      {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
  <x-nav-link :href="route('votaciones')" :active="request()->routeIs('votaciones')">
    {{ __('mis Votaciones ') }}
      </x-nav-link>
    </div> --}}
  </div>
</div>


