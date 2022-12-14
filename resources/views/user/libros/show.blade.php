 {{-- {{$libro->voto()}}  --}}
 {{-- {{$libro->user_voto}} 
 {{$libro->media()}} 
 {{$libro->media}}  --}}

<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ficha de: '.$libro->titulo) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400">
        <div class="p-6 bg-white border-b border-gray-200">


          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">


              @include('user.libros._ficha')
{{-- 
              <div class="flex justify-center m-2">
                <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                  <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <p class="text-gray-600 text-xs">Last updated 3 mins ago</p>
                  </div>
                </div>
              </div>

              <div class="flex justify-center m-2">
                <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                  <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <p class="text-gray-600 text-xs">Last updated 3 mins ago</p>
                  </div>
                </div>
              </div> --}}

              {{-- <div class="flex justify-center">
                <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
                  <img class=" w-full h-96 md:h-auto object-cover md:w-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="https://mdbootstrap.com/wp-content/uploads/2020/06/vertical.jpg" alt="" />
                  <div class="p-6 flex flex-col justify-start">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                      This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <p class="text-gray-600 text-xs">Last updated 3 mins ago</p>
                  </div>
                </div>
              </div>
 --}}
            </div>

          </div>

          {{-- ------------------------------- --}}





        </div>


      </div>
    </div>
  </div>
  </div>
</x-invitado>
