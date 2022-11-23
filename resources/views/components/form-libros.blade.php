{{ $slot }}




  @error('img')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>

{{-- Titulo --}}
<div class="mb-6 mt-3">
  <label for="titulo" class="block mb-2 text-md font-medium text-gray-900">Título</label>
  <input type="text" id="titulo" name="titulo" value="{{old('titulo',$libro->titulo)}}" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
  @error('titulo')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>

{{-- Titulo original --}}
<div class="mb-6">
  <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900">Título original</label>
  <input type="text" id="titulo_original" name="titulo_original" value="{{old('titulo_original',$libro->titulo_original)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  @error('titulo_original')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>


{{-- ISBN 10 --}}

<div class="mb-6">
  <label for="ISBN10" class="block mb-2 text-sm font-medium text-gray-900">ISBN (10)</label>
  <input maxlength="10" type="text" id="ISBN10" name="ISBN10" value="{{old('ISBN10',$libro->ISBN10)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000">

  @error('ISBN10')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>

{{-- ISBN 13 --}}

<div class="mb-6">
  <label for="ISBN13" class="block mb-2 text-sm font-medium text-gray-900">ISBN (13)</label>
  <input type="text" id="ISBN13" name="ISBN13" maxlength="13" value="{{old('ISBN13',$libro->ISBN13)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000000">
  @error('ISBN13')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>

{{-- año --}}

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">


  <div class="mb-6 ">
    <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Año</label>
    <input type="text" id="year" name="year" value="{{old('year',$libro->year)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('year')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- numero de paginas --}}

  <div class="mb-6 ">
    <label for="n_pag" class="block mb-2 text-sm font-medium text-gray-900">Páginas</label>
    <input type="text" id="n_pag" name="n_pag" value="{{old('n_pag',$libro->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
  
    @error('n_pag')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


{{-- sinopsis --}}
<div class="mb-6 ">
<label for="sinopsis" class="block mb-2 text-sm font-medium text-gray-900 ">Sinopsis</label>
<textarea id="sinopsis" name="sinopsis" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$libro->sinopsis)}}</textarea>
@error('sinopsis')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>


{{-- descripción --}}

<div class="mb-6 ">
<label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
<textarea id="descripcion" name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$libro->descripcion)}}</textarea>
@error('descripcion')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-3">

  <div>

    <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 ">Autor</label>
    <select id="autor" name="autor_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($autores as $autor)

      <option value="{{$autor->id}}" {{$libro->autor_id==$autor->id ? 'selected' : ''}}>{{$autor->name}}</option>

      @endforeach


    </select>
    @error('autor')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror


  </div>

  <div>

    <label for="ilustrador" class="block mb-2 text-sm font-medium text-gray-900 ">Ilustrador</label>
    <select id="ilustrador" required name="ilustrador_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($ilustradores as $ilustrador)
      <option value="{{$ilustrador->id}}" {{$libro->ilustrador_id==$ilustrador->id ? 'selected' : ''}}>{{$ilustrador->name}}</option>

      @endforeach

    </select>
    @error('ilustrador')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div>

    <label for="editorial" class="block mb-2 text-sm font-medium text-gray-900">Editorial</label>
    <select id="editorial" name="editorial_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($editoriales as $editorial)
      <option value="{{$editorial->id}}" {{$libro->editorial_id==$editorial->id ? 'selected' : ''}}>{{$editorial->name}}</option>

      @endforeach

    </select>
    @error('editorial')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>


  <div>

    <label for="edad" class="block mb-2 text-sm font-medium text-gray-900">Edad recomendada</label>
    <select id="edad" name="edad_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>


      @foreach ($edades as $edad)
      <option value="{{$edad->id}}" {{$libro->edad_id==$edad->id ? 'selected' : ''}} >{{$edad->descripcion}}</option>

      @endforeach

    </select>
    @error('edad')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div>

    <label for="idioma" class="block mb-2 text-sm font-medium text-gray-900">Idioma</label>
    <select id="idioma" name="idioma_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($idiomas as $idioma)
      <option value="{{$idioma->id}}" {{$libro->idioma_id==$idioma->id ? 'selected' : ''}} >{{$idioma->descripcion}} - {{$idioma->name}}</option>

      @endforeach

    </select>
    @error('idioma')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  <div>

    <label for="encuadernacion" class="block mb-2 text-sm font-medium text-gray-900">Encuadernación</label>
    <select id="encuadernacion" name="encuadernacion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($encuadernaciones as $encuadernacion)
      <option value="{{$encuadernacion->id}}" {{$libro->encuadernacion_id==$encuadernacion->id ? 'selected' : ''}}>{{$encuadernacion->name}}</option>

      @endforeach

    </select>
    @error('encuadernacion')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mt-6">


  @foreach ($temas as $tema)

  <div class="flex items-center mb-4">
    <input id="{{$tema->name}}" type="checkbox" value="{{$tema->id}}" name="temas[]" {{$libro->temas->contains($tema) ? 'checked' : ''}} 
    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
    <label for="{{$tema->name}}" class="ml-2 text-sm font-medium text-gray-900 ">{{$tema->name}}</label>
  </div>


  @endforeach



</div>




<button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
  Guardar
</button>
</form>
