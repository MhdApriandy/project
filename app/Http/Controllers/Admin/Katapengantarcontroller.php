<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Katapengantar;
use Input;

class Katapengantarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['katapengantar'] = Katapengantar::all();
        return view('admin.katapengantar.katapengantar_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.katapengantar.katapengantar_create');
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

        Katapengantar::create($data);
        return redirect()->route('katapengantar1.index')->with('success', "<strong>Kata Pengantar</strong> telah berhasil ditambahkan.");
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
        $data['katapengantar'] = Katapengantar::find($id);
        return view('admin.katapengantar.katapengantar_delete',$data);
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
        $data['katapengantar'] = Katapengantar::find($id);
        return view('admin.katapengantar.katapengantar_edit', $data);
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

        $katapengantar = Katapengantar::find($id);

        $katapengantar -> update($data);
        return redirect()->route('katapengantar1.index')->with('success', "<strong>Kata Pengantar</strong> berhasil diperbaharui.");
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
            $katapengantar = Katapengantar::find($id);
            $katapengantar->delete();

            return redirect()->route('katapengantar1.index')->with('success', "<strong>Kata Pengantar</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
