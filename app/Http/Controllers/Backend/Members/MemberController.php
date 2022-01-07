<?php

namespace App\Http\Controllers\Backend\Members;

use App\Http\Controllers\Controller;
use App\Models\Members;
use App\Models\LedenStraten;
use App\Models\Label;
use App\Models\Dagen;
use Illuminate\Http\Request;

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
}
