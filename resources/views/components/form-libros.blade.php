{{ $slot }}


{{-- Seleccionar archivo --}}
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Selecione Imagen</label>
<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

  {{-- Titulo --}}
  <div class="mb-6 mt-3">
    <label for="titulo" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-300">Título</label>
    <input type="text" id="titulo"  name="titulo" value="{{old('titulo',$libro->titulo)}}" 
    class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

  {{-- Titulo original --}}
  <div class="mb-6">
    <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Título original</label>
    <input type="text" id="titulo_original" name="titulo_original" value="{{old('titulo_original')}}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>


  {{-- ISBN 10 --}}

  <div class="mb-6">
    <label for="ISBN10" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ISBN (10)</label>
    <input maxlength="10" type="text" id="ISBN10" 
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
    placeholder="0000000000">
  </div>

  {{-- ISBN 13 --}}
  
  <div class="mb-6">
    <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ISBN (13)</label>
    <input type="text" id="titulo_original" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
    placeholder="0000000000000">
  </div>

  {{-- año --}}

  <div class="mb-6">
    <label for="titulo_original" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Año</label>
    <input type="text" id="year"  name="year" value="{{old('year')}}"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  
  {{-- numero de paginas --}}
  
  <div class="mb-6 mt-3">
    <label for="n_pag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Páginas</label>
    <input type="text" id="n_pag"  name="n_pag" value="{{old('titulo',$libro->n_pag)}}" 
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>


  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
    </div>
    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
  </div>

  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select your country</label>
  <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option>United States</option>
    <option>Canada</option>
    <option>France</option>
    <option>Germany</option>
  </select>


  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
  <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

  <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
  
  
  
  <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
  <fieldset class="mt-5">
    <legend class="sr-only">Temas</legend>

    <div class="flex items-center mb-4">
      <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>

    <div class="flex items-center mb-4">
      <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I want to get promotional offers</label>
    </div>
    
    <div class="flex items-center mb-4">
      <input id="checkbox-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="checkbox-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I am 18 years or older</label>
    </div>
    
    <div class="flex mb-4">
      <div class="flex items-center h-5">
        <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      </div>
      <div class="ml-2 text-sm">
        <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-300">Free shipping via Flowbite</label>
        <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">For orders shipped from $25 in books or $29 in other categories</p>
      </div>
    </div>
    
    <div class="flex items-center">
      <input id="international-shipping-disabled" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" disabled>
      <label for="international-shipping-disabled" class="ml-2 text-sm font-medium text-gray-400 dark:text-gray-500">Eligible for international shipping (disabled)</label>
    </div>
  </fieldset>

  <button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>