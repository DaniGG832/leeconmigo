{{ $slot }}


{{-- Seleccionar archivo --}}
<label class="block mb-2 text-sm font-medium text-gray-900" for="Imagen">Selecione Imagen</label>
<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer " id="Imagen" type="file">

{{-- Titulo --}}
<div class="mb-6 mt-3">
  <label for="titulo" class="block mb-2 text-md font-medium text-gray-900">Título</label>
  <input type="text" id="titulo" name="titulo" value="{{old('titulo',$libro->titulo)}}" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
</div>

{{-- Titulo original --}}
<div class="mb-6">
  <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900">Título original</label>
  <input type="text" id="titulo_original" name="titulo_original" value="{{old('titulo_original',$libro->titulo_original)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
</div>


{{-- ISBN 10 --}}

<div class="mb-6">
  <label for="ISBN10" class="block mb-2 text-sm font-medium text-gray-900">ISBN (10)</label>
  <input maxlength="10" type="text" id="ISBN10" name="ISBN10" value="{{old('ISBN10',$libro->ISBN10)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000">
</div>

{{-- ISBN 13 --}}

<div class="mb-6">
  <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900">ISBN (13)</label>
  <input type="text" id="titulo_original" name="ISBN13" value="{{old('ISBN13',$libro->ISBN13)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000000">
</div>

{{-- año --}}

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">


  <div class="mb-6 ">
    <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900">Año</label>
    <input type="text" id="year" name="year" value="{{old('year',$libro->year)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  </div>

  {{-- numero de paginas --}}

  <div class="mb-6 ">
    <label for="n_pag" class="block mb-2 text-sm font-medium text-gray-900">Páginas</label>
    <input type="text" id="n_pag" name="n_pag" value="{{old('n_pag',$libro->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  </div>

</div>


{{-- sinopsis --}}

<label for="sinopsis" class="block mb-2 text-sm font-medium text-gray-900 ">Sinopsis</label>
<textarea id="sinopsis" name="sinopsis" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí..."></textarea>



{{-- descripción --}}

<label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
<textarea id="descripcion" name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí..."></textarea>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-3">

  <div>

    <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 ">Autor</label>
    <select id="autor" name="autor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($autores as $autor)

      <option value="{{$autor->id}}">{{$autor->name}}</option>

      @endforeach


    </select>

  </div>

  <div>

    <label for="ilustrador" class="block mb-2 text-sm font-medium text-gray-900 ">Ilustrador</label>
    <select id="ilustrador" required name="ilustrador_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($ilustradores as $ilustrador)
      <option value="{{$ilustrador->id}}">{{$ilustrador->name}}</option>

      @endforeach

    </select>

  </div>

  <div>

    <label for="editorial" class="block mb-2 text-sm font-medium text-gray-900">Editorial</label>
    <select id="editorial" name="editorial_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($editoriales as $editorial)
      <option value="{{$editorial->id}}">{{$editorial->name}}</option>

      @endforeach

    </select>

  </div>


  <div>

    <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad recomendada</label>
    <select id="edad" name="edad_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>


      @foreach ($edades as $edad)
      <option value="{{$edad->id}}">{{$edad->descripcion}}</option>

      @endforeach

    </select>

  </div>

  <div>

    <label for="idioma" class="block mb-2 text-sm font-medium text-gray-900">Idioma</label>
    <select id="idioma" name="idioma_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($idiomas as $idioma)
      <option value="{{$idioma->id}}">{{$idioma->descripcion}} - {{$idioma->name}}</option>

      @endforeach

    </select>

  </div>

  <div>

    <label for="encuadernacion" class="block mb-2 text-sm font-medium text-gray-900">Encuadernación</label>
    <select id="encuadernacion" name="encuadernacion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($encuadernaciones as $encuadernacion)
      <option value="{{$encuadernacion->id}}">{{$encuadernacion->name}}</option>

      @endforeach

    </select>

  </div>

</div>


<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-6">


  @foreach ($temas as $tema)

  <div class="flex items-center mb-4">
    <input id="{{$tema->name}}" type="checkbox" value="{{$tema->id}}" name="temas[]" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
    <label for="{{$tema->name}}" class="ml-2 text-sm font-medium text-gray-900 ">{{$tema->name}}</label>
  </div>


  @endforeach



</div>




<button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
  Guardar
</button>
</form>
