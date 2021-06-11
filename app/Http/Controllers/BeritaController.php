<?php

namespace App\Http\Controllers;

use App\Berita;
use File;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::orderby('created_at','DESC')->get();
        return view('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar' => 'required',
            'judul' => 'required|max:255',
            'ket' => 'required'
        ]);

        $beritas = new berita;
        $beritas->gambar = $request->gambar;
        $beritas->judul = $request->judul;
        $beritas->ket = $request->ket;

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $beritas->gambar = $filename;
        }
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resourcen.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('berita.show',compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritas = Berita::findOrFail($id);
        return view('berita.edit',compact('beritas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'gambar' => 'required',
            'judul' => 'required|max:255',
            'ket' => 'required'
        ]);

        // update data berdasarkan id
        $beritas = Berita::findOrFail($id);
        $beritas->gambar = $request->gambar;
        $beritas->judul = $request->judul;
        $beritas->ket = $request->ket;

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);

        if($beritas->gambar) {
            $old_foto = $beritas->gambar;
            $filepath = public_path() .DIRECTORY_SEPARATOR. '/images/avatar'
            . DIRECTORY_SEPARATOR . $beritas->gambar;
            try {
                File::delete($filepath);
            }catch(FileNotFoundException $e){

            }
        }    
            $beritas->gambar = $filename;
    }

        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = Berita::findOrFail($id);

        if($beritas->file_gambar){
            $old_foto = $beritas->file_gambar;
            $filepath = public_path() .DIRECTORY_SEPARATOR. 'assets/images/avatar/'
            . DIRECTORY_SEPARATOR . $beritas->file_gambar;

            try{
                File::delete($filepath);
            }catch (FileNotFoundException $e){

            }
        }
        $beritas->delete();
        return redirect()->route('berita.index');
    }
}
 