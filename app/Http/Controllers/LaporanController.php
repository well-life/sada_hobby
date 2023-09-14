<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;


class LaporanController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['query'] = $request->get('query');
        $data['bulan'] = $request->get('bulan');
        $data['tahun'] = $request->get('tahun'); // Menambahkan variabel tahun

        $laporan = Laporan::where('nama_produk', 'like', '%' . $data['query'] . '%');

        if ($data['bulan']) {
            $laporan->whereMonth('tanggal', $data['bulan']);
        }

        if ($data['tahun']) {
            $laporan->whereYear('tanggal', $data['tahun']); // Menambahkan filter berdasarkan tahun
        }

        $laporan = $laporan->paginate(10);
        $data['laporan'] = $laporan;
        $data['title'] = 'Laporan Transaksi';

        return view('transaksi.index', $data);
    }

    public function create()
    {

        $data['title'] = 'Add Laporan Transaksi';
        return view('transaksi/create', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'total_produk' => 'required',
            'total_transaksi' => 'required',
            'tanggal' => 'required',
        ]);

        Laporan::create([
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'total_produk' => $request->input('total_produk'),
            'total_transaksi' => $request->input('total_transaksi'),
            'tanggal' => $request->input('tanggal'),
        ]);


        $historyController = new HistoryController();
        $historyController->addActivityTransaksi($request->input('nama_produk'), Auth::id(), $request->input('tanggal'));
        return redirect('transaksi')->with('success', 'Laporan transaksi berhasil ditambahkan!');
    }

    public function edit(Laporan $laporan, $id)
    {
        //
        $data['title'] = 'Edit Laporan Transaksi';
        $laporan = Laporan::findOrFail($id);
        $data['laporan'] = $laporan;
        return view('transaksi.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['nama_produk', 'harga', 'total_produk', 'total_transaksi', 'tanggal']);
        Laporan::where('id_laporan', $id)->update($data);

        $historyController = new HistoryController();
        $historyController->editActivityTransaksi($request->input('nama_produk'), Auth::id(), $request->input('tanggal'));
        return redirect('transaksi')->with('success', 'Laporan transaksi berhasil diedit!');
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();

        $historyController = new HistoryController();
        $historyController->deleteActivityTransaksi($laporan->nama_produk, Auth::id(), $laporan->tanggal);
        return redirect('transaksi');
    }
    public function generatePDF(Request $request)
    {
        $data['query'] = $request->get('query');
        $data['bulan'] = $request->get('bulan');
        $data['tahun'] = $request->get('tahun');

        $laporan = Laporan::query();

        if ($data['query']) {
            $laporan->where('nama_produk', 'like', '%' . $data['query'] . '%');
        }

        if ($data['bulan']) {
            $laporan->whereMonth('tanggal', $data['bulan']);
        }

        if ($data['tahun']) {
            $laporan->whereYear('tanggal', $data['tahun']);
        }

        $data['laporan'] = $laporan->get();
        $data['title'] = 'Laporan Transaksi';

        $html = View::make('transaksi.pdf', $data)->render();
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();

        $output = $pdf->output();
        $response = Response::make($output, 200);
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'inline; filename="laporan_transaksi.pdf"');

        return $response;
    }
}
