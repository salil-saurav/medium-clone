<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center mb-4 mt-4">
        <li class="me-2">
            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                aria-current="page">Tab 1</a>
        </li>
    </ul>

</x-app-layout>
