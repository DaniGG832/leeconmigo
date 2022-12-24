<div class=" mb-5 border border-blue-300 rounded-t">
  <div class="flex items-start  justify-around p-5 border border-blue-100 rounded-t flex-col md:flex-row">
<a href="{{route('libros.show',$votacion->libro)}}">

  <div class="">
    <img src="{{$votacion->libro->img}}" alt="" class="h-36 float-left m-2 rounded-lg">
  </div>
</a>


    <div class="flex flex-col md:flex-row">

    <div class="ml-3 mt-5 ">

      <h3 class="text-gray-900 text-sm md:text-l font-semibold">
        {{$votacion->libro->titulo}}
      </h3>
      <p class="text-xs text-gray-500 mt-1"> {{$votacion->libro->year}}</p>
      <p class="text-xs text-gray-500 mt-1"> {{$votacion->libro->autor->name}}</p>
      
    </div>
    <div class=" ml-2">

      <p class="text-l text-white  p-1 border border-blue-500 bg-blue-400 rounded-lg mt-2">Nota Media:
        <span class="text-blue-800">
          {{ is_int($votacion->libro->votaciones->avg('voto'))
          ? number_format($votacion->libro->votaciones->avg('voto'))
          : number_format($votacion->libro->votaciones->avg('voto'), 1) }}
        </span>
      </p>
    </div>
</div>

    <div class="text-gray-400 rounded-lg   p-1.5 ml-auto inline-flex items-center flex-col">

      <div class="text-gray-400 rounded-lg  p-1.5 ml-auto inline-flex items-center">
        <p class="text-2xl text-red-500  p-3 border border-blue-400 rounded-lg">{{$votacion->voto}}</p>
      </div>
    </div>
  </div>
</div>
