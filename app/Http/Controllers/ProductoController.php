<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();
        $categorias=Categoria::all();
        return view('producto.index',compact('productos','categorias'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->idcategoria = $request->input('idcategoria');
        $producto->nombre = $request->input('nombre');
        $producto->cantidad = $request->input('cantidad');
        $producto->precio = $request->input('precio');
        $producto->save();
        return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $producto = Producto::find($id);
    $producto->idcategoria = $request->input('idcategoria');
    $producto->nombre = $request->input('nombre');
    $producto->cantidad = $request->input('cantidad');
    $producto->precio = $request->input('precio');
    $producto->save();
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos=Producto::find($id);
        $productos->delete();
        return redirect()->back();

        //
    }
}
