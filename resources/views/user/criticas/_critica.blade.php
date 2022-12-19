<div class="bg-blue-50 mb-5 border border-blue-300 rounded-t">

  {{-- <div class="flex">
    <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
    <div class="ml-3">
      <div class="">Appple</div>
      <div class="text-gray-500">mail@rgmail.com sdfgdfgsdfgdfgsdfffffffffffffffffffffffffffffffffffffffffffff</div>
    </div>
  </div> --}}
  {{-- header --}}
  <div class="flex items-start justify-between p-5 border border-blue-100 rounded-t">
    <img class="rounded-full h-12 w-12  object-cover" src="{{$critica->user->avatar ? asset($critica->user->avatar) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="avatar image">

    <h3 class="text-gray-900 text-sm md:text-l font-semibold ml-3">
      {{$critica->user->name}}
      <p class="text-xs text-gray-400"> {{$critica->user->votaciones->count()}} Votaciones</p>
      <p class="text-xs text-gray-400"> {{$critica->user->criticas->count()}} Criticas</p>
    </h3>
    <div class="text-gray-400 rounded-lg  p-1.5 ml-auto inline-flex items-center">
      <p class="text-2xl text-red-500  p-3 border border-blue-400 rounded-lg">{{($critica->votoLibro($libro)) ? $critica->votoLibro($libro) : '-'}}</p>
    </div>
  </div>
  <!-- body -->
  <div class="p-6 space-y-6 ">
    <h3 class="text-gray-900 text-sm md:text-xl font-semibold ml-3">
      {{$critica->titulo}}
      <p class="text-xs text-gray-400"> {{isset($critica->created_at) ? $critica->created_at->format('d-m-Y H:i:s') :''}}</p>

    </h3>
    <p class="text-gray-500 text-xs md:text-sm leading-relaxed ">
      {{$critica->critica}}
    </p>

    <div x-data class="flex justify-end">

      {{-- {{$critica->user }} --}}
      {{-- {{Auth::user() }} --}}

      @if ($critica->user->id==Auth::id())

      <a href="{{route('criticas.edit',[$libro,$critica])}}" class="p-2">

        <svg class="h-6 w-6 text-blue-500 hover:text-blue-800" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
          <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
      </a>
      @endif


    {{--   @if (Auth::user()) --}}
      @if (Auth::user() && ($critica->user->id==Auth::id() || Auth::user()->rol_id!= 1) )


      <form x-ref="form" action="{{route('criticas.destroy',$critica)}}" method="post">
        @csrf
        @method('DELETE')
        <button x-on:click.prevent="if (confirm('¿Esta seguro que desea de borrar la critica?')) $refs.form.submit()" class="p-2">
          <svg class="h-6 w-6 text-red-400 hover:text-red-800" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="3 6 5 6 21 6" />
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
            <line x1="10" y1="11" x2="10" y2="17" />
            <line x1="14" y1="11" x2="14" y2="17" /></svg>
        </button>
      </form>
      @endif
    {{--   @endif --}}

    </div>
  </div>

  <span></span>
</div>
