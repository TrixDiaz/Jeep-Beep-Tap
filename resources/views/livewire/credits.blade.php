<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Title for Credits') }}
                    <p class="text-slate-500 text-sm py-2">Additional Subtitle here</p>
                </h2>
            </div>
            @role(3)
            <!-- Button trigger modal -->
            <div class="order-last">
                <button type="button"
                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                data-te-toggle="modal" data-te-target="#rightTopModal" data-te-ripple-init data-te-ripple-color="light">
                Driver Card
            </button>
            </div>

            <!-- Modal top right-->
            <div data-te-modal-init
                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                id="rightTopModal" tabindex="-1" aria-labelledby="rightTopModalLabel" aria-hidden="true">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none absolute right-7 h-auto w-full translate-x-[100%] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                    <div
                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">

                        <div class="relative flex flex-auto p-4" data-te-modal-body-ref>
                            <div
                        class="w-full h-full m-auto bg-red-100 rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">

                        <img class="relative object-cover w-full h-full rounded-xl" src="/image/debit.png">

                        <div class="w-full px-8 absolute top-8">
                            <div class="flex justify-between">
                                <div class="pt-5">
                                    <p class="font-light">
                                        Name
                                        </h1>
                                    <p class="font-medium tracking-widest">
                                        {{ Auth::user()->name }}
                                    </p>
                                </div>
                                <img class="w-14 h-14" src="/image/masterCard.png" />
                            </div>
                            <div class="pt-5">
                                <p class="font-light">
                                    Card Number
                                    </h1>
                                <p class="font-medium tracking-more-wider">
                                    @if ($walletSerial !== null)
                                                {{ $walletSerial }}
                                            @else
                                                No Register ID
                                            @endif
                                </p>
                            </div>
                            <div class="pt-10 pr-6">
                                <div class="flex justify-between">
                                    <div class="">
                                        <p class="font-light text-xs">
                                            Valid
                                            </h1>
                                        <p class="font-medium tracking-wider text-sm">
                                            11/15
                                        </p>
                                    </div>
                                    <div class="">
                                        <p class="font-light text-xs">
                                            Expiry
                                            </h1>
                                        <p class="font-medium tracking-wider text-sm">
                                            03/25
                                        </p>
                                    </div>

                                    <div class="">
                                        <p class="font-light text-xs">
                                            Balance
                                            </h1>
                                        <p class="font-bold tracking-more-wider text-sm">
                                            @if ($walletBalance !== null)
                                                        <p class="semi-bold">{{ $walletBalance }}</p>
                                                    @else
                                                        <p>No Balance</p>
                                                    @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        </div>
                        <div
                            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            {{-- <button type="button"
                                class="mr-2 inline-block rounded bg-info px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#54b4d3] transition duration-150 ease-in-out hover:bg-info-600 hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:bg-info-600 focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] focus:outline-none focus:ring-0 active:bg-info-700 active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.3),0_4px_18px_0_rgba(84,180,211,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(84,180,211,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(84,180,211,0.2),0_4px_18px_0_rgba(84,180,211,0.1)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Go to the cart
                            </button> --}}
                            <button type="button"
                                class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endrole
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-transparent dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 rounded shadow-md mb-3">
                    <!-- Top-Up Credits Form -->
                    <div class="rounded-lg bg-slate-50">
                        <!-- Content -->
                        <form action="{{ route('pay') }}">
                            @csrf
                            <h2 class="font-semibold text-3xl text-center text-slate-950 py-5 mx-auto">ADD CREDITS</h2>

                            {{-- Radio Button --}}
                            <ul class="grid w-full gap-6 md:grid-cols-3">
                                <li class="mx-5">
                                    <input  type="radio" id="credits" name="credits" value="100" class="hidden peer" checked required>
                                    <label for="credits" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">100</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                                <li class="mx-5">
                                    <input  type="radio" id="hosting-big" name="credits" value="200" class="hidden peer">
                                    <label for="hosting-big" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">200</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                                <li class="mx-5">
                                    <input  type="radio" id="hosting-small" name="credits" value="300" class="hidden peer">
                                    <label for="hosting-small" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">300</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                                <li class="mx-5">
                                    <input  type="radio" id="hosting" name="credits" value="500" class="hidden peer">
                                    <label for="hosting" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">500</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                                <li class="mx-5">
                                    <input  type="radio" id="small" name="credits" value="1000" class="hidden peer">
                                    <label for="small" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">1000</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                                <li class="mx-5">
                                    <input  type="radio" id="over" name="credits" value="2000" class="hidden peer">
                                    <label for="over" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">2000</div>
                                        </div>
                                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </label>
                                </li>
                            </ul>
                            {{-- Radio Button --}}

                            {{-- <div class="mx-6 py-2">
                                <x-label for="credits" value="{{ __('Credits') }}" />
                                <x-input wire:model="credits" id="credits" class="block mt-1 w-full md:w-92 mx-auto"
                                    type="text" name="credits" required autofocus autocomplete="credits"
                                    placeholder="amount" required
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" />

                            </div> --}}
                            <div class="mx-6 py-2">
                                <x-label for="cardid" value="{{ __('Card ID Number') }}" />
                                <x-input wire:model="cardid" id="cardid" class="block mt-1 w-full md:w-92 mx-auto"
                                    type="text" name="cardid" required autofocus autocomplete="cardid"
                                    placeholder="Card ID Number" required {{-- Numbers only Validation --}}
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" />
                            </div>

                            <div class="py-5 mx-5 pl-2">
                                <x-button class="uppercase">add credits</x-button>
                            </div>
                        </form>
                    </div>

                    <!-- Virtual Card Section -->
                    <div
                        class="w-full h-full m-auto bg-red-100 rounded-xl relative text-white shadow-2xl transition-transform transform hover:scale-110">

                        <img class="relative object-cover w-full h-full rounded-xl" src="/image/debit.png">

                        <div class="w-full px-8 absolute top-8">
                            <div class="flex justify-between">
                                <div class="pt-10">
                                    <p class="font-light">
                                        Name
                                        </h1>
                                    <p class="font-medium tracking-widest">
                                        {{ Auth::user()->name }}
                                    </p>
                                </div>
                                <img class="w-14 h-14" src="/image/masterCard.png" />
                            </div>
                            <div class="pt-10">
                                <p class="font-light">
                                    Card Number
                                    </h1>
                                <p class="font-medium tracking-more-wider">
                                    @if ($cardSerial !== null)
                                        {{ $cardSerial }}
                                    @else
                                        No Register ID
                                    @endif
                                </p>
                            </div>
                            <div class="pt-16 pr-6">
                                <div class="flex justify-between">
                                    <div class="">
                                        <p class="font-light text-xs">
                                            Valid
                                            </h1>
                                        <p class="font-medium tracking-wider text-sm">
                                            11/15
                                        </p>
                                    </div>
                                    <div class="">
                                        <p class="font-light text-xs">
                                            Expiry
                                            </h1>
                                        <p class="font-medium tracking-wider text-sm">
                                            03/25
                                        </p>
                                    </div>

                                    <div class="">
                                        <p class="font-light text-xs">
                                            Balance
                                            </h1>
                                        <p class="font-bold tracking-more-wider text-sm">
                                            {{ $cardBalance }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>




                <div class="hidden sm:max-w:hidden md:block lg:block xl:block">
                    <!-- Content for Laptop and Desktop View -->
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h2 class="font-semibold text-md capitalize p-5">History</h2>
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
                                        Amount
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date and Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cards as $card)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $card->card_id }}
                                        </th>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $card->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $card->amount }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $card->status }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $card->created_at }}
                                        </td>
                                    </tr>
                                @empty
                                    <th class="uppercase text-lg font-semibold">No Data Found</th>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block sm:max-w:hidden md:block lg:hidden xl:hidden">
                    <!-- Content for Mobile and Tablet View -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <h2 class="font-semibold text-md capitalize px-2 text-lg">History</h2>
                        <!-- Your mobile and tablet content here -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                            @foreach ($cards as $card)
                                <div class="py-2 text-center">
                                    <div class="py-2 text-center">
                                        <div class="p-4 bg-slate-50 bg-opacity-75 shadow-lg rounded-md">
                                            <p class="text-md font-semibold text-red-500">Date {{ $card->card_id }}
                                            </p>
                                            <p class="text-md font-semibold text-red-500">Date {{ $card->card_name }}
                                            </p>
                                            <p class="text-md font-semibold text-red-400">Time {{ $card->amount }}</p>
                                            <p class="text-md font-semibold text-red-500">Price {{ $card->status }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="py-2 px-3">
                        {{ $cards->links() }}
                    </div>
                </div>


            </div>
        </div>





        <script>
            let text = document.getElementById('myText').innerHTML;
            const copyContent = async () => {
                try {
                    await navigator.clipboard.writeText(text);
                    console.log('Content copied to clipboard');

                    // Change the button text to indicate success
                    document.getElementById('copy-button').textContent = 'Copied!';

                    // Revert the button text to its original state after 3 seconds
                    setTimeout(() => {
                        document.getElementById('copy-button').textContent = 'Copy to Clipboard';
                    }, 3000); // 3000 milliseconds = 3 seconds
                } catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
        </script>

    </div>
