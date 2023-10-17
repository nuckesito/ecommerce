<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $categoria = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        $categoria = Categoria::all();
        return view('categorias.create', compact('categoria'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $categoria = Categoria::create($request->all());
        return redirect()->route('categorias.index', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input = $request->all();
        $categoria = Categoria::find($id);
        $categoria->update($input);
        return redirect()->route('categorias.index', compact('categoria'));
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        if ($categoria) {
            $categoria->delete();
        } else {
            return redirect()->route('categorias.index')->with('error', 'No se encontró la categoria');
        }
        return redirect()->route('categorias.index');
    }
}
