<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class blogControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = blog::orderBy('id_blog', 'desc')->paginate(5);
        return view('/dashboard/blog/index', ['blog'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/dashboard/blog/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menampilkan di isian create
        Session::flash('id_blog', $request->id_blog);
        Session::flash('judul', $request->judul);
        Session::flash('deskripsi', $request->deskripsi);

        $request->validate([
            'id_blog'=>'required | numeric',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif',
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'id_blog.required'=>'Id wajib diisi.',
            'thumbnail.required'=>'Silahkan masukkan gambar.',
            'thumbnail.mimes'=>'Gambar hanya diperbolehkan berekstensi jpg,jpeg,png,gif',
            'judul.required'=>'Judul Informasi Blog wajib diisi.',
            'deskripsi.required'=>'Deskripsi Informasi Blog wajib diisi.'
        ]);

        $namaFile = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('thumbnail'), $namaFile);
        
        $data = [
            'id_blog' => $request->input('id_blog'),
            'thumbnail' => $namaFile,
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi')
        ];
        blog::create($data);
        return redirect('/blog/')->with('success','Berhasil memasukan data informasi Blog baru.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = blog::where('id_blog', $id)->first();
        return view('/dashboard/blog/show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = blog::where('id_blog', $id)->first();
        return view('/dashboard/blog/edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required'=>'Judul Informasi Blog wajib diisi.',
            'deskripsi.required'=>'Deskripsi Informasi Blog wajib diisi.',
        ]);
        
        $blog = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        if($request->hasFile('thumbnail')){
            $request->validate([
                'thumbnail' => '|image|mimes:jpg,jpeg,png,gif'
            ], [
                'thumbnail.mimes' => 'Gambar hanya diperbolehkan berekstensi jpg,jpeg,png,gif'
            ]);
            $namaFile = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('thumbnail'), $namaFile);

            $gambar_data = blog::where('id_blog', $id)->first();
            File::delete(public_path('thumbnail').'/'.$gambar_data->thumbnail);

            
            $blog['thumbnail'] = $namaFile;
        }


        blog::where('id_blog', $id)->update($blog);
        return redirect('/blog/')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = blog::where('id_blog', $id)->first();
        File::delete(public_path('thumbnail').'/'.$blog->thumbnail);
        blog::where('id_blog', $id)->delete();
        return redirect('/blog/')->with('success', 'Berhasil hapus data.');
    }

    //function untuk menampilkan data blog ke halaman frontend
    public function tampilData(){
        $tampil = blog::all();
        return view('blogspot', ['tampil'=>$tampil]);
    }
}
