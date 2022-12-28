<div class="flex">
  <div class="block fixed "></div>
  <div class="w-46  bg-gray-900 items-center flex-col">
    <div class="flex items-center justify-center mt-8">
      <div class="items-center flex-col justify-center">

        <div class="flex items-center m-auto justify-center">
          <a href="{{ route('admin') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
          </a>
        </div>
        <span class="mx-2 text-2xl font-semibold text-white block">LeeConmigo</span>
      </div>
    </div>



    <!-- Navigation Links -->
    <div class="">
      <x-link-admin :href="route('admin')" :active="request()->routeIs('admin')">
        {{ __('admin') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.libros.index')" :active="request()->routeIs('admin.libros.index')">
        {{ __('libros') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
        {{ __('Usuarios') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.librerias.index')" :active="request()->routeIs('admin.librerias.index')">
        {{ __('Librerias') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.autores.index')" :active="request()->routeIs('admin.autores.index')">
        {{ __('Autores') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.ilustradores.index')" :active="request()->routeIs('admin.ilustradores.index')">
        {{ __('Ilustradores') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.editoriales.index')" :active="request()->routeIs('admin.editoriales.index')">
        {{ __('Editoriales') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.temas.index')" :active="request()->routeIs('admin.temas.index')">
        {{ __('Temas') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('admin.idiomas.index')" :active="request()->routeIs('admin.idiomas.index')">
        {{ __('Idiomas') }}
      </x-link-admin>
    </div>
    






  </div>
</div>
