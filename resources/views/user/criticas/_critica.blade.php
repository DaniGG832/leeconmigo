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
      <p class="text-xs text-gray-300"> {{isset($critica->created_at) ? $critica->created_at->format('d-m-Y H:i:s') :''}}</p>

    </h3>
    <p class="text-gray-500 text-xs md:text-sm leading-relaxed ">
      {{$critica->critica}}
    </p>
  </div>

<span></span>
</div>
