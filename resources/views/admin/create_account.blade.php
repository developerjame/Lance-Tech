<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24"
    >
    <header class="text-center">
        <h2 class="text-2xl text-white font-bold uppercase mb-1">
            Add a Training Session
        </h2>
    </header>
    
    <form method="POST" action="/accounts" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label
                for="name"
                class="inline-block text-white text-lg mb-2"
                >Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name" value="{{old('name')}}"
            />
            @error('name')
               <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-white text-lg mb-2"
            >
                Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                placeholder=""
            >{{old('description')}}</textarea>
            @error('description')
               <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="price" class="inline-block text-white text-lg mb-2"
                >Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="price"
                placeholder=""
                value="{{old('price')}}"
            />
            @error('price')
               <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button
                class="bg-primary text-white rounded py-2 px-4 hover:bg-black"
            >
                Add
            </button>
    
            <a href="/admin" class="text-white ml-4"> Back </a>
        </div>
    </form>
    </x-card>
    </x-layout>