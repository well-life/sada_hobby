<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['query'] = $request->get('query');

        $history = History::with('user')
            ->where('deskripsi', 'like', '%' . $data['query'] . '%')
            ->orWhereHas('user', function ($query) use ($data) {
                $query->where('username', 'like', '%' . $data['query'] . '%');
            })->paginate(10);

        $data['title'] = 'History';
        $data['history'] = $history;

        return view('history.index', $data);
    }

    public function addActivityEtalase($name, $userID)
    {

        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menambahkan etalase ' . $name;
        $history->save();
    }

    public function editActivityEtalase($name, $userID)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User mengedit etalase ' . $name;
        $history->save();
    }

    public function deleteActivityEtalase($name, $userID)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menghapus etalase ' . $name;
        $history->save();
    }

    public function addActivityProduct($name, $userID, $namaEtalase)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menambahkan produk ' . $name . ' pada etalase ' . $namaEtalase;
        $history->save();
    }

    public function editActivityProduct($name, $userID, $namaEtalase)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User mengedit produk ' . $name . ' pada etalase ' . $namaEtalase;
        $history->save();
    }

    public function deleteActivityProduct($name, $userID, $namaEtalase)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menghapus produk ' . $name . ' pada etalase ' . $namaEtalase;
        $history->save();
    }

    public function addActivityTransaksi($name, $userID, $tanggal)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menambahkan laporan transaksi pada ' . $tanggal . ' dengan nama produk ' . $name;
        $history->save();
    }

    public function editActivityTransaksi($name, $userID, $tanggal)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User mengedit laporan transaksi pada ' . $tanggal . ' dengan nama produk ' . $name;
        $history->save();
    }
    public function deleteActivityTransaksi($name, $userID, $tanggal)
    {
        $history = new history();
        $history->admin_id = $userID;
        $history->deskripsi = 'User menghapus laporan transaksi pada ' . $tanggal . ' dengan nama produk ' . $name;
        $history->save();
    }
}
