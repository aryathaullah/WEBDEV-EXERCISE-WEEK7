<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;
use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{

    public function index(){
        $laptops = Laptop::all();
        return view('list-laptop', compact('laptops'));
    }

    public function create(){
        return view('form-laptop');
    }

    public function store(Request $request){
        Laptop::create([
            "brand" => $request->brand,
            "model" => $request->model,
            "processor" => $request->processor,
            "ram" => $request->ram,
        ]);
        return redirect('/');
    }

    public function show(Laptop $laptop){
        //
    }

    public function edit(Laptop $laptop){
        return view('edit-laptop', compact('laptop'));
    }


    public function update(Request $request, Laptop $laptop){
        $laptop->update([
            "brand" => $request->brand,
            "model" => $request->model,
            "processor" => $request->processor,
            "ram" => $request->ram,
        ]);
        return redirect('/');

    }

    public function destroy(Laptop $laptop){
        $laptop->delete();
        return redirect('/');
    }
}
