<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::orderBy('Make')->get();

        return view('cars.index',[
            'cars' => $cars
        ]);
    }

    public function store(Request $request) {
        Car::create([
            'make' => $request->make,
            'model' => $request->model,
            'year' => $request->year,
            'plate_no' => $request->plate_no,
        ]);

        return redirect('/cars');
    }

    public function edit(Car $cars) {

        return view('cars.edit', [
            'cars' => $cars
        ]);
    }

    public function update(Request $request, $cars){
        $input = $request->all();
        $cars = Car::find($cars);
        $cars->make=$input['Make'];
        $cars->model=$input['Model'];
        $cars->year=$input['Year'];
        $cars->plate_no=$input['plate_no'];



        $cars->save();
        return redirect('/cars');
    }

    public function delete(Car $cars) {

        return view('cars.delete', [
            'cars' => $cars
        ]);
    }

    public function destroy($cars){
        Car::find($cars)->delete();
        return redirect('/cars');
    }

}
