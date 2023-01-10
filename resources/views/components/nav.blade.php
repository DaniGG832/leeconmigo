<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="w-full  h-16">
      <div class="flex justify-between">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
          <a href="/">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
          </a>
        </div>




{{-- {{request()->routeIs('admin.*') }}
 --}}
 @if (!request()->routeIs('admin.*'))

      <!-- Settings Dropdown -->
      <div class="flex items-center sm:ml-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            @if (auth()->check())
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
              <div>{{ Auth::user()->name }}</div>

              <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </button>
            @endif
          </x-slot>

          <x-slot name="content">
            <!-- Authentication -->
            <x-dropdown-link :href="route('profile')">

              {{ __('Mi perfil') }}
    
            </x-dropdown-link>
            <x-dropdown-link :href="route('votaciones')">

              {{ __('Mis votaciones') }}
    
            </x-dropdown-link>

            <x-dropdown-link :href="route('libros.deseos')">

              {{ __('Lista de deseos') }}
    
            </x-dropdown-link>

            @if (auth()->check()&&Auth::user()->rol_id!=1)
            
            <x-dropdown-link :href="route('admin')">


              {{ __('Admin') }}
            </x-dropdown-link>

            @endif
            
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>



          </x-slot>
        </x-dropdown>
      </div>

      <!-- Hamburger -->
      {{-- <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div> --}}

      @endif

    </div>
  </div>

  @if (!request()->routeIs('admin.*'))
    

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    {{-- <div class="pt-2 pb-3 space-y-1">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-responsive-nav-link>
    </div> --}}
    {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-nav-link :href="route('libros')" :active="request()->routeIs('libros')">
        {{ __('Libros ') }}
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
      <x-nav-link :href="route('preguntas.index')" :active="request()->routeIs('preguntas.index')">
        {{ __('Foro') }}
      </x-nav-link>
    </div> --}}
    {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
      <x-nav-link :href="route('votaciones')" :active="request()->routeIs('votaciones')">
        {{ __('mis Votaciones ') }}
      </x-nav-link>
    </div> --}}
    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
      <div class="px-4">
        @if (auth()->check())

        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        @endif
      </div>

      <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <x-dropdown-link :href="route('profile')">

          {{ __('Mi perfil') }}

        </x-dropdown-link>
        <x-dropdown-link :href="route('votaciones')">

          {{ __('Mis votaciones') }}

        </x-dropdown-link>
      
        <x-dropdown-link :href="route('libros.deseos')">

          {{ __('Lista de deseos') }}

        </x-dropdown-link>
        @if (auth()->check() && Auth::user()->rol_id!=1)
        <x-dropdown-link :href="route('admin')">

          {{ __('Admin') }}

        </x-dropdown-link>

        @endif


        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
  @endif
</nav>
