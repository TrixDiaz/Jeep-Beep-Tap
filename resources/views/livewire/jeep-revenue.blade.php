<div>
        {{-- Action Buttons --}}
        <div class="relative p-3 m-5">
            <div class="flex flex-col md:flex-row justify-between items-center">

                <div class="md:grid md:grid-cols-3 gap-3">
                    <div id="toast-simple"
                        class="flex my-4 items-center w-96 md:my-0 md:w-full lg:my-0 lg:w-full max-w-xs p-2 md:p-4 space-x-2 md:space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                        <div wire:poll class="pl-2 md:pl-4 text-sm font-normal">
                            @forelse ($jnumber as $jeep)
                                <p>{{ $jeep->jnumber }}</p>
                            @empty
                                <p>No Assign Jeep</p>
                            @endforelse
                        </div>
                    </div>

                    <div id="toast-simple"
                        class="flex my-4 items-center w-96 md:my-0 md:w-full lg:my-0 lg:w-full max-w-xs p-2 md:p-4 space-x-2 md:space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <div wire:poll class="pl-2 md:pl-4 text-sm font-normal">
                            @forelse ($jnumber as $jeep)
                                @if ($jeep->begin === null)
                                    No Time IN
                                @else
                                    Time IN {{ $jeep->begin }}
                                @endif
                            @empty
                                No Time IN
                            @endforelse
                        </div>
                    </div>

                    <div id="toast-simple"
                        class="flex my-4 items-center w-96 md:my-0 md:w-full lg:my-0 lg:w-full max-w-xs p-2 md:p-4 space-x-2 md:space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
                        role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                        <div wire:poll class="pl-2 md:pl-4 text-sm font-normal">
                            @forelse ($jnumber as $jeep)
                                @if ($jeep->end === null)
                                    No Time Out
                                @else
                                    Time Out {{ $jeep->end }}
                                @endif
                            @empty
                                No Time Out
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="relative inline-block text-left" x-data="{ open: false }">
                    <button type="button" @click="open = !open"
                        class="relative px-4 mt-3 md:px-5 md:mx-5 lg:mt-0  inline-flex items-center p-2 md:p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{ $selectedOption ?? 'Select Action' }}
                        <span class="ml-2">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="origin-top-right absolute right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a wire:click="driving" type="button"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                role="menuitem">Driving</a>
                            <a wire:click="departure" type="button"
                                onclick="return confirm('Are you sure you want to perform this action?');"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                role="menuitem">Departure</a>
                            <a wire:click="failed" type="button"
                                onclick="return confirm('Are you sure you want to perform this action?');"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                role="menuitem">Failed</a>
                            <a wire:click="break" type="button"
                                onclick="return confirm('Confirm your Request for Break?');"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                role="menuitem">Break</a>
                            <a wire:click="lunch" type="button"
                                onclick="return confirm('Confirm your Request for Lunch?');"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                role="menuitem">Lunch</a>
                        </div>
                    </div>
                </div>

                <div wire:poll class="order-last mt-3 md:mt-0">
                    <button type="button" wire:click="updateQueue"
                        class=" inline-flex items-center p-2 md:p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                    </button>
                </div>
            </div>
        </div>

        {{-- Notification --}}
        <div x-data="{ showNotification: false, message: '', error: '' }" x-init="() => {
            showNotification = {{ session('message') || session('error') ? 'true' : 'false' }};
            message = showNotification && '{{ session('message') }}';
            error = showNotification && '{{ session('error') }}';
            if (showNotification) {
                setTimeout(() => {
                    showNotification = false;
                }, 2000);
            }
        }" x-show="showNotification"
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2"
            class="fixed bottom-0 right-0 p-4 z-50">

            @if (session('message'))
                <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md text-lg">
                    <p>{{ session('message') }}</p>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-500 text-white px-6 py-3 rounded-lg shadow-md text-lg">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
        </div>


        <div wire:poll class="">
            <form wire:submit.prevent="addRevenue">
                <div class="py-3 px-6">
                    @forelse($trips as $trip)
                        <div class="py-3 mx-2">
                            <x-label for="cardid" value="{{ __('Card ID') }}" />
                            <x-input wire:model="cardid" id="cardid" class="block mt-1 w-full " type="number"
                                name="cardid" placeholder="Scan ID" required autofocus autocomplete="cardid" />
                        </div>
                        <div class="flex flex-col lg:flex-row my-3">
                            <div class="flex-1 mx-2">
                                <x-label for="Location" class="uppercase" value="{{ __('Location') }}" />
                                <input type="text"
                                    class="uppercase text-center bg-yellow-400 block w-full p-2 sm:p-4 text-gray-900 border border-gray-300 rounded-lg sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ $trip->location }}" readonly>
                            </div>
                            <div class="flex-none mx-2">
                                <x-label for="trips" class="uppercase" value="{{ $trip->trips }}" />
                                <input wire:model="fare" type="text" name="fare" id="fare"
                                    class="text-center bg-yellow-500 block w-full sm:p-4 text-gray-900 border border-gray-300 rounded-lg sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    readonly>

                            </div>
                            <div class="flex-1 mx-2">
                                <x-label for="destination" class="uppercase" value="{{ __('Destination') }}" />
                                <input type="text"
                                    class="uppercase text-center bg-yellow-400 block w-full p-2 sm:p-4 text-gray-900 border border-gray-300 rounded-lg sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ $trip->destination }}" readonly>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-lg p-4 mx-auto max-w-md mt-5 sm:flex-row">
                            <div class="py-2 sm:py-1">
                                <label>
                                    <input type="radio" wire:model="discount" value="standard">
                                    <span class="mr-8">Standard</span>
                                </label>
                            </div>
                            <div class="py-2 sm:py-1">
                                <label>
                                    <input type="radio" wire:model="discount" value="student">
                                    <span class="mr-8">Student</span>
                                </label>
                            </div>
                            <div class="py-2 sm:py-1">
                                <label>
                                    <input type="radio" wire:model="discount" value="senior">
                                    <span class="mr-8">Senior | PWD</span>
                                </label>
                            </div>
                        </div>
                    @empty
                        <div>
                            <p class="font-semibold text-xl mx-3 pt-5 uppercase">No trips found for you.</p>
                        </div>
                    @endforelse
                </div>


                <x-input wire:model="user" id="user" class="hidden mt-1 w-full" type="text" name="user"
                    value="{{ Auth::user()->name }}" required autofocus autocomplete="user" />
                <div class="py-3 px-6">
                    <x-button class="hidden w-full sm:w-48 md:w-64" type="submit">{{ __('Scan') }}</x-button>
                </div>

                <div class="py-3 px-6">
                    <x-button class="hidden w-full sm:w-48 md:w-64" type="submit" wire:loading.attr="disabled">
                        {{ __('Scan') }}
                    </x-button>
                </div>

            </form>
        </div>

        {{-- Tables --}}
        <div wire:poll class="grid grid-cols-1 sm:grid-cols-2">
            {{-- Revenue Table --}}
            <div class="py-6">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">

                        <div class="hidden sm:max-w:block md:hidden lg:block xl:block">
                            <!-- Content for Laptop and Desktop View -->
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <h2 class="font-semibold text-md capitalize p-5">revenue</h2>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Card ID
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Card Holder
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Fare
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Payment
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Balance
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Driver
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th class="px-6 py-4">
                                                    {{ $item->card_id }}
                                                </th>
                                                <th class="px-6 py-4">
                                                    {{ $item->card->name }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $item->fare }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->payment_method }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->status }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @php
                                                        $cardBalance = null;
                                                        foreach ($cardData as $data) {
                                                            if ($data->card_id === $item->card_id) {
                                                                $cardBalance = $data->card_balance;
                                                                break; // Exit the loop once a match is found
                                                            }
                                                        }
                                                        // Display card balance
                                                        echo isset($cardBalance) ? $cardBalance : 'N/A'; // Show "N/A" if balance is not found
                                                    @endphp
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $item->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="block sm:max-w:hidden md:block lg:hidden xl:hidden">
                            <!-- Content for Mobile and Tablet View -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <h2 class="font-semibold text-md capitalize">revenue</h2>
                                @foreach ($items as $item)
                                    <div class="py-2 text-center">
                                        <div class="py-2 text-center">
                                            <div class="p-4 bg-slate-50 bg-opacity-75 shadow-lg rounded-md">
                                                <p class="text-md font-semibold text-red-500">Date
                                                    {{ $item->card_id }}
                                                </p>
                                                <p class="text-md font-semibold text-red-400">Time {{ $item->fare }}
                                                </p>
                                                <h2 class="text-lg font-normal text-slate-500 mb-2 ">
                                                    {{ $item->payment_method }}</h2>
                                                <p class="grid justify-items-center">location {{ $item->status }}</p>
                                                <h2 class="text-xl font-medium text-slate-700 mb-2"> @php
                                                    $cardBalance = null;
                                                    foreach ($cardData as $data) {
                                                        if ($data->card_id === $item->card_id) {
                                                            $cardBalance = $data->card_balance;
                                                            break; // Exit the loop once a match is found
                                                        }
                                                    }
                                                    // Display card balance
                                                    echo isset($cardBalance) ? $cardBalance : 'N/A'; // Show "N/A" if balance is not found
                                                @endphp
                                                </h2>
                                                <p class="text-md font-semibold text-slate-700">Plate Number
                                                    {{ $item->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mx-5 my-4 z-10">
                            {{ $items->links() }}
                        </div>

                    </div>
                </div>
            </div>

            {{-- Trip lOGS --}}
            <div class="py-6">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">

                        <div class="hidden sm:max-w:block md:hidden lg:block xl:block">
                            <!-- Content for Laptop and Desktop View -->
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <h2 class="font-semibold text-md capitalize p-5">trip logs</h2>
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Location
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Destination
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Jeep
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Trip
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($triplogs as $triplog)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th class="px-6 py-4">
                                                    {{ $triplog->location }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $triplog->destination }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $triplog->date }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $triplog->jnumber }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $triplog->trips }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $triplog->status }}
                                                </td>
                                            </tr>
                                        @empty
                                            <div>
                                                <td colspan="3">No logs found for you.</td>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="block sm:max-w:hidden md:block lg:hidden xl:hidden">
                            <!-- Content for Mobile and Tablet View -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <h2 class="font-semibold text-md capitalize">trip logs</h2>
                                @foreach ($triplogs as $triplog)
                                    <div class="py-2 text-center">
                                        <div class="py-2 text-center">
                                            <div class="p-4 bg-slate-50 bg-opacity-75 shadow-lg rounded-md">
                                                <p class="text-md font-semibold text-red-500">Date
                                                    {{ $triplog->location }}</p>
                                                <p class="text-md font-semibold text-red-400">Time
                                                    {{ $triplog->destination }}</p>
                                                <h2 class="text-lg font-normal text-slate-500 mb-2 ">
                                                    {{ $triplog->date }}
                                                </h2>
                                                <p class="grid justify-items-center">location {{ $triplog->jnumber }}
                                                </p>
                                                <h2 class="text-xl font-medium text-slate-700 mb-2">
                                                    {{ $triplog->trips }}
                                                </h2>
                                                <p class="text-md font-semibold text-slate-700">Plate Number
                                                    {{ $triplog->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mx-5 my-4 z-10">
                            {{ $triplogs->links() }}
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
