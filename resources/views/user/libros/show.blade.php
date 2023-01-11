 {{-- {{$libro->voto()}} --}}
 {{-- {{$libro->user_voto}}
 {{$libro->media()}}
 {{$libro->media}} --}}

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
           <div class="mb-5">

             <a href=" {{URL::previous()}}" class="  border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

               Volver atras
             </a>
           </div>

           <div class="p-3  border border-blue-300 mx-auto bg-blue-100 flex flex-row flex-wrap justify-center rounded-lg">

             <div class="flex flex-row flex-wrap text-center ">
               @if (Auth::user())
               <div class="mx-3 my-2">
                 <a class="p-2 border border-blue-100 mx-3 rounded-lg text-blue-600 inline-block  hover:border hover:border-blue-500 hover:text-blue-50 hover:bg-blue-500  font-semibold transition duration-500 ease-in-out" href="{{route('libros.deseos.agregar',$libro)}}">

                   @if (!Auth::user()->isdeseo($libro))
                   <span>Añadir a </span>
                   @else
                   <span>Quitar de</span>
                   @endif
                   deseos

                   <span class="text-xl rounded-full no-underline"></span>
                 </a>
               </div>
               @endif

               <div class="mx-3 my-2">
                 <a class="p-2 border border-blue-100 mx-3 rounded-lg text-blue-600 inline-block  hover:border hover:border-blue-500 hover:text-blue-50 hover:bg-blue-500  font-semibold transition duration-500 ease-in-out" href="{{route('criticas',$libro)}}">Ver Criticas
                   <span class="text-xl rounded-full no-underline">[ {{$libro->criticas->count()}} ]</span>
                 </a>
               </div>
             </div>
             <div class="flex flex-row flex-wrap">
               <div class="mx-3 my-2">
                 <a class="p-2 border border-blue-100 mx-3 rounded-lg text-blue-600 inline-block  hover:border hover:border-blue-500 hover:text-blue-50 hover:bg-blue-500  font-semibold transition duration-500 ease-in-out" href="{{route('criticas.create',$libro)}}">Escribe tu crítica
                   <span class="text-xl rounded-full "></span>
                 </a>
               </div>
               <div class=" mx-3 my-2" >
                 <a class="p-2 border border-blue-100 mx-3 rounded-lg text-blue-600 inline-block  hover:border hover:border-blue-500 hover:text-blue-50 hover:bg-blue-500  font-semibold transition duration-500 ease-in-out" href="{{route('libros.pdf',$libro)}}">Descargar en PDF
                   <span class="text-xl rounded-full "></span>
                 </a>
               </div>
             </div>
           </div>

           <div class="container mx-auto">
             <div class="flex flex-wrap -mx-4 justify-center">


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
