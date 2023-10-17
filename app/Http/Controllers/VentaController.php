<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\User;

class VentaController extends Controller
{
    public function index(Request $request)
    {
        $venta = Venta::All();
        $user = User::All();
        return view('ventas.index', compact('venta', 'user'));
    }
    public function create()
    {
        $user = User::All();
        return view('ventas.crear', compact('user'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'total' => 'required',
            'address' => 'required',
            'id_User' => 'required',
            'date' => date('Y-m-d H:i:s'),
        ]);
        $venta = Venta::create($request->all());
        $user = User::All();
        return redirect()->route('ventas.index', compact('user'));
    }
    public function edit($id)
    {
        $venta = Venta::find($id);
        $user = User::All();
        return view('ventas.editar', compact('venta', 'user'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'total' => 'required',
            'address' => 'required',
            'id_User' => 'required',
            'date' => date('Y-m-d H:i:s'),
        ]);
        $input = $request->all();
        $venta = Venta::find($id);
        $venta->update($input);
        $user = User::All();
        return redirect()->route('ventas.index', compact('user'));
    }

    public function destroy($id)
    {
        $venta = Venta::find($id);
        $user = User::All();
        if($venta)
        {
            $venta->delete();
        }
        else
        {
            return redirect()->route('ventas.index', compact('user'))->with('error', 'Venta no encontrada'); 
        }
        return redirect()->route('ventas.index', compact('user'));
    }
}
