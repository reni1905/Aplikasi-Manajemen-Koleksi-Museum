<?php

namespace App\Http\Controllers;

use App\Models\ArkeologikaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ArkeologikaController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        
        // Joining the arkeologika table with the semuakoleksi table
        

        $arkeologika = DB::table('arkeologika')
            ->join('semuakoleksi', 'arkeologika.no_reg', '=', 'semuakoleksi.no_reg')
            ->select('arkeologika.*', 'semuakoleksi.*', 'arkeologika.id as id', 'semuakoleksi.id as semuakoleksi_id')
            ->orderBy('arkeologika.id', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        $total = DB::table('arkeologika')->count();
        $totalPages = ceil($total / $perPage);
        
        $data['arkeologika'] = $arkeologika;
        $data['totalpages'] = $totalPages;

        return view('arkeologika.index', $data);
    }

    public function create() : view
    {
        return view('arkeologika.create');
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


        $arkeologika = new ArkeologikaModel; 
        $arkeologika->no_reg = $request->no_reg;
        $arkeologika->no_inv = $request->no_inv;
        $arkeologika->jenis = $request->jenis;
        $arkeologika->nama_benda = $request->nama_benda;
        $arkeologika->bahan = $request->bahan;
        $arkeologika->asal_ditemukan = $request->asal_ditemukan;
        $arkeologika->tempat_pembuatan = $request->tempat_pembuatan;
        $arkeologika->cara_didapat = $request->cara_didapat;
        $arkeologika->tahun_abad_masa = $request->tahun_abad_masa;
        $arkeologika->tempat_simpan = $request->tempat_simpan;
        $arkeologika->ukuran = $request->ukuran;
        $arkeologika->keterangan = $request->keterangan;
        $arkeologika->deskripsi_benda = $request->deskripsi_benda;

        $arkeologika->save();     
        return redirect()->route('arkeologika.index')
                         ->with('success','arkeologika has been created successfully.');
    }
       
    public function show(ArkeologikaModel $arkeologika) : view
    {
        return view('arkeologika.show',compact('arkeologika'));
    } 
      
    
    public function edit(ArkeologikaModel $arkeologika) : view
    {
        return view('arkeologika.edit',compact('arkeologika'));
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

        $arkeologika = ArkeologikaModel::find($id); 

        // Check if arkeologika exists
        if (!$arkeologika) {
            return redirect()->route('arkeologika.index')
                            ->with('error', 'Arkeologika not found');
        }
        $arkeologika->no_reg= $request->no_reg;
        $arkeologika->no_inv= $request->no_inv;
        $arkeologika->jenis= $request->jenis;
        $arkeologika->nama_benda= $request->nama_benda;
        $arkeologika->bahan= $request->bahan;
        $arkeologika->asal_ditemukan= $request->asal_ditemukan;
        $arkeologika->tempat_pembuatan= $request->tempat_pembuatan;
        $arkeologika->cara_didapat= $request->cara_didapat;
        $arkeologika->tahun_abad_masa= $request->tahun_abad_masa;
        $arkeologika->tempat_simpan= $request->tempat_simpan;
        $arkeologika->ukuran= $request->ukuran;
        $arkeologika->keterangan= $request->keterangan;
        $arkeologika->deskripsi_benda= $request->deskripsi_benda;

        $arkeologika->save();
     
        return redirect()->route('arkeologika.index')
                         ->with('success','arkeologika Has Been updated successfully');
    }
     
    
    public function destroy(ArkeologikaModel $arkeologika) : RedirectResponse
    {
        $arkeologika->delete();    
        return redirect()->route('arkeologika.index')
                        ->with('success','arkeologika has been deleted successfully');
    }
}

     
