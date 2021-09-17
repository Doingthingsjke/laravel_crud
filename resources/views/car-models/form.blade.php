<x-admin-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Models') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 justify-items-center">
                    <div class="w-full max-w-xs">
                        <form method="POST"
                              @if(isset($car_model))
                              action="{{ route('car-models.update', $car_model) }}"
                              @else
                              action="{{ route('car-models.store') }}"
                              @endif
                              class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            @isset($car_model)
                                @method('PUT')
                            @endisset
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="model">
                                    Model
                                </label>
                                <input name="model" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('model', isset($car_model) ? $car_model->model : null) }}"
                                       id="model" type="text" placeholder="Model" required>
                                @error('model')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="car_id">
                                    Brand
                                </label>
                                <select id="car_id" name="car_id">
                                    @foreach($cars as $car)
                                        <option value="{{$car->id}}" @if(isset($car_model) && $car_model->car_id == $car->id) selected @endif>{{ $car->brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="engine_power">
                                    Engine Power
                                </label>
                                <input name="engine_power" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('engine_power', isset($car_model) ? $car_model->engine_power : null) }}"
                                       id="engine_power" type="text">
                                @error('engine_power')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="year_released">
                                    Year Released
                                </label>
                                <input name="year_released" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                       value="{{ old('year_released', isset($car_model) ? $car_model->year_released : null) }}"
                                       id="year_released" type="text" placeholder="****">
                                @error('year_released')
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

