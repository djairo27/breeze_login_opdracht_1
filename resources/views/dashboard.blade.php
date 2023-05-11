<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if (Auth::check())
                    Welcome {{ Auth::user()->name }}, I see you are already logged in feel free to click on one of my dogs names in the navbar.
                @else
                    Welcome to my page, to see my photo's of my dogs you need to be logged in. If you dont have an acount you can make one by clicking register on the topright,
                     if you do have an account you can log in by clicking log in on the top right.
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
