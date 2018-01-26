<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use Input;

class Beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['berita'] = Berita::all();
        return view('admin.beranda.beranda_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.beranda.beranda_create');
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
        $file=$request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
        
        $data = $request-> all();
        $data['image']= $filename;
        
        Berita::create($data);
        return redirect()->route('berita1.index')->with('success', "<strong>Berita</strong> telah berhasil ditambahkan.");
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
        $data['berita'] = Berita::find($id);
        return view('admin.beranda.beranda_delete',$data);
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
        $data['berita'] = Berita::find($id);
        return view('admin.beranda.beranda_edit', $data);
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
        $file=$request->file('image');
        $filename = $file->getClientOriginalName();

        $file->move(public_path().'/uploads/',$filename);
        $data = $request-> all();
        $data['image']= $filename;

        $berita = Berita::find($id);

        $berita -> update($data);
        return redirect()->route('berita1.index')->with('success', "<strong>Berita</strong> berhasil diperbaharui.");
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
            $berita = Berita::find($id);
            $berita->delete();

            return redirect()->route('berita1.index')->with('success', "<strong>Berita</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}