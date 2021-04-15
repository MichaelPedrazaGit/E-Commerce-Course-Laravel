<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        if (session()->has('carrito') == false) {
            // agregar un flash para avisar q no hay productos en el carrito
            return redirect('product.index');
        } else {

            $productos = session()->get('carrito.productos');
            return view('components/cart.index', compact('productos'));
        }
    }

    public function indiceProductoEnCarrito($productosActuales, $productSelected)
    {
        $encontrado = -1;
        foreach ($productosActuales as $index => $producto) {
            if ($producto['producto']->id ==  $productSelected->id) {
                $encontrado = $index;
                break;
            }
        }

        return $encontrado;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productSelected = Product::find($request->productId);
        $amount = $request->amount;
        if ($request->session()->has('carrito') == false) {
            $request->session()->put('carrito', ['productos' => []]);
        }

        //verificacion si existe producto en el carrito

        $productosActuales = $request->session()->get('carrito.productos');

        $productoEncontrado = $this->indiceProductoEnCarrito($productosActuales, $productSelected);

        if ($productoEncontrado != -1) {
            $productosActuales[$productoEncontrado]['cantidad'] += $amount;
            $request->session()->put('carrito.productos', $productosActuales);
            $request->session()->flash('status',"se actualizo carrito");
            //unset
        } else {
            $request->session()->push('carrito.productos', ['producto' => $productSelected, 'cantidad' => $amount]);
            $request->session()->flash('status',"se agrego producto al carrito");
        }

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
    }
}
