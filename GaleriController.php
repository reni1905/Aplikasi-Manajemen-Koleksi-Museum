<?php


namespace App\Http\Controllers;

use App\Models\GaleriModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        
        // Joining the galeri table with the semuakoleksi table
        

        $galeri = DB::table('galeri')
            ->join('semuakoleksi', 'galeri.nama_benda', '=', 'semuakoleksi.nama_benda')
            ->select('galeri.*', 'semuakoleksi.*', 'galeri.id as id', 'semuakoleksi.id as semuakoleksi_id')
            ->orderBy('galeri.id', 'desc')
            ->paginate($perPage, ['*'], 'page', $page);

        $total = DB::table('galeri')->count();
        $totalPages = ceil($total / $perPage);
        
        $data['galeri'] = $galeri;
        $data['totalpages'] = $totalPages;

        return view('galeri.index', $data);
    }

    public function create() : view
    {
        return view('galeri.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'nama_benda' => 'required',
          'jenis' => 'required',
          'bahan' => 'required',
          'asal_ditemukan' => 'required',
          'tempat_pembuatan' => 'required',
          'cara_didapat' => 'required',
          'tahun_abad_masa' => 'required',
          'keterangan' => 'required',
          'deskripsi_benda' => 'required',
          'photo' => 'required',

        ]);


        $galeri = new GaleriModel;
        $galeri->nama_benda = $request->nama_benda;
        $galeri->jenis = $request->jenis;
        $galeri->bahan = $request->bahan;
        $galeri->asal_ditemukan = $request->asal_ditemukan;
        $galeri->tempat_pembuatan = $request->tempat_pembuatan;
        $galeri->cara_didapat = $request->cara_didapat;
        $galeri->tahun_abad_masa = $request->tahun_abad_masa;
        $galeri->keterangan = $request->keterangan;
        $galeri->deskripsi_benda = $request->deskripsi_benda;
        $galeri->photo = $request->photo;

        $galeri->save();     
        return redirect()->route('galeri.index')
                         ->with('success','galeri has been created successfully.');
    }
       
    public function show(GaleriModel $galeri) : view
    {
        return view('galeri.show',compact('galeri'));
    } 
      
    
    public function edit(GaleriModel $galeri) : view
    {
        return view('galeri.edit',compact('galeri'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'nama_benda' => 'required',
          'jenis' => 'required',
          'bahan' => 'required',
          'asal_ditemukan' => 'required',
          'tempat_pembuatan' => 'required',
          'cara_didapat' => 'required',
          'tahun_abad_masa' => 'required',
          'keterangan' => 'required',
          'deskripsi_benda' => 'required',
          'photo' => 'required',

        ]);

        $galeri = GaleriModel::find($id); 

        // Check if galeri exists
        if (!$galeri) {
            return redirect()->route('galeri.index')
                            ->with('error', 'Galeri not found');
        }
        $galeri->nama_benda= $request->nama_benda;
        $galeri->jenis= $request->jenis;
        $galeri->bahan= $request->bahan;
        $galeri->asal_ditemukan= $request->asal_ditemukan;
        $galeri->tempat_pembuatan= $request->tempat_pembuatan;
        $galeri->cara_didapat= $request->cara_didapat;
        $galeri->tahun_abad_masa= $request->tahun_abad_masa;
        $galeri->keterangan= $request->keterangan;
        $galeri->deskripsi_benda= $request->deskripsi_benda;
        $galeri->photo= $request->photo;

        $galeri->save();
     
        return redirect()->route('galeri.index')
                         ->with('success','galeri Has Been updated successfully');
    }
     
    
    public function destroy(GaleriModel $galeri) : RedirectResponse
    {
        $galeri->delete();    
        return redirect()->route('galeri.index')
                        ->with('success','galeri has been deleted successfully');
    }
}

     
