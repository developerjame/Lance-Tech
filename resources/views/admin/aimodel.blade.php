<x-layout>
    <x-card class="p-10">
        @auth
        <header>
            <a href="/admin" class="text-white ml-4"><i class='far fa-arrow-alt-circle-left' style='font-size:15px'></i> Back </a>
            <a
            href="/aimodels/create"
            class="absolute top-15 right-10 bg-black text-white py-2 px-5"
            >Add</a
        >
            <h1
                class="text-3xl text-center text-white font-bold my-6 uppercase"
            >
                AI Training Models
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                    <b>Models</b>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                    <b>Price</b>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    
                    </td>
                </tr>
                @php
                    $aimodelResults = $aimodels->get();
                @endphp

                @unless($aimodelResults->isEmpty())
                @foreach($aimodelResults as $aimodel)
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                            {{$aimodel->name}}
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >$ 
                            {{$aimodel->price}}  
                    </td>
                   
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/aimodels/{{$aimodel->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa fa-eye"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form method="POST" action="/aimodels/{{$aimodel->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash">
                            Delete</i></button>
                    </form>
                    </td>
                </tr>
                @endforeach
                
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center text-white">No AI Training Model Found.<a href="/aimodels/create">Click here to add</a></p>
                    </td>
                </tr>
                @endunless   
            </tbody>
        </table>


        @else


        <header>
            <a href="/section" class="text-white ml-4"><i class='far fa-arrow-alt-circle-left' style='font-size:15px'></i> Back </a>
            
            <h1
                class="text-3xl text-center text-white font-bold my-6 uppercase"
            >
                AI Training Models
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                    <b>Model</b>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                    <b>Price</b>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    
                    </td>
                    
                </tr>
                @php
                    $aimodelResults = $aimodels->get();
                @endphp

                @unless($aimodelResults->isEmpty())
                @foreach($aimodelResults as $aimodel)
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >
                            {{$aimodel->name}}
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-white text-lg"
                    >$ 
                            {{$aimodel->price}}  
                    </td>
                   
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/aimodels/{{$aimodel->id}}"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa fa-eye"
                            ></i>
                            View</a
                        >
                    </td>
                   
                </tr>
                @endforeach
                
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center text-white">No AI Training Model Found.</p>
                    </td>
                </tr>
                @endunless   
            </tbody>
        </table>
        @endauth
    </x-card>
</x-layout>