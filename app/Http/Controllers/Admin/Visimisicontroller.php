<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Input;

class Visimisicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['visimisi'] = Visimisi::all();
        return view('admin.visimisi.visimisi_list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.visimisi.visimisi_create');
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
        $data = $request->all();
        Visimisi::create($data);
        return redirect()->route('visimisi1.index')->with('success', "<strong>Visi Misi</strong> telah berhasil ditambahkan.");
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
        $data['visimisi'] = Visimisi::find($id);
        return view('admin.visimisi.visimisi_delete',$data);
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
        $data['visimisi'] = Visimisi::find($id);
        return view('admin.visimisi.visimisi_edit', $data);
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
        $data = $request->all();
        $visimisi = Visimisi::find($id);
        $visimisi -> update($data);
        return redirect()->route('visimisi1.index')->with('success', "<strong>Visi Misi</strong> berhasil diperbaharui.");
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
            $visimisi = Visimisi::find($id);
            $visimisi->delete();

            return redirect()->route('visimisi1.index')->with('success', "<strong>Visi Misi</strong> berhasil dihapus.");    
        }
        catch(ModelNotFoundException $ex){
            if ($ex instanceof  ModelNotFoundException) {
                return response()->view('errors.'.'404');
            }
        }
    }
}
