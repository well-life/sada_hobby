<?php

namespace App\Http\Controllers;

use App\Models\etalase;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $data['title'] = 'Produk';
        $data['query'] = $request->get('query');
        $product = Product::with('etalase')
            ->where('id_etalase', $id)
            ->where(function ($query) use ($data) {
                if ($data['query']) {
                    $query->where('nama', 'like', '%' . $data['query'] . '%');
                }
            })
            ->paginate(10);
        $data['etalase'] = etalase::where('id_etalase', $id)->get();
        return view('product/index', ['productList' => $product], $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        $data['title'] = 'Add Product';
        $product = product::all();
        return view('product/create', $data, ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|unique:products',
        ]);
        $newName = '';

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('image')->storeAs('uploads', $newName);
        } else {
            $path = '';
        }

        $product = new product();
        $product->etalase()->associate($request->id_etalase);
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->deskripsi = $request->deskripsi;
        $product->image = $path;
        $product->id_etalase = $request->id_etalase;
        $product->save();

        $historyController = new HistoryController();
        $historyController->addActivityProduct($product->nama, Auth::id(), $product->etalase['nama']);
        return redirect('etalase/product/' . $id)->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product, $id, $id_product)
    {
        //
        $data['title'] = 'Edit Product';
        $product = product::findOrFail($id_product);
        return view('product/edit', $data, ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product, $id_product)
    {
        $product = product::with('etalase')->findOrFail($id_product);

        // Single Assignment
        // $product->nama = $request->nama;
        // $product->harga = $request->harga;
        // $product->deskripsi = $request->deskripsi;
        // $product->id_etalase = $request->id_etalase;
        // $product->save();

        // Mass Assignment

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('image')->storeAs('uploads', $newName);
        } else {
            $path = '';
        }

        $pathImage = $product->image;
        if ($pathImage != null || $pathImage != '') {
            Storage::delete($pathImage);
        }

        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->deskripsi = $request->deskripsi;
        $product->image = $path;
        $product->id_etalase = $request->id_etalase;
        $product->save();
        $historyController = new HistoryController();
        $historyController->editActivityProduct($product->nama, Auth::id(), $product->etalase['nama']);
        return redirect('etalase/product/' . $product->id_etalase)->with('update', 'Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product, $id_product, $id)
    {

        $product = product::with('etalase')->findOrFail($id);
        $pathImage = $product->image;
        if ($pathImage != null || $pathImage != '') {
            Storage::delete($pathImage);
        }
        $product->delete();
        $historyController = new HistoryController();
        $historyController->deleteActivityProduct($product->nama, Auth::id(), $product->etalase['nama']);
        return redirect('etalase/product/' . $product->id_etalase)->with('delete', 'Produk berhasil dihapus');
    }
}
