<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prenda;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;

class PrendaController extends Controller
{
    public function index(Request $request)
    {
        $prenda = Prenda::all();
        $categoria = Categoria::all();
        $marca = Marca::all();
        return view('prendas.index',compact('prenda','categoria','marca'));
    }

    public function show($id)
    {
        // Lógica para mostrar una prenda específica
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una prenda
        return view('prendas.crear');
    }

    public function store(Request $request)
    {
        // Lógica para guardar una nueva prenda en la base de datos
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'image_path' => 'required',
            'id_categoria' => 'required',
            'id_marca' => 'required',
        ]);

        $prenda = Prenda::create($request->all());

        return redirect()->route('prendas.index');
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de una prenda
        $prenda = Prenda::find($id);
        $marca = Marca::all();
        $categoria = Categoria::all();


        return view('prendas.editar', compact('prenda','marca','categoria'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar una prenda existente en la base de datos
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'color' => 'required',
            'price' => 'required',
            'image_path' => 'required',
            'id_categoria' => 'required',
            'id_marca' => 'required',
        ]);

        $input = $request->all();
        $prenda = Prenda::find($id);
        $prenda->update($input);
        $categoria = Categoria::all();
        $marca = Marca::all();
        return redirect()->route('prendas.index',compact('prenda','categoria','marca'));
    }

    public function destroy($id)
    {
        // Lógica para eliminar una prenda de la base de datos
        $prenda = Prenda::find($id);
        $categoria = Categoria::all();
        $marca = Marca::all();
        if($prenda){
            $prenda->delete();
        }else{
            return redirect()->route('prendas.index',compact('categoria','marca'))->with('error','Prenda no encontrado');
        }
        return redirect()->route('prendas.index',compact('categoria','marca'));
    }
}
