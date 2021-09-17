<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 justify-items-center">
                    <div class="w-full max-w-xs">
                        <form method="POST"
                              @if(isset($car))
                                action="{{ route('cars.update', $car) }}"
                              @else
                                action="{{ route('cars.store') }}"
                              @endif

                              enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            @isset($car)
                                @method('PUT')
                            @endisset
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="brand">
                                    Brand
                                </label>
                                <input name="brand" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('brand', isset($car) ? $car->brand : null) }}"
                                       id="brand" type="text" placeholder="Brand" required>
                                @error('brand')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                                    Country
                                </label>
                                <input name="country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('country', isset($car) ? $car->country : null) }}"
                                       id="country" type="text" placeholder="Country">
                                @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="logo">
                                    Logo
                                </label>
                                <input name="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value=""
                                       id="logo" type="file">
                                @error('logo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="website">
                                    Website
                                </label>
                                <input name="website" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('website', isset($car) ? $car->website : null) }}"
                                       id="website" type="text" placeholder="https://somesite.com">
                                @error('website')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
