<x-app-layout>
    <style>
        .image {
            background-image: url('https://scontent.fmnl17-4.fna.fbcdn.net/v/t39.30808-6/333301757_5309027922533223_2056172026227239585_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGXrbmiZs729RKtF70JIW0zqLDwnf8V-zmosPCd_xX7OQ6Nglq9qsHozfeydOVqKV8BbucROe1C03BuhoXdvcMh&_nc_ohc=iiyc_y8isowAX8_KGgf&_nc_ht=scontent.fmnl17-4.fna&oh=00_AfAgE2SXMjc9cuH0JX1jhw1NRFTzU2YKqVCAt7RtL7E7UA&oe=64F1FA9E');
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List of all Travel Trips') }}
            <p class="text-slate-500 text-sm py-2"></p>
        </h2>
    </x-slot>

    <livewire:dashboard />

    



</x-app-layout>
