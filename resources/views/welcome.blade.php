<x-invitado>


<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="min-height: 25em">
                   
                    <p>Te ayudamos a elegir el libro perfecto</p>
                    <a href="{{route('recomendador')}}">Empezar</a> 


                    
                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Zl_9CcLF7nM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    
                </div>
            </div>
        </div>
    </div>

</x-invitado>