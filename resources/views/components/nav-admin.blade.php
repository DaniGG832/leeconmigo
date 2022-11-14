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
      <x-link-admin :href="route('libros.admin')" :active="request()->routeIs('libros.admin')">
        {{ __('libros') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('users.admin')" :active="request()->routeIs('users.admin')">
        {{ __('Usuarios') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('autores.admin')" :active="request()->routeIs('autores.admin')">
        {{ __('Autores') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('ilustradores.admin')" :active="request()->routeIs('ilustradores.admin')">
        {{ __('Ilustradores') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('editoriales.admin')" :active="request()->routeIs('editoriales.admin')">
        {{ __('Editoriales') }}
      </x-link-admin>
    </div>
    <div class="">
      <x-link-admin :href="route('temas.admin')" :active="request()->routeIs('temas.admin')">
        {{ __('Temas') }}
      </x-link-admin>
    </div>
    






  </div>
</div>
