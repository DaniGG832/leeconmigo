{{ $slot }}




@error('img')
<p class="text-red-500 text-sm mt-1">
  {{ $message }}
</p>
@enderror
</div>

{{-- nombre --}}
<div class="mb-6 mt-3">
  <label for="nombre" class="block mb-2 text-md font-medium text-gray-900">Nombre</label>
  <input required type="text" id="nombre" name="nombre" value="{{old('nombre',$libreria->nombre)}}" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
  @error('nombre')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div>


{{-- ISBN 10 --}}

{{-- <div class="mb-6">
  <label for="ISBN10" class="block mb-2 text-sm font-medium text-gray-900">ISBN (10)</label>
  <input maxlength="10" type="text" id="ISBN10" name="ISBN10" value="{{old('ISBN10',$libreria->ISBN10)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000">

  @error('ISBN10')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div> --}}

{{-- ISBN 13 --}}

{{-- <div class="mb-6">
  <label for="ISBN13" class="block mb-2 text-sm font-medium text-gray-900">ISBN (13)</label>
  <input type="text" id="ISBN13" name="ISBN13" maxlength="13" value="{{old('ISBN13',$libreria->ISBN13)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0000000000000">
  @error('ISBN13')
  <p class="text-red-500 text-sm mt-1">
    {{ $message }}
  </p>
  @enderror
</div> --}}


<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">
  
  {{-- Latitud --}}

  <div class="mb-6 ">
    <label for="lat" class="block mb-2 text-sm font-medium text-gray-900">Latitud</label>
    <input required type="text" id="lat" name="lat" value="{{old('lat',$libreria->lat)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('lat')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- Longitud --}}

  <div class="mb-6 ">
    <label for="lng" class="block mb-2 text-sm font-medium text-gray-900">Longitud</label>
    <input required type="text" id="lng" name="lng" value="{{old('lng',$libreria->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('lng')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">
  
  {{-- telefono --}}

  <div class="mb-6 ">
    <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
    <input required type="text" id="telefono" name="telefono" value="{{old('telefono',$libreria->lat)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('telefono')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- web --}}

  <div class="mb-6 ">
    <label for="web" class="block mb-2 text-sm font-medium text-gray-900">Web</label>
    <input required type="text" id="web" name="web" value="{{old('web',$libreria->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('lng')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">
  
  {{-- email --}}

  <div class="mb-6 ">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
    <input required type="text" id="email" name="email" value="{{old('email',$libreria->lat)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('email')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- direccion --}}

  <div class="mb-6 ">
    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900">Dirección</label>
    <input required type="text" id="direccion" name="direccion" value="{{old('direccion',$libreria->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('direccion')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">
  
  {{-- ciudad --}}

  <div class="mb-6 ">
    <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900">Ciudad</label>
    <input required type="text" id="ciudad" name="ciudad" value="{{old('ciudad',$libreria->lat)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('email')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- cod_postal --}}

  <div class="mb-6 ">
    <label for="cod_postal" class="block mb-2 text-sm font-medium text-gray-900">Código postal</label>
    <input required type="text" id="cod_postal" name="cod_postal" value="{{old('cod_postal',$libreria->n_pag)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('direccion')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


<div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-3">
  
  {{-- provicias --}}
  <div>

    <label for="provicia" class="block mb-2 text-sm font-medium text-gray-900 ">Provincia</label>
    <select required id="provicia" name="provicia_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($provincias as $provincia)

      <option value="{{$provincia->id}}" {{-- {{$libreria->autor_id==$autor->id ? 'selected' : ''}} --}}>{{$provincia->nombre}}</option>

      @endforeach


    </select>
    @error('autor')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror


  </div>
</div>

  {{-- <div>

    <label for="ilustrador" class="block mb-2 text-sm font-medium text-gray-900 ">Ilustrador</label>
    <select required id="ilustrador" name="ilustrador_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($ilustradores as $ilustrador)
      <option value="{{$ilustrador->id}}" {{$libreria->ilustrador_id==$ilustrador->id ? 'selected' : ''}}>{{$ilustrador->name}}</option>

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
    <select required id="editorial" name="editorial_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($editoriales as $editorial)
      <option value="{{$editorial->id}}" {{$libreria->editorial_id==$editorial->id ? 'selected' : ''}}>{{$editorial->name}}</option>

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
    <select required id="edad" name="edad_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>


      @foreach ($edades as $edad)
      <option value="{{$edad->id}}" {{$libreria->edad_id==$edad->id ? 'selected' : ''}}>{{$edad->descripcion}}</option>

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
    <select required id="idioma" name="idioma_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($idiomas as $idioma)
      <option value="{{$idioma->id}}" {{$libreria->idioma_id==$idioma->id ? 'selected' : ''}}>{{$idioma->descripcion}} - {{$idioma->name}}</option>

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
    <select required id="encuadernacion" name="encuadernacion_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($encuadernaciones as $encuadernacion)
      <option value="{{$encuadernacion->id}}" {{$libreria->encuadernacion_id==$encuadernacion->id ? 'selected' : ''}}>{{$encuadernacion->name}}</option>

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
    <input id="{{$tema->name}}" type="checkbox" value="{{$tema->id}}" name="temas[]" {{$libreria->temas->contains($tema) ? 'checked' : ''}} class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
    <label for="{{$tema->name}}" class="ml-2 text-sm font-medium text-gray-900 ">{{$tema->name}}</label>
  </div>


  @endforeach



</div>

 --}}


<button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
  Guardar
</button>
</form>
