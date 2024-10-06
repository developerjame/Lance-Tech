<x-layout>
    @auth
    <a href="/admin/writingaccount" class="inline-block text-white ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
    
            <h1 class="text-3xl text-white mb-2">{{$writingaccount->name}}</h1>
            <div class="text-xl text-white font-bold mb-4"><p>Price: ${{$writingaccount->price}}</p></div>
            
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-2xl text-white mb-4">
                    Description
                </h3>
               
                <div class="text-lg text-white space-y-6">
                    
                    <p>
                        {{$writingaccount->description}}
                    </p>
    
                    
    
                    <a
                                id="edit"
                                href="/accounts/{{$writingaccount->id}}/edit"
                                class="text-blue-400 px-6 py-2 rounded-xl mt-auto"
                                ><i
                                    class="fa-solid fa-pen-to-square"
                                ></i>
                                Edit</a
                            >
                </div>
                
            </div>
        </div>
    </x-card>
    
    {{--<x-card class="mt-4 p-2 flex space-x-6">
      <a href="/listings/{{$listing->id}}/edit">
        <i class="fa-solid fa-pencil"></i>Edit
    </a>
    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash">
            Delete</i></button>
    </form>
    </x-card>--}}
    </div>

    @else

    <a href="/admin/writingaccount" class="inline-block text-white ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
    <x-card class="p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
    
            <h1 class="text-3xl text-white mb-2">{{$writingaccount->name}}</h1>
            <div class="text-xl text-white font-bold mb-4"><p>Price: ${{$writingaccount->price}}</p></div>
            
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-2xl text-white mb-4">
                    Description
                </h3>
               
                <div class="text-lg text-white space-y-6">
                    
                    <p>
                        {{$writingaccount->description}}
                    </p>
    
                    <a
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=mycomputeruser8@gmail.com"
                        class="block bg-primary text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact</a
                    >
                </div>
                
            </div>
        </div>
    </x-card>
    
    {{--<x-card class="mt-4 p-2 flex space-x-6">
      <a href="/listings/{{$listing->id}}/edit">
        <i class="fa-solid fa-pencil"></i>Edit
    </a>
    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash">
            Delete</i></button>
    </form>
    </x-card>--}}
    </div>         
     @endauth
    </x-layout>