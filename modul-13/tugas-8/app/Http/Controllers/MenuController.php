<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('product.index', compact('menus'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu_code' => 'required|unique:menus,menu_code',
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image_url' => 'nullable|url',
            'description' => 'nullable',
        ]);

        Menu::create($request->all());

        return redirect()->route('product.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($product)
    {
        $menu = Menu::findOrFail($product);
        return view('product.edit', compact('menu'));
    }

    public function update(Request $request, $product)
    {
        $menu = Menu::findOrFail($product);
        $request->validate([
            'menu_code' => 'required|unique:menus,menu_code,' . $menu->id,
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image_url' => 'nullable|url',
            'description' => 'nullable',
        ]);

        $menu->update($request->all());

        return redirect()->route('product.index')->with('success', 'Menu berhasil diperbarui.');
    }

    public function destroy($product)
    {
        $menu = Menu::findOrFail($product);
        $menu->delete();
        return redirect()->route('product.index')->with('success', 'Menu berhasil dihapus.');
    }
}
