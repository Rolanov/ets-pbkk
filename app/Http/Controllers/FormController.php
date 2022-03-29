<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute must be filled!',
            'min' => ':attribute must be filled with the minimum of :min characters!',
            'max' => ':attribute must be filled with the maximum of :max characters!'
        ];
        
        $this->validate($request,[
        //    'nama' => 'required',
           'KondisiKesehatan' => 'required',
           'SuhuTubuh' => 'required|numeric|min:35.0|max:45.5',
           'Resep' => 'mimes:pdf,png,jpg,jpeg'
        ]);
        $img_link = $this->saveImage( $request , 1);
        $request->nftfile = $img_link;
        return view('proses',['data' => $request]);
    }
    // public function saveImage(Request $request, $id)
    // {
    //     $img = $request->resep; 
    //     $img_name = ''; 
    //     if ($img !== NULL) {
    //         $img_name = 'nftfile'. $id . "." . $img->extension();
    //         $img_name = str_replace(' ', '-', strtolower($img_name)); 
    //         $img->storeAs(null, $img_name, ['disk' => 'public']); 
    //     }
    //     return asset('storage') . '/' . $img_name; 
    // }
    // public function dropDownShow(Request $request)
    // {
    //     $outputs = $pasien->pluck('nama', 'id');
    //     $selectedID = 2;
    //     return view('outputs.edit', compact('id', 'outputs'));
    // }
}