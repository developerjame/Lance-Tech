<x-layout>
    <x-card class="p-10">
        <header>
            <a href="/admin" class="text-black ml-4"><i class='far fa-arrow-alt-circle-left' style='font-size:15px'></i> Back </a>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Messages
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <b>Name</b>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <b>Email</b>  
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <b>Message</b>
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
                    $contactResults = $contacts->get();
                @endphp

                @unless($contactResults->isEmpty())
                @foreach($contactResults as $contact)
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                            {{$contact->name}}
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                            {{$contact->email}}  
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                            {{$contact->textarea}}
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="https://mail.google.com/mail/?view=cm&fs=1&to={{$contact->email}}"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa fa-reply"
                            ></i>
                            Reply</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form method="POST" action="/contacts/{{$contact->id}}">
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
                        <p class="text-center">No Messages Found.</p>
                    </td>
                </tr>
                @endunless   
            </tbody>
        </table>
    </x-card>
</x-layout>