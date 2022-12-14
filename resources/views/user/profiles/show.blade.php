<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Mi perfil') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400 ">
        <div x-data="avatar" class=" bg-white border-b border-gray-200">



          <div x-show="open" class=" rounded py-16 px-12 flex flex-col items-center justify-center">
            <!-- User profile image -->
            <div class="bg-blue-100 border rounded py-16 px-12 flex flex-col items-center justify-center">


              <img class="rounded-full h-32 w-32" src="{{$user->img ? asset($user->img) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="user avatar" />
              <div class="mt-8 mb-4">
                <div class="mb-4">

                  <p class=" text-gray-700 px-4">Nombre: <span class="font-bold">{{$user->name}}</span>
                  </p>

                </div>
                <div>
                  <p class=" text-gray-700 px-4">Email: <span class="font-bold">{{$user->email}}</span>
                  </p>
                </div>
                <div class="my-4 flex items-center">

                </div>
                <button @click="open=!open" id="modal-switch" class=" cursor-pointer bg-blue-500 hover:bg-blue-600 text-white font-bold w-full py-3 rounded" type="submit">Editar perfil</button>
              </div>

            </div>
          </div>

          <div x-show="!open" class="bg-blue-50 rounded py-16 px-12 flex flex-col items-center justify-center">
            <div @click.outside="open=!open" class="bg-blue-100 border rounded py-16 px-12 flex flex-col items-center justify-center">
              <p @click="open=!open" class="self-end cursor-pointer">🅇</p>

              <form action="{{ route('user.edit', $user, true) }}" enctype="multipart/form-data" method="post" method="post" class="flex flex-col items-center justify-center">

                @method('put')
                @csrf
                <div class="flex-col items-center justify-center border">

                  <label for="avatar" id="pre">
                    <img id="imgAvatar" class="rounded-full h-32 w-32 mx-auto" src="{{$user->avatar ? asset($user->avatar) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="user avatar"/>
                    <span class=" text-gray-500 px-4">click para cambiar </span>
                  </label>
                  <input @change="cambioAvatar" name="avatar" id="avatar" type="file" class="hidden" accept="image/*" value="{{old('avatar',$user->avatar)}}">
                  @error('avatar')
                  <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                  </p>
                  @enderror
                </div>
                


          <div class="mt-8 mb-4">
            <div class="mb-4">
              <label for="name" class="sr-only">Nombre</label>
              <input name="name" value="{{old('name',$user->name)}}" class="border-solid border border-gray-400 rounded px-2 py-3" type="text" id="name" placeholder="Nombre" required />
              @error('name')
              <p class="text-red-500 text-sm mt-1">
                {{ $message }}
              </p>
              @enderror
            </div>

            <div class="my-4 flex items-center">

            </div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold w-full py-3 rounded" type="submit">Enviar</button>
          </div>


          </form>

        </div>


      </div>
    </div>

    {{-- <div class="bg-gray-200 rounded py-16 px-12 m-16 flex flex-col items-center justify-center">
                        <!-- User profile image -->
                        <img class="rounded-full h-32 w-32" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="user avatar" />
                        <form method="post" class="mt-8 mb-4">
                          <div class="mb-4">
                            <label for="userEmail" class="sr-only">Email address</label>
                            <input class="border-solid border border-gray-400 rounded px-2 py-3" type="email" id="userEmail" placeholder="Email address" required />
                          </div>
                          <div>
                            <label for="userEmail" class="sr-only">Password</label>
                            <input class="border-solid border border-gray-400 rounded px-2 py-3" type="password" id="userPass" placeholder="Password" required />
                          </div>
                          <div class="my-4 flex items-center">
                            <input class="h-4 w-4 mr-2" type="checkbox" id="userRemember" />
                            <label for="userRemember">Remember me</label>
                          </div>
                          <button class="bg-gray-500 hover:bg-gray-600 text-white font-bold w-full py-3" type="submit">Sign in</button>
                        </form>
                        <a href="#" class="self-start">Forgot the password?</a>
                      </div> --}}



  </div>
  </div>
  </div>
  </div>

</x-invitado>
