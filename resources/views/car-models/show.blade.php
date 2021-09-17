<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Model') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-center">
                <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="p-4">
                            <p class="text-3xl text-gray-900">{{ $car_model->model }}</p>
                        </div>
                        <div class="flex p-4 border-t border-gray-300 text-gray-700">
                            <div class="flex-1 inline-flex items-center">
                                Brand: <p>{{ $car_model->car->brand }}</p>
                            </div>
                        </div>
                        <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Engine power:  {{ $car_model->engine_power }}</div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Year Released:  {{ $car_model->year_released }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
