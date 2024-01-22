<?php

namespace App\Http\Controllers;

use App\Models\katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class katalogControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = katalog::orderBy('id_katalog', 'desc')->paginate(5);
        return view('/dashboard/katalog/index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/katalog/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menampilkan di isian create
        Session::flash('id_katalog', $request->id_katalog);
        Session::flash('jenis', $request->jenis);
        Session::flash('harga', $request->harga);

        $request->validate([
            'id_katalog'=>'required | numeric',
            'gambar' => 'required|image|mimes: jpg,jpeg,png,gif',
            'jenis' => 'required',
            'harga' => 'required',
        ], [
            'id_katalog.required'=>'Id wajib diisi.',
            'gambar.required'=>'Silahkan masukkan gambar.',
            'gambar.mimes'=>'Gambar hanya diperbolehkan berekstensi jpg,jpeg,png,gif',
            'jenis.required'=>'Jenis Katalog wajib diisi.',
            'harga.required'=>'Harga Katalog wajib diisi.'
        ]);

        $fileName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('gambar'), $fileName);
        
        $data = [
            'id_katalog' => $request->input('id_katalog'),
            'gambar' => $fileName,
            'jenis' => $request->input('jenis'),
            'harga' => $request->input('harga')
        ];
        katalog::create($data);
        return redirect('/katalog/')->with('success','Berhasil memasukan data katalog baru.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = katalog::where('id_katalog', $id)->first();
        return view('/dashboard/katalog/detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = katalog::where('id_katalog', $id)->first();
        return view('/dashboard/katalog/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jenis' => 'required',
            'harga' => 'required',
        ], [
            'jenis.required'=>'Jenis Katalog wajib diisi.',
            'harga.required'=>'Harga Katalog wajib diisi.',
        ]);
        
        $data = [
            'jenis' => $request->input('jenis'),
            'harga' => $request->input('harga'),
        ];

        if($request->hasFile('gambar')){
            $request->validate([
                'gambar' => '|image|mimes:jpg,jpeg,png,gif'
            ], [
                'gambar.mimes' => 'Gambar hanya diperbolehkan berekstensi jpg,jpeg,png,gif'
            ]);
            $fileName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $fileName);

            $data_gambar = katalog::where('id_katalog', $id)->first();
            File::delete(public_path('gambar').'/'.$data_gambar->gambar);

            
            $data['gambar'] = $fileName;
        }


        katalog::where('id_katalog', $id)->update($data);
        return redirect('/katalog/')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = katalog::where('id_katalog', $id)->first();
        File::delete(public_path('gambar').'/'.$data->gambar);
        katalog::where('id_katalog', $id)->delete();
        return redirect('/katalog/')->with('success', 'Berhasil hapus data.');
    }
}
