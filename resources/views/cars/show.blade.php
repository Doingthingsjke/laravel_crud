<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-center">
                <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-cover bg-center h-56 p-4">
                            <img src="{{ asset('/storage/'.$car->logo) }}" alt="Logo">
                        </div>
                        <div class="p-4">
                            <p class="text-3xl text-gray-900">{{ $car->brand }}</p>
                        </div>
                        <div class="flex p-4 border-t border-gray-300 text-gray-700">
                            <div class="flex-1 inline-flex items-center">
                                <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                                </svg>
                                <p>{{ $car->country }}</p>
                            </div>
                        </div>
                        <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                            <a href="{{ $car->website }}" class="text-xs uppercase font-bold text-gray-600 tracking-wide">{{ $car->website }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
