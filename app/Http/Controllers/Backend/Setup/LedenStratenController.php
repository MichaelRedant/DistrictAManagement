<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LedenStraten;

class LedenStratenController extends Controller
{
    public function ViewStreet(){
        $data['allData'] = LedenStraten::all();
        return view('backend.setup.straat.view_straat', $data);
    }//end viewstreet

    public function AddStreet(){
        return view('backend.setup.straat.add_straat');
    }//end addstreet

    public function StoreStreet(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:leden_stratens,name',
        ]);

        $data = new LedenStraten();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Straat Toegevoegd',
            'alert-type' => 'success'
        );

        return redirect()->route('leden.straten.view')->with($notification);
    }//end storestreet

    public function EditStreet($id){
        $editData = LedenStraten::find($id);
        return view('backend.setup.straat.edit_straat',compact('editData'));
    }//end editstreet

    public function UpdateStreet(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|unique:leden_stratens,name',
        ]);

        $data = LedenStraten::find($id);
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Straat Geupdate',
            'alert-type' => 'info'
        );

        return redirect()->route('leden.straten.view')->with($notification);
    }//end updatestreet

    public function DeleteStreet($id){
        $straat = LedenStraten::find($id);
        $straat->delete();

        $notification = array(
            'message' => 'Straat Verwijderd',
            'alert-type' => 'error'
        );

        return redirect()->route('leden.straten.view')->with($notification);

    }//end deletestreet

}
