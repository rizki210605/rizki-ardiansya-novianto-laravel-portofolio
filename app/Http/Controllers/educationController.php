<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\riwayat;
use Illuminate\Http\Request;

class educationController extends Controller
{   
    private $_tipe;
    public function __construct()
{
    $this->_tipe = 'education';
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = riwayat::where('tipe', $this->_tipe)->orderBy('tgl_akhir','desc')->get();
        return view('dashboard.education.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.education.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session::flash('judul',$request->judul);
        session::flash('info1',$request->info1);
        session::flash('info2',$request->info2);
        session::flash('info3',$request->info3);
        session::flash('tgl_mulai',$request->tgl_mulai);
        session::flash('tgl_akhir',$request->tgl_akhir);
        $request->validate(
            [
                'judul'=> 'required',
                'info1'=>'required',
                'tgl_mulai'=>'required',
                

            ],[
                'judul.required'=> 'Judul Wajib Diisi',                
                'info1.required'=> 'Nama Perusahaan Wajib Diisi',
                'tgl_mulai.required'=> 'Tanggal Mulai Wajib Diisi',
            ]
        );

        $data = [
            'judul'=>$request->judul,
            'info1'=>$request->info1,
            'info2'=>$request->info2,
            'info3'=>$request->info3,
            'tipe'=>$this->_tipe,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_akhir'=>$request->tgl_akhir,
        ];
       riwayat::create($data);

        return redirect()->route('education.index')->with('success','Berhasil Menambahkan Data education');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = riwayat::where('id',$id)->where('tipe',$this->_tipe)->first();

        return view('dashboard.education.edit')->with('data',$data);
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
        {
            $request->validate(
                [
                    'judul'=> 'required',
                    'info1'=>'required',
                    'tgl_mulai'=>'required',
                    
    
                ],[
                    'judul.required'=> 'Judul Wajib Diisi',                
                    'info1.required'=> 'Nama Perusahaan Wajib Diisi',
                    'tgl_mulai.required'=> 'Tanggal Mulai Wajib Diisi',
                ]
            );
    
            $data = [
                'judul'=>$request->judul,
                'info1'=>$request->info1,
                'info2'=>$request->info2,
                'info3'=>$request->info3,
                'tipe'=>$this->_tipe,
                'tgl_mulai'=>$request->tgl_mulai,
                'tgl_akhir'=>$request->tgl_akhir,
            ];
            riwayat::where('id',$id)->where('tipe',$this->_tipe)->update($data);
    
            return redirect()->route('education.index')->with('success','Berhasil Menambahkan Data education');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        riwayat::where('id',$id)->where('tipe',$this->_tipe)->delete();
        return redirect()->route('education.index')->with('success','Berhasil Menghapus Data Education');
        
    }
}
