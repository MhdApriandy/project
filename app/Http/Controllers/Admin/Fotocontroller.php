<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Galeri;
use DB;
use Input;

class Fotocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['foto'] = DB::Select('Select fotos.*,galeris.* from fotos,galeris Where fotos.id_galeri=galeris.id');
        return view('admin.foto.foto_list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['galeri'] = Galeri::all();
        return view('admin.foto.foto_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file=$request->file('foto');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/galeri/',$filename);
        
        $data = $request-> all();
        $data['foto']= $filename;
        //return $data;
        Foto::create($data);
        return redirect()->route('foto1.index')->with('success', "<strong>Foto</strong> telah berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data['foto'] = Foto::find($id);
        return view('admin.foto.foto_delete',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data['galeri'] = Galeri::all();
        $data['foto'] = Foto::find($id);
        return view('admin.foto.foto_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $file=$request->file('foto');
        $filename = $file->getClientOriginalName();

        $file->move(public_path().'/uploads/galeri/',$filename);
        $data = $request-> all();
        $data['foto']= $filename;

        $foto = Foto::find($id);

        $foto -> update($data);
        return redirect()->route('foto1.index')->with('success', "<strong>Foto</strong> berhasil diperbaharui.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $foto = Foto::find($id);
            $foto->delete();

            return redirect()->route('foto1.index')->with('success', "<strong>Foto</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
