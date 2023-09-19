<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
        <h2>
            <ul>
                <li>{{ $user->name }}</li>
                <li>{{ $user->email }}</li>
            </ul>
        </h2>
    </x-slot> 
</x-app-layout>