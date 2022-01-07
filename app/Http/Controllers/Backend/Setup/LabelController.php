<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function ViewLabel(){
        $data['allData'] = Label::all();
        return view('backend.setup.label.view_label', $data);
    }//end viewlabel

    public function AddLabel(){
        return view('backend.setup.label.add_label');
    }//end addlabel

    public function StoreLabel(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:labels,name',
        ]);

        $data = new Label();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Label Toegevoegd',
            'alert-type' => 'success'
        );

        return redirect()->route('leden.label.view')->with($notification);
    }//end storelabel

    public function EditLabel($id){
        $editData = Label::find($id);
        return view('backend.setup.label.edit_label',compact('editData'));
    }//end editlabel

    public function UpdateLabel(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|unique:labels,name',
        ]);

        $data = Label::find($id);
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Label Geupdate',
            'alert-type' => 'info'
        );

        return redirect()->route('leden.label.view')->with($notification);
    }//end updatelabel

    public function DeleteLabel($id){
        $straat = Label::find($id);
        $straat->delete();

        $notification = array(
            'message' => 'Label Verwijderd',
            'alert-type' => 'error'
        );

        return redirect()->route('leden.label.view')->with($notification);

    }//end deletelabel
}
