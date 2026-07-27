<?php
namespace App\Http\Controllers;

use App\Models\PengunjungModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PengunjungController extends Controller
{

    public function index(Request $request) : view
    {
        $page = $request->input('page', 1);
        $perPage = 5;
        $data['pengunjung'] = PengunjungModel::orderBy('id','desc')->paginate(5); 
        $total = PengunjungModel::count();
        $totalPages = ceil($total / $perPage); 
        $data['totalpages']=$totalPages;
        return view('pengunjung.index', $data);
        $dataCount = PengunjungModel::count();
        return view('pengunjung', compact('dataCount'));
        // $pengunjung = PengunjungModel::all(); // Ambil semua data dari tabel pengunjung
        // return view('pengunjung.index', compact('pengunjung'));
    }

    public function create() : view
    {
        return view('pengunjung.create');
    }
     
    
    public function store(Request $request) : RedirectResponse
    {
        $validatedData = $request->validate([
          'nama_lengkap' => 'required',
          'email' => 'required',
          'no_hp' => 'required',
          'asal' => 'required',
          'jenis_kelamin' => 'required',
          'tanggal_lahir' => 'required',
          'tanggal_kunjungan' => 'required',

        ]);


        $pengunjung = new PengunjungModel; 
        $pengunjung->nama_lengkap = $request->nama_lengkap;
        $pengunjung->email = $request->email;
        $pengunjung->no_hp = $request->no_hp;
        $pengunjung->asal = $request->asal;
        $pengunjung->jenis_kelamin = $request->jenis_kelamin;
        $pengunjung->tanggal_lahir = $request->tanggal_lahir;
        $pengunjung->tanggal_kunjungan = $request->tanggal_kunjungan;

        $pengunjung->save();     
        return redirect()->route('pengunjung.index')
                         ->with('success','pengunjung has been created successfully.');
    }
       
    public function show(PengunjungModel $pengunjung) : view
    {
        return view('pengunjung.show',compact('pengunjung'));
    } 
      
    
    public function edit(PengunjungModel $pengunjung) : view
    {
        return view('pengunjung.edit',compact('pengunjung'));
    }
     
    
    public function update(Request $request, $id) : RedirectResponse
    {
        $request->validate([
          'nama_lengkap' => 'required',
          'email' => 'required',
          'no_hp' => 'required',
          'asal' => 'required',
          'jenis_kelamin' => 'required',
          'tanggal_lahir' => 'required',
          'tanggal_kunjungan' => 'required',

        ]);

        $pengunjung = PengunjungModel::find($id); 

        // Check if pengunjung exists
        if (!$pengunjung) {
            return redirect()->route('pengunjung.index')
                            ->with('error', 'Pengunjung not found');
        }
        $pengunjung->nama_lengkap= $request->nama_lengkap;
        $pengunjung->email= $request->email;
        $pengunjung->no_hp= $request->no_hp;
        $pengunjung->asal= $request->asal;
        $pengunjung->jenis_kelamin= $request->jenis_kelamin;
        $pengunjung->tanggal_lahir= $request->tanggal_lahir;
        $pengunjung->tanggal_kunjungan= $request->tanggal_kunjungan;

        $pengunjung->save();
     
        return redirect()->route('pengunjung.index')
                         ->with('success','pengunjung Has Been updated successfully');
    }
     
    
    public function destroy(PengunjungModel $pengunjung) : RedirectResponse
    {
        $pengunjung->delete();    
        return redirect()->route('pengunjung.index')
                        ->with('success','pengunjung has been deleted successfully');
    }
}

     
