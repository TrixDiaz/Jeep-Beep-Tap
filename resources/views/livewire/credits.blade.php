<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Credits Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="grid grid-rows-4 grid-flow-col gap-4">
                    <div class="grid place-content-center row-span-4 col-span-2  bg-purple-200">
                        <h2 class="font-semibold text-3xl text-center text-slate-600 py-5">Top up Credits</h2>
                        <div class="mx-5">
                            <x-label for="email" value="{{ __('Credits') }}" />
                            <x-input id="credits" class="block mt-1 w-full" type="text" name="credits"
                                :value="old('credits')" required autofocus autocomplete="credits" />
                        </div>
                        <div class="py-5 mx-5 text-center">
                            <x-button>Pay Card</x-button>
                            <x-button>Pay E-Wallet</x-button>
                        </div>
                        
                    </div>
                    <div class="grid place-content-center row-span-2 col-span-2 bg-purple-200 text-center">
                        <h2 class="font-semibold text-2xl  text-slate-600 py-2">Balance Credits</h2>
                        <p class="font-bold text-xl">0</p>
                    </div>
                    <div class="grid place-content-center row-span-2 col-span-2 bg-purple-200 text-center">
                        <h2 class="font-semibold text-2xl  text-slate-600 py-2">Driver Wallet Balance</h2>
                        <p class="font-bold text-xl">0</p>
                        <div class="py-5 mx-5 text-center">
                            <x-button>Send</x-button>
                            <x-button>Withdraw</x-button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
