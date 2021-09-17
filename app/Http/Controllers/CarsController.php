<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarRequest $request)
    {
        $path = $request->file('logo')->store('uploads', 'public');
        $car = Car::create([
            'brand' => $request->brand,
            'country' => $request->country,
            'logo' => $path,
            'website' => $request->website
        ]);
        return redirect()->route('cars.index')->withSuccess('Created car: '. $car->brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.form', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarRequest $request
     * @param \App\Models\Car $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CarRequest $request, Car $car)
    {
        if (isset($request->logo)) {
            $path = $request->file('logo')->store('uploads', 'public');
            $car->update(['logo' => $path]);
        }
        $car->update($request->only(['brand', 'country', 'website']));
        return redirect()->route('cars.index')->withSuccess('Updated car: '. $car->brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->withDanger('Deleted car: '. $car->brand);
    }
}
