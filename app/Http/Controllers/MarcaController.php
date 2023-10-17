<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index(Request $request)
    {
        $marca = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function show($id)
    {
        $marca = Marca::findOrFail($id);
        return view('marcas.show', compact('marca'));
    }

    public function create()
    {
        $marca = Marca::all();
        return view('marcas.create',compact('marca')); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $marca = Marca::create($request->all());
        return redirect()->route('marcas.index',compact('marca'));
    }

    public function edit($id)
    {
        $marca = Marca::find($id);

        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required', 
        ]);

        $input=$request->all();
        $marca = Marca::find($id);
        return redirect()->route('marcas.index',compact('marca'));
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        
        if($marca){
            $marca->delete();
        }else{
            return redirect()->route('marcas.index',compact('marca'));
        }

        return redirect()->route('marcas.index');
    }
}
