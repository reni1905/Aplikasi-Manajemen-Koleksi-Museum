<?php


namespace App\Http\Controllers;

use App\Models\SemuakoleksiModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class SemuakoleksiController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        $data['semuakoleksi'] = SemuakoleksiModel::orderBy('id','desc')->paginate(5); 
        $total = SemuakoleksiModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('semuakoleksi.index', $data);
    }

    public function create() : view
    {
        return view('semuakoleksi.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'no_reg' => 'required',
          'no_inv' => 'required',
          'jenis' => 'required',
          'nama_benda' => 'required',
          'bahan' => 'required',
          'asal_ditemukan' => 'required',
          'tempat_pembuatan' => 'required',
          'cara_didapat' => 'required',
          'tahun_abad_masa' => 'required',
          'tempat_simpan' => 'required',
          'ukuran' => 'required',
          'keterangan' => 'required',
          'deskripsi_benda' => 'required',

        ]);


        $semuakoleksi = new SemuakoleksiModel; 
        $semuakoleksi->no_reg = $request->no_reg;
        $semuakoleksi->no_inv = $request->no_inv;
        $semuakoleksi->jenis = $request->jenis;
        $semuakoleksi->nama_benda = $request->nama_benda;
        $semuakoleksi->bahan = $request->bahan;
        $semuakoleksi->asal_ditemukan = $request->asal_ditemukan;
        $semuakoleksi->tempat_pembuatan = $request->tempat_pembuatan;
        $semuakoleksi->cara_didapat = $request->cara_didapat;
        $semuakoleksi->tahun_abad_masa = $request->tahun_abad_masa;
        $semuakoleksi->tempat_simpan = $request->tempat_simpan;
        $semuakoleksi->ukuran = $request->ukuran;
        $semuakoleksi->keterangan = $request->keterangan;
        $semuakoleksi->deskripsi_benda = $request->deskripsi_benda;

        $semuakoleksi->save();     
        return redirect()->route('semuakoleksi.index')
                         ->with('success','semuakoleksi has been created successfully.');
    }
       
    public function show(SemuakoleksiModel $semuakoleksi) : view
    {
        return view('semuakoleksi.show',compact('semuakoleksi'));
    } 
      
    
    public function edit(SemuakoleksiModel $semuakoleksi) : view
    {
        return view('semuakoleksi.edit',compact('semuakoleksi'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'no_reg' => 'required',
          'no_inv' => 'required',
          'jenis' => 'required',
          'nama_benda' => 'required',
          'bahan' => 'required',
          'asal_ditemukan' => 'required',
          'tempat_pembuatan' => 'required',
          'cara_didapat' => 'required',
          'tahun_abad_masa' => 'required',
          'tempat_simpan' => 'required',
          'ukuran' => 'required',
          'keterangan' => 'required',
          'deskripsi_benda' => 'required',

        ]);

        $semuakoleksi = SemuakoleksiModel::find($id); 

        // Check if semuakoleksi exists
        if (!$semuakoleksi) {
            return redirect()->route('semuakoleksi.index')
                            ->with('error', 'Semuakoleksi not found');
        }
        $semuakoleksi->no_reg= $request->no_reg;
        $semuakoleksi->no_inv= $request->no_inv;
        $semuakoleksi->jenis= $request->jenis;
        $semuakoleksi->nama_benda= $request->nama_benda;
        $semuakoleksi->bahan= $request->bahan;
        $semuakoleksi->asal_ditemukan= $request->asal_ditemukan;
        $semuakoleksi->tempat_pembuatan= $request->tempat_pembuatan;
        $semuakoleksi->cara_didapat= $request->cara_didapat;
        $semuakoleksi->tahun_abad_masa= $request->tahun_abad_masa;
        $semuakoleksi->tempat_simpan= $request->tempat_simpan;
        $semuakoleksi->ukuran= $request->ukuran;
        $semuakoleksi->keterangan= $request->keterangan;
        $semuakoleksi->deskripsi_benda= $request->deskripsi_benda;

        $semuakoleksi->save();
     
        return redirect()->route('semuakoleksi.index')
                         ->with('success','semuakoleksi Has Been updated successfully');
    }
     
    
    public function destroy(SemuakoleksiModel $semuakoleksi) : RedirectResponse
    {
        $semuakoleksi->delete();    
        return redirect()->route('semuakoleksi.index')
                        ->with('success','semuakoleksi has been deleted successfully');
    }
}

     
