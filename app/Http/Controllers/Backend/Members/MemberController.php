<?php

namespace App\Http\Controllers\Backend\Members;

use App\Http\Controllers\Controller;
use App\Models\Members;
use App\Models\LedenStraten;
use App\Models\Label;
use App\Models\Dagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function ViewMembers(){
        $data['allData'] = Members::all();
        return view('backend.members.view_members', $data);
    }//end viewmembers

    public function AddMembers(){
        $data['straten'] = LedenStraten::all();
        $data['labels'] = Label::all();
        $data['dagen'] = Dagen::all();
        return view('backend.members.add_members',$data);
    }//end addmember

    public function StoreMembers(Request $request){

                $memberData = new Members();
                $memberData->name_business = $request->name_business;
                $memberData->name_zaakvoerder = $request->name_zaakvoerder;
                $memberData->email = $request->email;
                $memberData->website = $request->website;
                $memberData->street_id = $request->street_id;
                $memberData->street_number = $request->street_number;
                $memberData->hours = $request->hours;
                $memberData->closing = $request-> dagens;
                $memberData->label = $request-> label;
                $memberData->save();

                $notification = array(
                'message' => 'District A lid Toegevoegd',
                'alert type' => 'success'
                );

            return redirect()->route('members.view')->with('$notification');


    }//end storemembers

    public function EditMembers($id){

        $data['data'] = Members::find($id);
        $data['straten'] = LedenStraten::all();
        $data['labels'] = Label::all();
        $data['dagen'] = Dagen::all();
        

        return view('backend.members.edit_member',$data);
    }//end editmember

}
