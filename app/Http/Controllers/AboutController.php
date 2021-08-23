<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
 
class AboutController extends Controller
{
    public function AllContact()
    {
        $contact=DB::table('contacts')->get();

        return view('pages.allcontact')->with('data',$contact);
    }

    public function InsertData()
    {
        return view('pages.insert');
    }

    public function DataAdded(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $ins=DB::table('contacts')->insert($data);

        return Redirect()->route('all.contacts');

    }

    public function Delete($id)
    {
        $dlt=DB::table('contacts')->where('id',$id)->delete();
        return Redirect()->route('all.contacts');
    }

    public function Edit($id)
    {
        $edt=DB::table('contacts')->where('id',$id)->first();
        return view('pages.editcontact', compact('edt'));
    }

    public function Update(Request $request,$id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

        $upd=DB::table('contacts')->where('id',$id)->update($data);
        return Redirect()->route('all.contacts');
    }

    public function View($id)
    {
        $view=DB::table('contacts')->where('id',$id)->first();
        return view('pages.view', compact('view'));
    }

}
