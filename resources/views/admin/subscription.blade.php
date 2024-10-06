<x-layout>
    <x-card class="p-10">
        <header>
            <a href="/admin" class="text-black ml-4">
                <i class='far fa-arrow-alt-circle-left' style='font-size:15px'></i> Back </a>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Subscriptions
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <b>Email</b>  
                    </td>
                    
                </tr>
                @php
                    $subscriptionResults = $subscriptions->get();
                @endphp

                @unless($subscriptionResults->isEmpty())
                @foreach($subscriptionResults as $subscription)
                <tr class="border-gray-300">
                    
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                            {{$subscription->email}}  
                    </td>
                    
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form method="POST" action="/subscriptions/{{$subscription->id}}">
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
                        <p class="text-center">No Subscription Found.</p>
                    </td>
                </tr>
                @endunless   
            </tbody>
        </table>
    </x-card>
</x-layout>