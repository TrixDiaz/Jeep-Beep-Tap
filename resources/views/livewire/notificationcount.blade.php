<div>
    <button wire:poll
        class="mr-1.5 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
        type="button" data-te-offcanvas-toggle data-te-target="#offcanvasRight1" aria-controls="offcanvasRight"
        data-te-ripple-init data-te-ripple-color="light">
        Notification {{ auth()->user()->notifications->count() }}
    </button>
    <div class="invisible fixed bottom-0 right-0 top-0 z-[1045] flex w-96 max-w-full translate-x-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
         tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel" data-te-offcanvas-init>
        <div class="flex items-center justify-between p-4">
            <h5 class="mb-0 font-semibold leading-normal" id="offcanvasRightLabel">
                Notification
            </h5>
            <form action="{{ route('clear') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-400 text-sm">Clear</button>
            </form>
            <button type="button"
                    class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-offcanvas-dismiss>
                <span
                    class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="offcanvas-body flex-grow overflow-y-auto max-h-fit p-4">
            @foreach (auth()->user()->notifications as $notification)
                <div class="w-auto">
                    <p><strong>{{ $notification->data['title'] }}</strong></p>
                    <p class="w-full">{{ $notification->data['body'] }}</p>
                    <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                    <!-- Add more details as needed -->
                </div>
            @endforeach
        </div>
    </div>
</div>
