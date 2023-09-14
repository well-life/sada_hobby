<?php

namespace App\Http\Controllers;

use App\Models\etalase;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EtalaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['title'] = 'Etalase';
        $data['query'] = $request->get('query');

        $etalases = Etalase::where('nama', 'like', '%' . $data['query'] . '%')->paginate(10);

        foreach ($etalases as $etalase) {
            $etalase->count = DB::table('etalases')
                ->join('products', 'etalases.id_etalase', '=', 'products.id_etalase')
                ->where('etalases.id_etalase', $etalase->id_etalase)
                ->count();
        }

        $data['etalase'] = $etalases;

        return view('etalase.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['title'] = 'Add Etalase';
        return view('etalase.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|unique:etalases',
        ]);

        $etalase = new etalase($request->all());
        $etalase->save();

        $historyController = new HistoryController();
        $historyController->addActivityEtalase($etalase->nama, Auth::id());
        return redirect('etalase')->with('success', 'Etalase berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(etalase $etalase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etalase $etalase)
    {
        //
        $data['title'] = 'Edit Etalase';
        $data['etalase'] = $etalase;
        return view('etalase.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, etalase $etalase)
    {
        //
        $request->validate([
            'nama' => 'required',
        ]);
        $etalase->nama = $request->nama;
        $etalase->save();

        $historyController = new HistoryController();
        $historyController->editActivityEtalase($etalase->nama, Auth::id());
        return redirect('etalase')->with('success', 'Etalase berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etalase $etalase)
    {
        try {
            $etalase->delete();
            $historyController = new HistoryController();
            $historyController->deleteActivityEtalase($etalase->nama, Auth::id());
            return redirect('etalase')->with('success', 'Etalase berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus etalase');
        }
    }
}
