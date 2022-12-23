<div class="bg-blue-50 mb-5 border border-blue-300 rounded-t mt-2">
  <div class="flex items-start justify-between p-5 border border-blue-100 rounded-t">

    <div class=" w-full">

      
      
      <div class="p-1 space-y-6 ">
        <div class="flex">

          <img class="rounded-full h-12 w-12  object-cover mr-2" src="{{$respuesta->user->avatar ? asset($respuesta->user->avatar) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="avatar image">
          
          <p class="text-gray-600 text-xs md:text-sm leading-relaxed ">
            {{$respuesta->descripcion}}
          </p>
          
        </div>

        <div class="flex justify-end">

          {{-- {{$respuesta->user }} --}}
          {{-- {{Auth::user() }} --}}


          @if ($respuesta->user->id==Auth::id())

          {{-- <button x-on:click="abrirVentana" class="p-2"> --}}

          <a href="{{route('respuestas.edit',[$respuesta, $pregunta])}}" class="p-2">
            <svg class="h-6 w-6 text-blue-500 hover:text-blue-800" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
              <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
          </a>
          {{-- </button> --}}
          @endif


          {{-- @if (Auth::user()) --}}
          @if (Auth::user() && ($respuesta->user->id==Auth::id() || Auth::user()->rol_id!= 1) )


          <form x-on:submit="enviarFormulario" action="{{route('respuestas.destroy',[$respuesta,$pregunta])}}" method="post">
            @csrf
            @method('DELETE')
            <button class="p-2">
              <svg class="h-6 w-6 text-red-400 hover:text-red-800" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6" />
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                <line x1="10" y1="11" x2="10" y2="17" />
                <line x1="14" y1="11" x2="14" y2="17" /></svg>
            </button>
          </form>
          @endif
          {{-- @endif --}}

        </div>
      </div>
    </div>

  </div>
</div>
