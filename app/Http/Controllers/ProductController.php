<?php

namespace App\Http\Controllers;

use App\Models\Product;
use ComposerAutoloaderInit88970a0117c062eed55fa8728fc43833;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'opis' => 'nullable|string',
            'slika' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'istaknuto' => 'nullable|boolean',
        ]);

        if ($request->hasFile('slika')) {
            $path = $request->file('slika')->store('slike', 'public');
            $validated['slika'] = $path;
        }

        $validated['istaknuto'] = $request->has('istaknuto');

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Proizvod dodat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'opis' => 'nullable|string',
            'slika' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'istaknuto' => 'nullable|boolean',
        ]);

        if ($request->hasFile('slika')) {
            $path = $request->file('slika')->store('slike', 'public');
            $validated['slika'] = $path;
        }

        $validated['istaknuto'] = $request->has('istaknuto');

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Proizvod ažuriran.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Proizvod  obrisan');
    }
}
