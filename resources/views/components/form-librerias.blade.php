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


<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">
  
  {{-- Latitud --}}

  <div class="mb-6 ">
    <label for="lat" class="block mb-2 text-sm font-medium text-gray-900">Latitud</label>
    <input required type="text" id="lat" name="lat" pattern="^[\-\+]?((0|([1-8]\d?))(\.\d{1,10})?|90(\.0{1,10})?)$" title="La Latitud va desde -90 a 90 grados" value="{{old('lat',$libreria->lat)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('lat')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- Longitud --}}

  <div class="mb-6 ">
    <label for="lng" class="block mb-2 text-sm font-medium text-gray-900">Longitud</label>
    <input required type="text" id="lng" name="lng" pattern="^[\-\+]?(0(\.\d{1,10})?|([1-9](\d)?)(\.\d{1,10})?|1[0-7]\d{1}(\.\d{1,10})?|180\.0{1,10})$" title="La Longitud va desde -180 a 180 grados" value="{{old('lng',$libreria->lng)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

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
    <input required type="text" id="telefono" minlength="9" pattern="^([0-9\s\-\+\(\)]*)$" title="Introduce un número de teléfono válido" name="telefono" value="{{old('telefono',$libreria->telefono)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('telefono')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- web --}}

  <div class="mb-6 ">
    <label for="web" class="block mb-2 text-sm font-medium text-gray-900">Web</label>
    <input required type="text" id="web" name="web" value="{{old('web',$libreria->web)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('web')
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
    <input required type="email" id="email" name="email" value="{{old('email',$libreria->email)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('email')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- direccion --}}

  <div class="mb-6 ">
    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900">Dirección</label>
    <input required type="text" id="direccion" name="direccion" value="{{old('direccion',$libreria->direccion)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

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
    <input required type="text" id="ciudad" name="ciudad" value="{{old('ciudad',$libreria->ciudad)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    @error('ciudad')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

  {{-- cod_postal --}}

  <div class="mb-6 ">
    <label for="cod_postal" class="block mb-2 text-sm font-medium text-gray-900">Código postal</label>
    <input required type="number" id="cod_postal" name="cod_postal" value="{{old('cod_postal',$libreria->cod_postal)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

    @error('cod_postal')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror
  </div>

</div>


<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-3">
  
  {{-- provicias --}}
  <div>

    <label for="provincia_id" class="block mb-2 text-sm font-medium text-gray-900 ">Provincia</label>
    <select  id="provincia_id" name="provincia_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

      <option value="" class="text-red-900">Selecione una opción</option>

      @foreach ($provincias as $provincia)

      <option value="{{$provincia->id}}" {{old('provincia_id')== $provincia->id || $libreria->provincia_id==$provincia->id ? 'selected' : ''}}>{{$provincia->nombre}}</option>

      @endforeach


    </select>
    @error('provincia_id')
    <p class="text-red-500 text-sm mt-1">
      {{ $message }}
    </p>
    @enderror


  </div>
</div>



<button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
  Guardar
</button>
</form>
