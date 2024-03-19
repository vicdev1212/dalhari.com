<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fa fa-users mr-1"></i>
            {{ __('Users') }}
        </h2>
    </x-slot>

    @push('js')
    @endpush
</x-app-layout>
