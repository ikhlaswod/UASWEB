<?php

namespace App\Http\Controllers;

use App\Testimoni;
use File;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::orderby('created_at','DESC')->paginate(5);
        return view('testimoni.index',compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('testimoni.create');
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
            'nama' => 'required|max:255',
            'email' => 'required',
            'ket' => 'required|max:255'
        ]);

        $testimonis = new Testimoni;
        $testimonis->gambar = $request->gambar;
        $testimonis->nama = $request->nama;
        $testimonis->email = $request->email;
        $testimonis->ket = $request->ket;

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);
            $testimonis->gambar = $filename;
        }
        $testimonis->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resourcen.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonis = Testimoni::findOrFail($id);
        return view('testimoni.show',compact('testimonis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonis = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimonis'));
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
            'nama' => 'required|max:255',
            'email' => 'required',
            'ket' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $testimonis = Testimoni::findOrFail($id);
        $testimonis->gambar = $request->gambar;
        $testimonis->judul = $request->judul;
        $testimonis->judul = $request->judul;
        $testimonis->ket = $request->ket;

        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath,$filename);

        if($testimonis->gambar) {
            $old_foto = $testimonis->gambar;
            $filepath = public_path() .DIRECTORY_SEPARATOR. '/images/avatar'
            . DIRECTORY_SEPARATOR . $testimonis->gambar;
            try {
                File::delete($filepath);
            }catch(FileNotFoundException $e){

            }
        }    
            $testimonis->gambar = $filename;
    }

        $testimonis->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonis = Testimoni::findOrFail($id);

        if($testimonis->file_gambar){
            $old_foto = $testimonis->file_gambar;
            $filepath = public_path() .DIRECTORY_SEPARATOR. 'assets/images/avatar/'
            . DIRECTORY_SEPARATOR . $testimonis->file_gambar;

            try{
                File::delete($filepath);
            }catch (FileNotFoundException $e){

            }
        }
        $testimonis->delete();
        return redirect()->route('testimoni.index');
    }
}
 