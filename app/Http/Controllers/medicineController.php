<?php

namespace App\Http\Controllers;
use App\Models\Medicine;
use App\Models\Generic;
use App\Models\Type;


use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class medicineController extends Controller
{
    public function medicine(){
        $medicine_type=Type::all();
        $generic_type=Generic::all();
        return view('backend.layout.medicine.addmedicine',compact('medicine_type','generic_type'));

    }
    public function medicinemanage(){
        $medicines=Medicine::all();
        // dd($medicines);
        return view('backend.layout.medicine.managemedicine',compact('medicines'));

    }
    public function medicinecreate(Request $request){

        $request->validate([
            'image'=>'required',
            'medicine_name'=>'required',
            'sale_price'=>'required|numeric',
            'description'=>'required',
            'type'=>'required|numeric',
            'generic'=>'required|numeric',
            'availability'=>'required',

        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $file =  $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
            // $file->storeAs('/uploads',$filename);
            $file->move(public_path('/uploads'),$filename);
        }
        Medicine::create([
            'image'=>$filename,
            'medicine_name'=> $request->medicine_name,
            'sale_price'=> $request->sale_price,
            'description'=> $request->description,
            'type_id'=> $request->type,
            'generic_id'=> $request->generic,
            'availability'=> $request->availability
        ]);
        return redirect()->route('medicine.manage')->with('message','Medicine create successfully');
    }
    public function delete($id){
        $medicines=Medicine::find($id);

        if($medicines){
            $medicines->delete();
        return redirect()->back()->with('message','Medicine is delete successfully');
        }
        return redirect()->back()->with('message','Medicine  is not deleted');
    }
    public function edit($id){
        //dd($id);
        $medicine_type=Type::all();
        $generic_type=Generic::all();
        $medicine_edit=Medicine::find($id);
        return view('backend.layout.medicine.editmedicine',compact('medicine_edit','medicine_type','generic_type'));
    }
    public function update(Request $request,$id){
        //dd($request all());
        //dd($id);
        $medicine_update=Medicine::find($id);
       $medicine_update->update([
            'image'=>$request->filename,
            'medicine_name'=>$request->medicine_name,
            'sale_price'=>$request->sale_price,
            'description'=>$request->description,
            'type_id'=>$request->type,
            'generic_id'=>$request->generic,
            'availability'=>$request->availability
        ]);
        return redirect()->route('medicine.manage')->with('message','Medicine is update successfully');

    }
}
