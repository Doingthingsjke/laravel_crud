<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarModelRequest;
use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $car_models = CarModel::with(['car'])->get();
        return view('car-models.index', compact('car_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::get();
        return view('car-models.form', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarModelRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarModelRequest $request)
    {
        $car_model = CarModel::create([
            'model' => $request->model,
            'car_id' => $request->car_id,
            'engine_power' => $request->engine_power,
            'year_released' => $request->year_released
        ]);
        return redirect()->route('car-models.index')->withSuccess('Created car-model: '. $car_model->model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(CarModel $car_model)
    {
        return view('car-models.show', compact('car_model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CarModel $car_model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(CarModel $car_model)
    {
        $cars = Car::get();
        return view('car-models.form', compact('car_model', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarModelRequest $request
     * @param CarModel $car_model
     * @return \Illuminate\Http\Response
     */
    public function update(CarModelRequest $request, CarModel $car_model)
    {
        $car_model->update($request->only(['model', 'car_id', 'engine_power', 'year_released']));
        return redirect()->route('car-models.index')->withSuccess('Updated car-model: '. $car_model->model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $car_model)
    {
        $car_model->delete();
        return redirect()->route('car-models.index')->withDanger('Deleted car-model: '. $car_model->model);
    }
}
